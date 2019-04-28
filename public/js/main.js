
var currentTab = 0;
var n;
// var emailAddress[];

$(document).ready(function(){
   // Current tab is set to be the first tab (0)
  console.log('test1')
  showTab(currentTab); // Display the crurrent tab
  console.log('test2')
})



function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab"); console.log(x,n,x[n]);
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    $('#subBtn').show()
    $('#nextBtn').hide()
  } else {
    $('#subBtn').hide()
    $('#nextBtn').show()
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n);
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = $(x[currentTab]).find('.form-control.required');
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      $(y[i]).addClass('is-invalid').next('.invalid-feedback').remove();
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      $(y[i]).addClass('is-invalid');
      $(y[i]).after($('<div/>', {
        class: 'invalid-feedback',
        text: $(y[i]).data('validation-message') || ''
      }))


  // if($email == this.emailAddress)
  // {
  //   $(y[i]).addClass('is-invalid').next('.invalid-feedback').remove();
  // }

      // and set the current valid status to false
      valid = false;
    }
    //check the confrim password
    if($(y[i]).data('confirmed')){
      var password = $(y[i]).val(),
        cofirmation = $('[name='+$(y[i]).data('confirmed')+']').val();

        if((!password || !cofirmation ) || (password !== cofirmation)){

          $(y[i]).addClass('is-invalid').siblings('.invalid-feedback').remove();
          $(y[i]).after($('<div/>', {
            class: 'invalid-feedback',
            text: 'password do not match'
          }))


          $('[name='+$(y[i]).data('confirmed')+']').addClass('is-invalid').siblings('.invalid-feedback').remove();
          $('[name='+$(y[i]).data('confirmed')+']').after($('<div/>', {
            class: 'invalid-feedback',
            text: 'password do not match'
          }))
          
          valid = false;
        }else{
          $(y[i]).removeClass('is-invalid').siblings('.invalid-feedback').remove();
          $('[name='+$(y[i]).data('confirmed')+']').removeClass('is-invalid').siblings('.invalid-feedback').remove();
        }
    }
  }

  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].classList.add('finish');
  }
  return valid; // return the valid status
  // return true;
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    // x[i].className = x[i].className.replace(" active", );
    $(x[i]).removeClass('active');
  }
  //... and adds the "active" class on the current step:
  // x[n].className += " active";
  $(x[n]).addClass('active');
}

// DB Transaction for Insertion of data emailAddress 
  //   function getEmailAddFroDB = function (val) {

  //   db.transaction(function(transaction){
  //   transaction.executeSql('SELECT email FROM users', [], selectvalues, errorHandler)

  //  });
  // };
  // selectValues = function(transaction, results)
  // {
      
  //     for(var i = 0; i < results.rows.length; i++)
  //          {
  //              var row = results.rows.item(i);
  //              console.log("THIS IS THE ROW FROM Email DB",row)
  //              row.push(this.emailAddress[i]);
  //          }
  //     };

