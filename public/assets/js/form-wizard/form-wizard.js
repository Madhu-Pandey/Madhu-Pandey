"use strict";
var currentTab = 0;
showTab(currentTab);
function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
    var x = document.getElementsByClassName("tab");
    // if (n == 0 && !validateForm()) return false;
    if (n == 1 && !validateForm()) return false;
    x[currentTab].style.display = "none";
    currentTab = currentTab + n;
    if (currentTab >= x.length) {
      document.getElementById("regForm").submit();
      return false;
    }
    // if(currentTab)
    // console.log(currentTab);
        showTab(currentTab);
  }

//nik validateform start
function validateForm() {
    var x, y, i, s, j, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    s = x[currentTab].getElementsByTagName("select");
    for (i = 0; i < y.length; i++) {
      if (y[i].hasAttribute("required") && y[i].value === "") {
        y[i].className += " invalid";
        valid = false;
      }
    }
    for (j = 0; j < s.length; j++) {
      if (s[j].hasAttribute("required") && s[j].value === "") {
        s[j].className += " invalid";
        valid = false;
      }
    }
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid;
  }
  //nik validateform end

// function validateForm() {
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByTagName("input");
//   for (i = 0; i < y.length; i++) {
//     if (y[i].value == "") {
//       y[i].className += " invalid";
//       valid = false;
//     }
//   }
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid;
// }
function fixStepIndicator(n) {
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}
