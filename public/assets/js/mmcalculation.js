var unit = document.getElementById('unit').value;
var registration2 = document.getElementById('registration2');
var registration1 = document.getElementById('registration1');
console.log(unit);

$(document).ready(function(){
    $(registration2).on('input change keypress', function() {
    document.getElementById('registration1').value = this.value;
    calculateLIPLMMR(this);
    calculateCustomerMMR(this);
    // return (event.charCode >= 48 && event.charCode <= 57);
    })
});

$(document).ready(function(){
    $(registration1).on('input change keypress', function() {
    document.getElementById('registration2').value = this.value;
    calculateCustomerMMR(this);
    calculateLIPLMMR(this);
    // return (event.charCode >= 48 && event.charCode <= 57);
    });
});

function torupeeformat(e) {
    e.value = rupee_format(e.value);
}

function rupee_format(e) {
    var x = _s(e.toString(),',');
    var lastThree = x.substring(x.length-3);
    var otherNumbers = x.substring(0,x.length-3);
    if(otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
    return(res);
}

function calculateCustomerMMR(e) {
  torupeeformat(e);
  var actual = _s(document.getElementById('actualbilling1').value, ',');
  console.log(actual);
  var overbilling_difference = _s(document.getElementById('overbilling1').value, ',');
  var finance_amount = _s(document.getElementById('financeamount1').value, ',');
  var processing_fee = _s(document.getElementById('processingfee').value, ',');
  var insurance = _s(document.getElementById('insurance1').value, ',');
  var othercharges = _s(document.getElementById('othercharges1').value, ',');
  var registration_tax = _s(document.getElementById('registration1').value, ',');
  var total = _s(document.getElementById('total1').value, ',');
  var recievable = _s(document.getElementById('recievable1').value, ',');
  var netrecievable = _s(document.getElementById('netrecievable1').value, ',');


  total = parseInt(actual ? actual : 0 ) + parseInt(overbilling_difference ? overbilling_difference : 0);
  recievable = parseInt(total ? total : 0) - parseInt(finance_amount ? finance_amount : 0) + parseInt(processing_fee ? processing_fee : 0);
  netrecievable = parseInt(recievable ? recievable : 0) - (parseInt(insurance ? insurance : 0) + parseInt(othercharges ? othercharges : 0)) + parseInt(registration_tax ? registration_tax : 0);

  document.getElementById('total1').value = rupee_format(total);
  document.getElementById('recievable1').value = rupee_format(recievable);
  document.getElementById('netrecievable1').value = rupee_format(netrecievable);

  if(unit > 1) {
    customer_labels();
  }
}

function calculateLIPLMMR(e) {
  torupeeformat(e);
  var actual = _s(document.getElementById('actualbilling2').value, ',');
  var finance_amount = _s(document.getElementById('financeamount2').value, ',');
  var processing_fee = _s(document.getElementById('subvention').value, ',');
  var insurance = _s(document.getElementById('insurance2').value, ',');
  var othercharges = _s(document.getElementById('othercharges2').value, ',');
  var registration_tax = _s(document.getElementById('registration2').value, ',');
  var recievable = _s(document.getElementById('recievable2').value, ',');
  var netrecievable = _s(document.getElementById('netrecievable2').value, ',');
  total = parseInt(actual ? actual : 0 );
  recievable = parseInt(total ? total : 0) - parseInt(finance_amount ? finance_amount : 0) - parseInt(processing_fee ? processing_fee : 0);
  netrecievable = parseInt(recievable ? recievable : 0) - (parseInt(insurance ? insurance : 0) + parseInt(othercharges ? othercharges : 0)) + parseInt(registration_tax ? registration_tax : 0);
  document.getElementById('recievable2').value = rupee_format(recievable);
  document.getElementById('netrecievable2').value = rupee_format(netrecievable);
  if(unit > 1) {
    manufacturer_labels();
  }
}

function _s(string, separator) {
  const separatedArray = string.split(separator);
  const separatedString = separatedArray.join("");
  return separatedString;
}

function unitCross() {
  return (' x ' + unit + ' &nbsp;  &nbsp; = &nbsp; &nbsp; ')
}

calculateCustomerMMR(document.getElementById('actualbilling1'));
calculateLIPLMMR(document.getElementById('actualbilling2'));

// Customer calculation section
function customer_labels() {
    document.getElementById('multiple_actualbilling1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('actualbilling1').value ?? 0, ',')));
    document.getElementById('multiple_overbilling1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('overbilling1').value ?? 0, ',')));
    document.getElementById('multiple_financeamount1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('financeamount1').value ?? 0, ',')));
    document.getElementById('multiple_processingfee').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('processingfee').value ?? 0, ',')));
    document.getElementById('multiple_insurance1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('insurance1').value ?? 0, ',')));
    document.getElementById('multiple_othercharges1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('othercharges1').value ?? 0, ',')));
    document.getElementById('multiple_registration1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('registration1').value ?? 0, ',')));
    document.getElementById('multiple_total1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('total1').value ?? 0, ',')));
    document.getElementById('multiple_recievable1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('recievable1').value ?? 0, ',')));
    document.getElementById('multiple_netrecievable1').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('netrecievable1').value ?? 0, ',')));
}

// manufacturer calculation section
function manufacturer_labels() {
    document.getElementById('multiple_actualbilling2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('actualbilling2').value ?? 0, ',')));
    document.getElementById('multiple_financeamount2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('financeamount2').value ?? 0, ',')));
    document.getElementById('multiple_subvention').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('subvention').value ?? 0, ',')));
    document.getElementById('multiple_insurance2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('insurance2').value ?? 0, ',')));
    document.getElementById('multiple_othercharges2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('othercharges2').value ?? 0, ',')));
    document.getElementById('multiple_registration2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('registration2').value ?? 0, ',')));
    document.getElementById('multiple_total2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('total2').value ?? 0, ',')));
    document.getElementById('multiple_recievable2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('recievable2').value ?? 0, ',')));
    document.getElementById('multiple_netrecievable2').innerHTML = unitCross() + rupee_format(unit * parseInt(_s(document.getElementById('netrecievable2').value ?? 0, ',')));
}

$(document).ready(function () {
  if(unit > 1) {
    customer_labels();
    manufacturer_labels();
  }
});

