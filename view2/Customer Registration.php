<?php
include '../control2/validation.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer Signup</title>
  <link rel="stylesheet" href="../css2/style.css">
</head>

<body>

<h2 align="center">Customer Registration</h2>

<form action=" " method="post"  enctype="multipart/form-data" onsubmit="return validation()">
  <table align="center">

    <tr>
      <td><h3>First name:</h3></td>
      <td>
        <input type="text" id="fname" name="fname" value ="<?php echo htmlspecialchars($_POST['fname'] ?? ''); ?>">
        <p id="fnameError" class="error"><?php echo $fnameErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>Last name:</h3></td>
      <td>
        <input type="text" id="lname" name="lname" value="<?php echo htmlspecialchars($_POST['lname'] ?? ''); ?>">
        <p id="lnameError" class="error"><?php echo $lnameErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>User name:</h3></td>
      <td>
        <input type="text" id="uname" name="uname" value="<?php echo htmlspecialchars($_POST['uname'] ?? ''); ?>">
        <p id="unameError" class="error"><?php echo $unameErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>Email:</h3></td>
      <td>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
        <p id="emailError" class="error"><?php echo $emailErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>Phone number:</h3></td>
      <td>
        <input type="number" id="number" name="number" value="<?php echo htmlspecialchars($_POST['number'] ?? ''); ?>">
        <p id="numberError" class="error"><?php echo $numberErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>Date of Birth:</h3></td>
      <td>
        <input type="date" id="dob" name="dob" class="dob" value="<?php echo htmlspecialchars($_POST['dob'] ?? ''); ?>">
        <p id="dobError" class="error"><?php echo $dobErr; ?></p>
      </td>
    </tr>

    <tr>
      <td><h3>Gender:</h3></td>
      <td>
        <input type="radio" id="male" name="gender" value="male" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked'; ?>> Male
        <input type="radio" id="female" name="gender" value="female" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked'; ?>> Female
        <input type="radio" id="other" name="gender" value="other" <?php if (isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked'; ?>> Other
      
        <p id="genderError" class="error"><?php echo $genderErr; ?></p>
      </td>
    </tr>

    <tr>
     <td><h3>Upload File:</h3></td>
     <td>
      <input type="file" name="uploadfile" id="uploadfile" >
      <p class="error"><?php echo $fileErr; ?></p>
    </td>
   </tr>


    <tr>
      <td><h3>Password:</h3></td>
      <td>
        <input type="password" id="password" name="password" value="<?php echo htmlspecialchars($_POST['password'] ?? ''); ?>">
        <p id="passwordError" class="error"><?php echo $passwordErr; ?></p>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Register" class="button">
        <input type="submit" name="clear" value="Clear" class="button" onclick="clearErrors()">
      </td>
    </tr>

  </table>
  <h4 align="center">Already Have an Account? <a href="">Login</a></h4>
</form>
<!--
<script src="../js/script.js"></script> -->
</body>

</html>
