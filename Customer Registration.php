<!DOCTYPE html>
<html>

<head>
  <title>Customer Signup</title>
  <link rel="stylesheet" href="./css2/style.css">
</head>

<body>
  <h2  align="center">Customer Registration</h2>
  <form action="" method="post" onsubmit="return validation()">
    <table align="center">
      

    <tr>
        <td><h3>First name:</h3></td>
        <td>
          <input type="text" id="fname" name="fname">
          <p id="fnameError" class="error"></p>
        </td>
      </tr>


      <tr>
        <td><h3>Last name:</h3></td>
        <td>
          <input type="text" id="lname" name="lname">
          <p id="lnameError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>User name:</h3></td>
        <td>
          <input type="text" id="uname" name="uname">
          <p id="unameError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>Email:</h3></td>
        <td>
          <input type="email" id="email" name="email" placeholder="xy12@gmail.com">
          <p id="emailError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>Phone number:</h3></td>
        <td>
          <input type="number" id="number" name="number">
          <p id="numberError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>Date of Birth:</h3></td>
        <td>
          <input type="date" id="dob" name="dob" class="dob">
          <p id="dobError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>Gender:</h3></td>
        <td>
          <input type="radio" id="male" name="gender" value="male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female">
          <label for="female">Female</label>
          <input type="radio" id="other" name="gender" value="other">
          <label for="other">Other</label>
          <p id="genderError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td><h3>Password:</h3></td>
        <td>
          <input type="password" id="password" name="password">
          <p id="passwordError" class="error"></p>
        </td>
      </tr>

      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="Register" class="button">
          <input type="reset" value="Clear" class="button" onclick="clearErrors()">
        </td>
      </tr>
    </table>
    <h4 align="center">Already Have an Account?<a href=""> Login</a></h4>
  </form>

  <script src="./js/script.js">
  </script>
</body>

</html>
