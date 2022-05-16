var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var confirmInput = document.getElementById("confirmpassword");
var firstname = document.getElementById("firstname");
var lastname = document.getElementById("lastname")
// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8 && myInput.value.length <= 20) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  if(myInput.value.length > 20){
    length2.classList.remove("valid");
    length2.classList.add("invalid");
  }
}
// When users click on confirm password field
confirmInput.onfocus = function(){
    document.getElementById ("message2").style.display = "block";
}
// When users click outside of confirm password field 
confirmInput.onblur = function(){
    document.getElementById("message2").style.display = "none";
}
// Validate password
confirmInput.onkeyup = function(){
    if(confirmInput.value.match(myInput.value)){
        document.getElementById("message2").style.display ="none"
    }
}
// When users click on firstname field
firstname.onfocus = function(){
    document.getElementById("message3").style.display ="block";
}
// When users click elsewhere
firstname.onblur = function(){
    document.getElementById("message3").style.display ="none";
}
// Validate firstname length
firstname.onkeyup = function(){
    if(firstname.value.length >=2 && firstname.value.length <= 20){
        document.getElementById("message3").style.display = "none";
    }
    else{
        document.getElementById("message3").style.display = "block";
    }
}
// When users click on lastname field
lastname.onfocus = function(){
    document.getElementById("message4").style.display ="block";
}
// When users click elsewhere
lastname.onblur = function(){
    document.getElementById("message4").style.display ="none";
}
// Validate lastname length
lastname.onkeyup = function(){
    if(lastname.value.length >=2 && lastname.value.length <= 20){
        document.getElementById("message4").style.display = "none";
    }
    else{
        document.getElementById("message4").style.display = "block";
    }
}