var lnsv = document.getElementById('lnsv');
var basic_price = document.getElementById('basic_price');
var deal_basic = document.getElementById('deal_basic');
var deal_basic2 = document.getElementById('deal_basic2');
var sc = document.getElementById('standard_commision');
var gr = document.getElementById('gross_realization');
var gr_amount = document.getElementById('gr_amount');
var net_amount = document.getElementById('net_amount');

var add_amt = document.getElementById('add_amt');
var dec_amt = document.getElementById('dec_amt');

var pol_status = document.getElementById('pol_status');
var pol_amount = document.getElementById('pol_amount');
var pol_current = document.getElementById('pol_current');
var adjust_kitty = document.getElementById('adjust_kitty');
var total_expense = document.getElementById('total_expense');
var transit_amount = document.getElementById('transit_amount');
var comprehensive_amount = document.getElementById('comprehensive_amount');
var transportation_amount = document.getElementById('transportation_amount');
var rto_amount = document.getElementById('rto_amount');
var foc_amount = document.getElementById('foc_amount');
var tpc_amount = document.getElementById('tpc_amount');
var attachments_amount = document.getElementById('attachments_amount');
var l_involved = document.getElementById('other_included_amount');
var oa = document.getElementById('other_amount');

$(deal_basic).on('input change keyup', function() {
    calculate_gr();
});

$(add_amt).on('input', function() {
    add_amt.value = adjust_number(this);
    deal_basic.value = getDealPrice() + _f(add_amt);
    dec_amt.value = 0;
    calculate_gr();
});

$(dec_amt).on('input', function() {
    dec_amt.value = adjust_number(this);
    deal_basic.value = getDealPrice() - _f(dec_amt);
    add_amt.value = 0;
    calculate_gr();
});

$(document).ready(function () {
    var cnsv = getDealPrice();
    deal_basic.value = 0;
    console.log(getDealPrice());
    if((parseFloat(cnsv) - _f(lnsv)) >= 0) {
        console.log('profit');
        pol_status.value = 1;
    } else {
        pol_status.value = 0;
        console.log("loss");
    }
    deal_basic.value = getDealPrice() + _f(l_involved);
    calculate_gr();
});


function calculate_gr() {
    deal_basic2.value = _f(deal_basic);
    gr.value = _f(basic_price) - _f(deal_basic);
    console.log(_f(add_amt) + ' ==== ' + _f(dec_amt));
    if(deal_basic.value == '' || deal_basic.value == 0) {
        deal_basic.value = 0;
        gr.value = 0;
        deal_basic2.value = 0;
    }
    gr_amount.innerHTML = _f(gr);
    net_amount.innerHTML = _f(gr) - _f(total_expense);
    console.log(_f(deal_basic));
    console.log(getDealPrice());
    if(_f(deal_basic) >= (getDealPrice())) {
        dec_amt.value = 0;
        add_amt.value = _f(deal_basic) - getDealPrice();
        console.log('profit');
    } else {
        dec_amt.value = getDealPrice() - _f(deal_basic);
        add_amt.value = 0;
        console.log('loss');
    }
    console.log(_f(add_amt) + ' ==== ' + _f(dec_amt) + 'Confirmation');
    if((_f(gr) - _f(total_expense)) < _f(sc)) {
        if (pol_current.classList.contains('text-success')) pol_current.classList.remove("text-success");
        if (!(pol_current.classList.contains('text-danger'))) pol_current.classList.add("text-danger");
        adjust_kitty.value = _f(sc) - (_f(gr) - _f(total_expense));
        pol_status.value = 0;
        pol_amount.value = _f(sc) - (_f(gr) - _f(total_expense));
        pol_current.innerHTML = 'Loss Rs. ' + (_f(pol_amount));
    } else {
        if (pol_current.classList.contains('text-danger')) pol_current.classList.remove("text-danger");
        if (!(pol_current.classList.contains('text-success'))) pol_current.classList.add("text-success");
        adjust_kitty.value = '';
        pol_status.value = 1;
        pol_amount.value = (_f(gr) - _f(total_expense)) - _f(sc);
        pol_current.innerHTML = 'Profit Rs. ' + (_f(pol_amount));
    }
}

function save_status() {
    $.ajax({
        type: 'POST',
        url: window.location.href,
        data: {deal_basic:_f(deal_basic), commision:_f(sc), gross_realization:_f(gr), other:document.getElementById('other').value , other_amount:parseFloat(adjust_number(oa)), pol_status:pol_status.value, add_amt:_f(add_amt), dec_amt:_f(dec_amt)},
        success: function(res) {
            if(res != '') {
                alert(res);
            }
        }
    });
}

$('#other').on('input change',function () { calculate_expense(); });
$('#other_amount').on('input change',function () { this.value = adjust_number(this); calculate_expense(); });

function calculate_expense() {
    total_expense.value = 0;
    total_expense.value = _f(transit_amount) + _f(comprehensive_amount) + _f(transportation_amount) + _f(rto_amount) + _f(foc_amount) + _f(tpc_amount) + _f(attachments_amount);
    if(oa.value != '') { total_expense.value = _f(total_expense) + _f(oa); }
    document.getElementById('total_expense1').innerHTML = _f(total_expense);
    calculate_gr();
}

function getDealPrice() {
    var cnsv = _f(basic_price) - _f(total_expense) - _f(l_involved);
    var deal_price;
    if((parseFloat(cnsv) - _f(lnsv)) >= 0) {
        deal_price = _f(lnsv) - _f(sc) + _f(l_involved);
    } else {
        deal_price = parseFloat(cnsv) - _f(sc) + _f(l_involved);
    }
    return parseFloat(deal_price);
}

function _f(e) { return parseFloat(e.value ?? 0); }

function adjust_number(e) {
    var pattern = /^0*(.*[0-9])/;
    if(e.value === 'NaN') {
        return 0;
    } else if(e.value.match(pattern)) {
        while(e.value.charAt(0) === '0') {
            e.value = e.value.substring(1);
        }
    }
    if(e.value == '') {
        e.value = 0; }
    return e.value;
}
