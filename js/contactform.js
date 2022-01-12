// ----------------------------------------------
// Contact Form Functionality
// ----------------------------------------------

let invalidInput;

// Success Message
const contactForm = document.getElementById("contact-form");
const successContainer = document.createElement("div");
const successMsg = 'Submission successful! We\'ll process your enquiry within 2 working days.';

successContainer.setAttribute("class", "validation-text validation-notice");
successContainer.innerHTML = successMsg;

// Error Message
const errorContainer = document.createElement("div");
const errorEmail = 'Please enter a valid email address';

errorContainer.setAttribute("class", "validation-text validation-alert");
errorContainer.innerHTML = errorEmail;

// Submit function
$("form").on("submit", function(e) {
  e.preventDefault();
  invalidInput = document.querySelectorAll('.input-invalid');
  if(invalidInput.length === 0){
    $.ajax({
        url: 'inc/post.php',
        type: 'POST',
        data: $('form').serialize(),
        success: function () {
          errorContainer.remove();
          contactForm.insertBefore(successContainer, contactForm.firstChild);
        }
    });
  }
  else if(emailField.classList.contains("input-invalid")){
    contactForm.insertBefore(errorContainer, contactForm.firstChild);
  }
});

// document.getElementById('submitBtn').addEventListener("click", function(event){
//   // document.getElementById('contact-form').submit();
//   // let name = document.getElementById("name").value;
//   // let email = document.getElementById("email").value;
//   // let telephone = document.getElementById("telephone").value;
//   // let subject = document.getElementById("subject").value;
//   // let message = document.getElementById("message").value;
//   event.preventDefault();
//
//   $.ajax({
//     url: 'inc/post.php',
//     type: 'POST',
//     data: {
//       name : name,
//       email : email,
//       telephone : telephone,
//       subject : subject,
//       message : message
//     }
//     // return false;
//   });
// });
