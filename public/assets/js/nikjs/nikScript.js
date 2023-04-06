

// Validate GST
//Start
    function validateGst(e , inputPanId) {
        var reggst = /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/;
        var gst_val = e.value;
        if(!(reggst.test(gst_val))){
                swal({
                title: "Invalid!",
                text: "Seems like the GSTIN no. is not valid",
                icon: "error",
                button: "ok",
                timer: 5000,
            });
            document.getElementById(inputPanId).value = '';
        }
        else
        {
            // $("#mf_pan").attr("disabled", false);
            var panValue = gst_val.substring(3, 12);
            document.getElementById(inputPanId).value = panValue;
        }
    }
//End

// Session Calculation
    //start
    // Get the book start date input and financial year select elements
    const bookStartDateInput = document.getElementById("book_start_date");
    const financialYearSelect = document.getElementById("financial_year");
    const financialSessionInput = document.getElementById("financial_session");
    function calculateFinancialSession() {
        const bookStartDateValue = bookStartDateInput.value;
        // console.log(bookStartDateValue);
        var financialYearStart ='';
        const financialYearValue = financialYearSelect.value;
            let financialYearEnd = "";
                if (financialYearValue === "apr-to-mar") {
                    financialYearEnd = "-03-31";
                    if(bookStartDateValue > (bookStartDateValue.substr(0, 4) + "-03-01" )){
                        financialYearStart = eval((parseInt(bookStartDateValue.substr(0, 4)) + 1)) + financialYearEnd ;
                    }else{
                        financialYearStart =  bookStartDateValue.substr(0, 4) + financialYearEnd;
                    }
                }
                else if (financialYearValue === "jan-to-dec") {
                    financialYearEnd = "-12-31";
                    financialYearStart =  bookStartDateValue.substr(0, 4) + financialYearEnd;
                }
            var bookStartDateValueArr = bookStartDateValue.split("-");
            var financialYearStartArr = financialYearStart.split("-");
            // Reorder the array elements to the new date format
            var newbookStartDateValueArr = [bookStartDateValueArr[2], bookStartDateValueArr[1], bookStartDateValueArr[0]];
            var newfinancialYearStartArr = [financialYearStartArr[2], financialYearStartArr[1], financialYearStartArr[0]];
            // Join the array elements into a string using the "-" separator
            var shownewbookStartDateValueArr = newbookStartDateValueArr.join("-");
            var shownewfinancialYearStartArr = newfinancialYearStartArr.join("-");
            financialSessionInput.value = shownewbookStartDateValueArr +" To "+ shownewfinancialYearStartArr;
            // bookStartDateInput.value = shownewbookStartDateValueArr;
    }
    //End

//Validate Email
    // start
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email.value)) {
        // display success message using Swal
            swal({
                title: " Oops",
                text: "**Entered Invalid Email ID !!",
                icon: "error",
                button: "Okay!",
        });

        }
    }
    // End

//validation Pincode
    //start
    function validatePincode(pincode) {
        // Regular expression to match 6-digit numbers
        var pattern = /^\d{6}$/;
        // Check if the input matches the pattern
        if (pattern.test(pincode.value)) {
          // Check the first digit to make sure it's a valid region code
          var regionCode = parseInt(pincode.value.charAt(0));
          if (regionCode >= 1 && regionCode <= 9) {
            // Valid PINCODE
            return true;
          }
        }
        // Invalid PINCODE
        return swal({
            title: "Invalid!",
            text: "Seems like the Pincode is not valid",
            icon: "error",
            button: "ok",
            timer: 5000
        })
      }

    //End

//validation Url
    //start
    function validateUrl(url) {
        // Regular expression to match URLs
        var pattern = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
        // Check if the input matches the pattern
        if (pattern.test(url.value)){
          // Valid URL
          return true;
        } else {
          // Invalid URL
            return swal({
                title: "Invalid!",
                text: "Seems like the Url is not valid",
                icon: "error",
                button: "ok",
                timer: 5000
            })
        }
      }


    //End

//validation IFSC
    //start
    function validateIFSC(ifsc) {
        const regex = /^[A-Z]{4}0[A-Z0-9]{6}$/; // Regular expression to match the IFSC format
        if (regex.test(ifsc.value)){
            // Valid IFSC
            return true;
          } else {
            // Invalid IFSC
              return swal({
                  title: "Invalid!",
                  text: "Seems like the IFSC is not valid",
                  icon: "error",
                  button: "ok",
                  timer: 5000
              })
          }
      }
     //End

//validation convert To Float
    //start
     function convertToFloat(integerInput, integerInputId) {
        const floatOutput = document.getElementById(integerInputId);
        // const integerValue = parseInt(integerInput.value);
        const floatValue = parseFloat(integerInput.value);
        floatOutput.value = floatValue.toFixed(2);
      }
     //End
// Numberic only
    //start
    function numericOnly(event) {
        return (event.charCode >= 48 && event.charCode <= 57);
    }
    //End
