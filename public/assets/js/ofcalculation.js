
var model = document.getElementById('model');
var bucket = document.getElementById('bucket');
var base_price = document.getElementById('basic_price');
// var att_price = document.getElementById('att_price');
// var att_name = document.getElementById('att_name');
// var att_price1 = document.getElementById('att_price1');
$(base_price).on('input', function() {
    calculate_total_amount();
    calculateNCB();
});
var total_amount = document.getElementById('tot_amount');
$(total_amount).on('input', function() {
    reverse_calculate();
    calculateNCB();
});
var tcs = document.getElementById('tcs');
var tcs_value = document.getElementById('tcs_value_display_amount');
var gst_text = document.getElementById('gst');
var gst_value = document.getElementById('gst_value_display_amount');
$(gst_text).on('change', function() {
    var gst_amount = (18 / 100) * _f(base_price);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        gst_value.value = 'Rs. ' + (gst_amount / 2) + ', Rs. ' + _mr(gst_amount / 2);
    } else {
        gst_value.value = 'Rs. ' + _mr(gst_amount);
    }
    var obga = (18 / 100) * _f(obp);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        obgvda.value = 'Rs. ' + _mr(obga / 2) + ', Rs. ' + _mr(obga / 2);
    } else {
        obgvda.value = 'Rs. ' + _mr(obga);
    }
});
var wheel = document.getElementById('wheeled');
var nowheel = document.getElementById('non-wheeled');
$(wheel).on('click', function() {
    tcs.value = 1 + ' %';
    calculate_total_amount();
    ob_calculate_total_amount();
});
$(nowheel).on('click', function() {
    tcs.value = 0.1 + ' %';
    calculate_total_amount();
    ob_calculate_total_amount();
});
var transitinsurance = document.getElementById('transitinsurance');
var transit_amount = document.getElementById('transit_amount');
$(transitinsurance).on('change', function() { calculateNCB(); });
$(transit_amount).on('input', function() { calculateNCB(); });
var comprehensiveinsurance = document.getElementById('comprehensiveinsurance');
var comprehensive_amount = document.getElementById('comprehensive_amount');
$(comprehensiveinsurance).on('change', function() { calculateNCB(); });
$(comprehensive_amount).on('input', function() { calculateNCB(); });
var transportation = document.getElementById('transportation');
var transportation_amount = document.getElementById('transportation_amount');
$(transportation).on('change', function() { calculateNCB(); });
$(transportation_amount).on('input', function() { calculateNCB(); });
var foc = document.getElementById('foc');
var foc_amount = document.getElementById('foc_amount');
$(foc).on('change', function() { calculateNCB(); });
$(foc_amount).on('input', function() { calculateNCB(); });

var rto = document.getElementById('rto');
var rto_amount = document.getElementById('rto_amount');
$(rto).on('change', function() { calculateNCB(); });
$(rto_amount).on('input', function() { calculateNCB(); });

var tpc = document.getElementById('tpc');
var tpc_amount = document.getElementById('tpc_amount');
$(tpc).on('change', function() { calculateNCB(); });
$(tpc_amount).on('input', function() { calculateNCB(); });

var attachments = document.getElementById('attachments');
var attachments_amount = document.getElementById('attachments_amount');
$(attachments).on('change', function() { calculateNCB(); });
$(attachments_amount).on('input', function() { calculateNCB(); });

var lnsv = 0;
// var sc = document.getElementById('standatdcommision');
// var ncb = document.getElementById('ncb');
var pol = document.getElementById('pol_str');
// var lbp = 0;

var OBsection = document.getElementById('overbilling-section');

var ob = document.getElementById('overbilling');
$(obp).on('input change keyup', function() {
    triggerOB();
});

var obp = document.getElementById('overbilling_basic_price');
$(obp).on('input change keyup', function() { ob_calculate_total_amount(); calculateNCB(); });

var ota = document.getElementById('overbilling_tot_amount');
$(ota).on('input change keyup', function() { ob_reverse_calculate(); calculateNCB(); });
var obtvda = document.getElementById('overbilling_tcs_value_display_amount');
var obgvda = document.getElementById('overbilling_gst_value_display_amount');
$(base_price).on('input', function() {
    var gst_val = _f(base_price) * (18 / 100);
    gst_value.value = _mr(gst_val);
    var tcs_val = (_f(base_price) + (gst_val)) * (1 / 100);
    tcs_value.value = _mr(tcs_val);
    total_amount.value = _mr(_f(base_price) + gst_val + tcs_val);
});

function triggerOB() {
    if(ob.checked == true) {
        OBsection.style.display = "block";
    } else {
        obp.value = 0;
        OBsection.style.display = "none";
    }
    calculateNCB();
}
function calculateNCB() {
    var ncb_val = 0;
    if(ob.checked == true) {
        ncb_val = _f(obp);
    } else {
        ncb_val = _f(base_price);
    }
    if (transitinsurance.value == 'By Dealer') {
        ncb_val -= _f(transit_amount);
    }
    if (comprehensiveinsurance.value == 'By Dealer') {
        ncb_val -= _f(comprehensive_amount);
    }
    if (tpc.value == 'By Dealer') {
        ncb_val -= _f(tpc_amount);
    }
    if (attachments.value == 'By Dealer') {
        ncb_val -= _f(attachments_amount);
    }
    if (transportation.value == 'By Dealer') {
        ncb_val -= _f(transportation_amount);
    }
    if (rto.value == 'By Dealer') {
        ncb_val -= _f(rto_amount);
    }
    if (foc.value == 'By Dealer') {
        ncb_val -= _f(foc_amount);
    }
    pol_amount.value = Math.abs(_mr(ncb_val - lnsv));
    if (_mr(ncb_val - lnsv) > 0) {
        pol.style.display = 'block';
        if (pol.classList.contains('text-danger')) pol.classList.remove("text-danger");
        if (!(pol.classList.contains('text-danger'))) pol.classList.add("text-success");
        pol.innerHTML = 'PROFIT ' + _mr(ncb_val - lnsv);
        pol_status.value = 1;
    } else if (_mr(ncb_val - lnsv) < 0) {
        pol.style.display = 'block';
        if (pol.classList.contains('text-success')) pol.classList.remove("text-success");
        if (!(pol.classList.contains('text-danger'))) pol.classList.add("text-danger");
        pol.innerHTML = 'LOSS ' + _mr(ncb_val - lnsv);
        pol_status.value = 0;
    } else {
        pol.style.display = 'none';
        pol.innerHTML = '';
        pol_status.value = 1;
    }
}
function calculate_total_amount() {
    var tcs_val = tcs.value.split(' ')[0];
    var gst_amount = (18 / 100) * _f(base_price);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        gst_value.value = 'Rs. ' + _mr(gst_amount / 2) + ', Rs. ' + _mr(gst_amount / 2);
    } else {
        gst_value.value = 'Rs. ' + _mr(gst_amount);
    }
    var tcs_amount = (tcs_val / 100) * (_f(base_price) + gst_amount);
    tcs_value.value = 'Rs. ' + _mr(tcs_amount);
    total_amount.value = _mr(_f(base_price) + gst_amount + tcs_amount);
    calculateNCB();
}
function reverse_calculate() {
    var tcs_val = tcs.value.split(' ')[0];
    var divid = 0;
    if (tcs_val == 0.1) {
        divid = 1001;
    } else if (tcs_val == 1) {
        divid = 101;
    }
    var tcs_amount = _f(total_amount) / (divid);
    tcs_value.value = 'Rs. ' + _mr(tcs_amount);
    var base_amount = (_f(total_amount) - tcs_amount) / (118 / 100);;
    var gst_amount = _f(total_amount) - (base_amount + tcs_amount);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        gst_value.value = 'Rs. ' + _mr(gst_amount / 2) + ', Rs. ' + _mr(gst_amount / 2);
    } else {
        gst_value.value = 'Rs. ' + _mr(gst_amount);
    }
    base_price.value = _mr(base_amount);
    calculateNCB();
}
function ob_calculate_total_amount() {
    var tcs_val = tcs.value.split(' ')[0];
    var obga = (18 / 100) * _f(obp);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        obgvda.value = 'Rs. ' + _mr(obga / 2) + ', Rs. ' + _mr(obga / 2);
    } else {
        obgvda.value = 'Rs. ' + _mr(obga);
    }
    var tcs_amount = (tcs_val / 100) * (_f(obp) + obga);
    obtvda.value = 'Rs. ' + _mr(tcs_amount);
    ota.value = _mr(_f(obp) + obga + tcs_amount);
}
function ob_reverse_calculate() {
    var tcs_val = tcs.value.split(' ')[0];
    var divid = 0;
    if (tcs_val == 0.1) {
        divid = 1001;
    } else if (tcs_val == 1) {
        divid = 101;
    }
    var obta = _f(ota) / (divid);
    obtvda.value = 'Rs. ' + _mr(obta);
    var oba = (_f(ota) - obta) / (118 / 100);
    var oga = _f(ota) - (oba + obta);
    if (gst_text.value == "@CGST 9%, @SGST 9%") {
        obgvda.value = 'Rs. ' + _mr(oga / 2) + ', Rs. ' + _mr(oga / 2);
    } else {
        obgvda.value = 'Rs. ' + _mr(oga);
    }
    obp.value = _mr(oba);
}
function _f(a) {
    return parseFloat((a.value != '') ? a.value : 0);
}
function _mr(a) {
    return Math.round(a);
}
function triggerTaxVisibility(e) {
    if (e.checked == true) {
        document.getElementById(e.id + 's').style.display = 'block';
    } else {
        document.getElementById(e.id + 's').style.display = 'none';
    }
}
    $(model).on('change', function() {
    // var prodBucket = "";
    // first Ajax function
        $.ajax({
            type: 'POST',
            // url: window.location.protocol + '//' + window.location.hostname + '/' + (window.location.pathname.split("/"))[1] + '/'+ (window.location.pathname.split("/"))[2] + '/product',
            url: 'http://127.0.0.1:8000/dealer/machine/prod',
            // url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                pid: model.value,
            },
            success: function(res) {
                data = JSON.parse(res);
                if ((data['cat_id'] == 3) || (data['cat _id'] == 4)) {
                    $(nowheel).trigger('click');
                } else {
                    $(wheel).trigger('click');
                }
                total_amount.value = _mr(data['prod_total_price']);
                reverse_calculate();
                lnsv = _mr(data['prod_nsv']);
                // Second Ajax function
                $.ajax({
                    type: 'POST',
                    // url: window.location.protocol + '//' + window.location.hostname + '/' + (window.location.pathname.split("/"))[1] + '/'+ (window.location.pathname.split("/"))[2] + '/product',
                    url: 'http://127.0.0.1:8000/dealer/machine/getAttachmentByPid',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        pid: data['prod_id'],
                    },
                    success: function(result) {
                        document.getElementById("hidden_prod_id").value = data['prod_id'];
                        att_data = JSON.parse(result);
                        // var i = 0;
                        // var g = 0;
                        // console.log('hiiii');
                        
                        // for(n = 1 ; n <= att_data['standard'].length; n++) {
                        //     if(n < (att_data['standard'].length))
                        //     addOrderElement();
                        // }
                        // att_data['standard'].forEach(function(item, b) {
                        //     $('#att_name'.concat(b+1)).val(item['att_name']);
                        //     $('#att_price'.concat(b+1)).val(item['sale_price']);
                        //     $("#att_name".concat(b+1)).attr('readonly', 'readonly');
                        //     $('#att_price'.concat(b+1)).attr('readonly', 'readonly');
                        //     // id = b+2;
                        // });
                        // console.log(id);
                        // var selOpts1 = "<option value=''>Select</option>";
                        // var price = [];
                        // var data = att_data['all'];
                        // $.each(data, function(k)
                        // {
                        //     var val = data[k].att_name ;
                        //     selOpts1 += "<option value='"+val+"'>"+val+"</option>" ;
                        // });
                        // console.log(selOpts1);
                        // addOrderSelectElement();
                        // document.getElementById("att_name"+id).innerHTML = selOpts1;
                        // document.getElementById("att_price".id).value = price[id-2] ;
                        // $( "li" ).each(function() {
                        //     $( this ).toggleClass( "example" );
                        // });
                    }
                });
                // function myFunction(item, b) {
                //     $('#att_name'.concat(b+1)).val(item['att_name']);
                //     $('#att_price'.concat(b+1)).val(item['sale_price']);
                //     $("#att_name".concat(b+1)).attr('readonly', 'readonly');
                //     $('#att_price'.concat(b+1)).attr('readonly', 'readonly');
                //     return b+1;
                // }

                // console.log(data);
                // const pa = data['prod_attachments'].split('/');
                // if (pa.length > 0 && pa != ' ') {
                //     pa.forEach(function myFunction(item, index) {
                //         prodBucket += "<option value=" + item + ">" + item + "</option>";
                //         bucket.removeAttribute('disabled');
                //     });
                // } else {
                //     bucket.setAttribute("disabled", "disabled");
                //     prodBucket += "<option>Attachment Not Specified</option>";
                // }
                // bucket.innerHTML = prodBucket;
                calculateNCB();
            },
        });

});
