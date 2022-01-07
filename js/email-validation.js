// ----------------------------------------------
// Email Validation
// ----------------------------------------------

let emailField = document.getElementsByName("email")[0];

emailField.addEventListener("input", function() {
  //
  const emailFormat = /^([A-Za-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
  //       yourname   @   domain   .    com        ( .uk )
  // see regex101.com for reference of all characters
  /*
  ([a-z\d\.-]+) a-z represents alphabet characters, d resembles digits.
  a backslash is an escape character, used so the dot isnt parsed in the syntax,
  the hyphen does not need escaping.the plus sign denotes that any amount of
  characters above 1 is accepted.

  @ next we just have an 'at' symbol

  ([a-z\d-]+) everything here is explained in the first brackets. This is
  the domain such as 'google'

  \. the backslash is used as an escape character here too, to separate the
  domain and domain suffix

  ([a-z]{2,8}) this is the first part of the domain suffix, eg 'com'. the curly
  braces restrict the potential length of the suffix

  (\.[a-z]{2,8})? and finally the back slash once again escapes the dot, the
  question mark dilineates that this is an optional addendum to the suffix, eg
  the .uk of .co.uk
  */
  if(emailField.value.match(emailFormat)) {
    emailField.classList.remove("input-invalid");
  }
  else if(emailField.value == "") {
    emailField.classList.add("input-invalid");
  }
  else {
    emailField.classList.add("input-invalid");
  }
});

// // Declares variables for DOM elements used in function
// const submitBtn = document.querySelector(".submit-button");
// const greenDots = document.querySelectorAll(".green-dot");
// const confirmation = document.querySelector(".contact-confirmation-container");
// // Declares green dot counter
// let greenDotCounter;
//
// // Adds click functionality to submit button
// submitBtn.addEventListener("click", function(){
//   // Resets green dot counter to 0
//   greenDotCounter = 0;
//   // Loops through green dots and checks how many are displayed
//   for(let i=0;i<greenDots.length;i++){
//     if(greenDots[i].style.display === "block"){
//       greenDotCounter++;
//     }
//   }
//   // If all green dots are visible:
//   if(greenDotCounter === 5){
//     // Displays popup message confirming contact form content has been sent, then hides popup
//     confirmation.innerText = "Message Sent!";
//     confirmation.style.display = "block";
//     setTimeout(function(){
//       confirmation.style.display = "none";
//     }, 2000);
//     event.preventDefault();
//   }
//   else {
//     // Displays popup message saying valid information has to be entered, then hides popup
//     confirmation.innerText = "Please make sure all fields are filled in correctly";
//     confirmation.style.display = "block";
//     setTimeout(function(){
//       confirmation.style.display = "none";
//     }, 2000);
//     event.preventDefault();
//   }
// });
