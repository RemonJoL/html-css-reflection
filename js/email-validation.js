// ----------------------------------------------
// Email Validation
// ----------------------------------------------

// let emailField = document.getElementsByName("email")[0];
//
// emailField.addEventListener("input", function() {
//   //
//   const emailFormat = /^([A-Za-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
//   //       yourname   @   domain   .    com        ( .uk )
//   // see regex101.com for reference of all characters
//   /*
//   ([a-z\d\.-]+) a-z represents alphabet characters, d resembles digits.
//   a backslash is an escape character, used so the dot isnt parsed in the syntax,
//   the hyphen does not need escaping.the plus sign denotes that any amount of
//   characters above 1 is accepted.
//
//   @ next we just have an 'at' symbol
//
//   ([a-z\d-]+) everything here is explained in the first brackets. This is
//   the domain such as 'google'
//
//   \. the backslash is used as an escape character here too, to separate the
//   domain and domain suffix
//
//   ([a-z]{2,8}) this is the first part of the domain suffix, eg 'com'. the curly
//   braces restrict the potential length of the suffix
//
//   (\.[a-z]{2,8})? and finally the back slash once again escapes the dot, the
//   question mark dilineates that this is an optional addendum to the suffix, eg
//   the .uk of .co.uk
//   */
//   if(emailField.value.match(emailFormat)) {
//     emailField.classList.remove("input-invalid");
//   }
//   else if(emailField.value == "") {
//     emailField.classList.add("input-invalid");
//   }
//   else {
//     emailField.classList.add("input-invalid");1
//   }
// });

let inputField = document.querySelectorAll(".text-input-field");

for(let i=0;i<inputField.length;i++){
  inputField[i].addEventListener("input", function() {
  //
    const emailFormat = /^([A-Za-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
    const nameFormat = /^\s*([A-Za-z]{1,}([\.,] |[-']| )?)+[A-Za-z]+\.?\s*$/;
    const phoneFormat = /^[0-9]{10}$/;
    const subjectFormat = /^\s*[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$|/;
    const messageFormat = /^\s*[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$|/;
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
    if(inputField[i] === inputField[0]) {
      if(inputField[i].value.match(nameFormat) && inputField[i].value != "") {
        inputField[i].classList.remove("input-invalid");
        inputField[i].classList.add("input-valid");
      }
      else if(inputField.value == "") {
        inputField[i].classList.add("input-invalid");
      }
      else {
        inputField[i].classList.add("input-invalid");
      }
    }

    if(inputField[i] === inputField[1]) {
      if(inputField[i].value.match(emailFormat) && inputField[i].value != "") {
        inputField[i].classList.remove("input-invalid");
        inputField[i].classList.add("input-valid");
      }
      else if(inputField.value == "") {
        inputField[i].classList.add("input-invalid");
      }
      else {
        inputField[i].classList.add("input-invalid");1
      }
    }

    if(inputField[i] === inputField[2]) {
      if(inputField[i].value.match(phoneFormat) && inputField[i].value != "") {
        inputField[i].classList.remove("input-invalid");
        inputField[i].classList.add("input-valid");
      }
      else if(inputField.value == "") {
        inputField[i].classList.add("input-invalid");
      }
      else {
        inputField[i].classList.add("input-invalid");1
      }
    }

    if(inputField[i] === inputField[3]) {
      if(inputField[i].value.match(subjectFormat) && inputField[i].value != "") {
        inputField[i].classList.remove("input-invalid");
        inputField[i].classList.add("input-valid");
      }
      else if(inputField.value == "") {
        inputField[i].classList.add("input-invalid");
      }
      else {
        inputField[i].classList.add("input-invalid");1
      }
    }

    if(inputField[i] === inputField[4]) {
      if(inputField[i].value.match(messageFormat) && inputField[i].value != "") {
        inputField[i].classList.remove("input-invalid");
        inputField[i].classList.add("input-valid");
      }
      else if(inputField.value == "") {
        inputField[i].classList.add("input-invalid");
      }
      else {
        inputField[i].classList.add("input-invalid");1
      }
    }
  });
}
