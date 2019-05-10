
var currentTab = 0;
var n;
// var emailAddress[];

$(document).ready(function(){
   // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the crurrent tab

  $('input[name="email"]').on('change', function () {
    checkDuplicateEmail();
  });

  $('input[name="username"]').on('change', function () {
    checkDuplicateUsername();
  });

  $('#fileToUpload').on('change', function () {
    clearFeedback(this);
    checkImageSize(this);
  });

  $('#fileUpload1').on('change', function () {
    clearFeedback(this);
    checkImageSize(this);
  });

  $('#fileUpload2').on('change', function () {
    clearFeedback(this);
    checkImageSize(this);
  });

  $('#fileUpload3').on('change', function () {
    clearFeedback(this);
    checkImageSize(this);
  });

  $('#fileUpload4').on('change', function () {
    clearFeedback(this);
    checkImageSize(this);
  });
})

function clearFeedback(el) {
  $(el)
  .removeClass('limit-size')
  .removeClass('is-invalid')
  .removeClass('invalid');
}

function checkImageSize(el) {
  var fileSize = $(el)[0].files[0].size;
  
  console.log(fileSize);
  if(fileSize > 5000) {
    $(el).addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
    $(el).after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));
  
    $(el).addClass('limit-size');
  }
}



function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
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
    }else{
      $(y[i]).removeClass('is-invalid').removeClass('invalid').siblings('.invalid-feedback').remove();
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

  if($('input[name="expiry_date"]').val()) { // if there is an date input
    var date = new Date($('input[name="expiry_date"]').val()), // convert date input to date string
        current_date = new Date(); // current date
        
    if(date < current_date) { // check both dates if date input is less than current date
      $('input[name="expiry_date"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
      $('input[name="expiry_date"]').after($('<div/>', {
        class: 'invalid-feedback',
        text: 'Already Expired'
      }));
      
      valid = false;
    } else { // if date input > current date
      $('input[name="expiry_date"]').removeClass('is-invalid').removeClass('invalid').siblings('.invalid-feedback').remove();
    }
  }
    
  if($('input[name="email"]').val()) { // if there is an email input
    var regex = /^([a-zA-Z0-9_.-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/; // email validator
    
    if(regex.test($('input[name="email"]').val()) == false) { // check email if valid
      
      $('input[name="email"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
      $('input[name="email"]').after($('<div/>', {
        class: 'invalid-feedback',
        text: 'Invalid Email'
      }));

      valid = false;
    }else{
      $('input[name="email"]').removeClass('is-invalid').removeClass('invalid').siblings('.invalid-feedback').remove();
    }
  }


   if($('input[name="username"]').val()) { // if there is an username input
    var regex = /^([a-zA-Z0-9]{6,12})+$/; // username validator
    
    if(regex.test($('input[name="username"]').val()) == false) { // username email if valid
      
                  $('input[name="username"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
                  $('input[name="username"]').after($('<div/>', {
                    class: 'invalid-feedback',
                    text: 'Please Enter Six or more Characters'
                  }));

                  valid = false;
    }else{
      $('input[name="username"]').removeClass('is-invalid').removeClass('invalid').siblings('.invalid-feedback').remove();
    }
  }

  if($('input[name="username"]').hasClass('duplicate')) { // If email has duplicate 
    $('input[name="username"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
    $('input[name="username"]').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'username already taken'
    }));

    valid = false;
  }

  if($('input[name="email"]').hasClass('duplicate')) { // If email has duplicate
    $('input[name="email"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
    $('input[name="email"]').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'email already taken'
    }));

    valid = false;
  }

  if($('#fileToUpload').hasClass('limit-size')) { // If profile image is greater than the limit
    $('#fileToUpload').addClass('is-invalid').siblings('.invalid-feedback').remove();
    $('#fileToUpload').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));

    valid = false;
  }

  if($('#fileUpload1').hasClass('limit-size')) { // If front image is greater than the limit
    $('#fileUpload1').addClass('is-invalid').siblings('.invalid-feedback').remove();
    $('#fileUpload1').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));

    valid = false;
  }

  if($('#fileUpload2').hasClass('limit-size')) { // If back image is greater than the limit
    $('#fileUpload2').addClass('is-invalid').siblings('.invalid-feedback').remove();
    $('#fileUpload2').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));

    valid = false;
  }

  if($('#fileUpload3').hasClass('limit-size')) { // If nbi image is greater than the limit
    $('#fileUpload3').addClass('is-invalid').siblings('.invalid-feedback').remove();
    $('#fileUpload3').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));

    valid = false;
  }

  if($('#fileUpload4').hasClass('limit-size')) { // If bc image is greater than the limit
    $('#fileUpload4').addClass('is-invalid').siblings('.invalid-feedback').remove();
    $('#fileUpload4').after($('<div/>', {
      class: 'invalid-feedback',
      text: 'Upload is greater than 5MB'
    }));

    valid = false;
  }

  // If the valid status is true, mark the step as finished and vald:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].classList.add('finish');
  }
  return valid; // return the valid status
  // return true;
}
$.validator.addMethod(
    "checkPhoto",
    function (value, element) {
        if (this.optional(element) || ! element.files || ! element.files[0]) {
            return true;
        } else {
            return element.files[0].size <= 1024 * 1024 * 2;
        }
    },
    'The file size can not exceed 2MB.'
);
// function checkPhoto(target) {
//     if(target.files[0].size < 10240) {
//         document.getElementById("photoLabel").innerHTML = "Image too big (max 100kb)";
//       $('input[name="image"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
//       $('input[name="image"]').after($('<div/>', {
//         class: 'invalid-feedback',
//         text: 'Invalid image'
//       }));
//         return false;
//     }else{
//       $('input[name="image"]').removeClass('is-invalid').removeClass('invalid').siblings('.invalid-feedback').remove();
//     }
// }

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



// function to check duplicate
function checkDuplicateEmail() {
  var settings = $('#nextBtn').data('settings'), // from button data-settings
        _token = settings.token; // from button data-settings
  
  $.ajax({ 
    method: settings.method,
    url: settings.url, // from button data-settings - /client-validation or /therapist-validation depending on the form
    data: { 
      email : $('input[name="email"]').val(), // email input value
      _token: _token // from button data-settings
    },
    success : function (data) { // get data from controller
      if(data.result == true) {
        $('input[name="email"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
        $('input[name="email"]').after($('<div/>', {
          class: 'invalid-feedback',
          text: 'email already taken'
        }));

        $('input[name="email"]').addClass('duplicate');
        return true;
      } else {
        $('input[name="email"]')
          .removeClass('duplicate')
          .removeClass('is-invalid')
          .removeClass('invalid');
      }
    }
  });
}

function checkDuplicateUsername() {
  var settings = $('#nextBtn').data('settings'), // from button data-settings
        _token = settings.token; // from button data-settings
  
  $.ajax({ 
    method: settings.method,
    url: settings.url2, // from button data-settings - /client-username-validation or /therapist-username-validation depending on the form
    data: { 
      username : $('input[name="username"]').val(), // username input value
      _token: _token // from button data-settings
    },
    success : function (data) { // get data from controller
      if(data.result == true) {
        $('input[name="username"]').addClass('is-invalid').siblings('.invalid-feedback').remove(); // Add validation error
        $('input[name="username"]').after($('<div/>', {
          class: 'invalid-feedback',
          text: 'username already taken'
        }));

        $('input[name="username"]').addClass('duplicate');
        return true;
      } else {
        $('input[name="username"]')
          .removeClass('duplicate')
          .removeClass('is-invalid')
          .removeClass('invalid');
      }
    }
  });
}

function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

