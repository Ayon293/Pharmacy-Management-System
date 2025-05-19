function validation() {
  let isValid = true;
 document.querySelectorAll('.error').forEach(e => e.innerHTML = "");

  let fname = document.getElementById("fname").value.trim();
  let lname = document.getElementById("lname").value.trim();
  let uname = document.getElementById("uname").value.trim();
  let email = document.getElementById("email").value.trim();
  let number = document.getElementById("number").value.trim();
  let dob = document.getElementById("dob").value.trim();
  let password = document.getElementById("password").value.trim();
  let gender = document.querySelector('[name="gender"]:checked');

  if (fname === "") {
      document.getElementById("fnameError").innerHTML = "First name is required.";
      isValid = false;
  } 
  else if (!/^[A-Za-z]+$/.test(fname)) 
    {
      document.getElementById("fnameError").innerHTML = "First name  only letters.";
      isValid = false;
  }

  
  if (lname === "") {
      document.getElementById("lnameError").innerHTML = "Last name is required.";
      isValid = false;
  } 
  else if (!/^[A-Za-z]+$/.test(lname)) {
      document.getElementById("lnameError").innerHTML = "Last name  only letters.";
      isValid = false;
  }

  
  if (uname === "") {
      document.getElementById("unameError").innerHTML = "Username is required.";
      isValid = false;
  }


  if (email === "") {
      document.getElementById("emailError").innerHTML = "Email is required.";
      isValid = false;
  } 
  else if (!/^[a-zA-Z0-9]+@gmail\.com$/.test(email)) {
      document.getElementById("emailError").innerHTML = "Invalid email .";
      isValid = false;
  }


  if (number === "") {
      document.getElementById("numberError").innerHTML = "Phone number is required.";
      isValid = false;
  } else if (number.length !== 11) {
      document.getElementById("numberError").innerHTML = "number must  11 digit.";
      isValid = false;
  }

  
  if (dob === "") {
      document.getElementById("dobError").innerHTML = "Date of birth is required.";
      isValid = false;
  }

  
  if (!gender) {
      document.getElementById("genderError").innerHTML = "Please select your gender.";
      isValid = false;
  }

 
  if (password === "") 
    {
      document.getElementById("passwordError").innerHTML = "Password is required.";
      isValid = false;
  }
   else if (password.length < 3) {
      document.getElementById("passwordError").innerHTML = "Password at least 3 character.";
      isValid = false;
  }

  return isValid;
}


function clearErrors()  {
    document.querySelectorAll('.error').forEach(e => e.innerHTML = "");
  }