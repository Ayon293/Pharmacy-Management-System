
<?php
include '../control2/login_validation.php'; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
     <link rel="stylesheet" href="../css2/login_style.css">
</head>
<body>

<h2 align="center">Login To your Account</h2>

<form action=" " method="post"  >
  <table align="center">
     <tr>
      <td><h3>User name:</h3></td>
      <td>
        <input type="text" id="username" name="username" required>
      </td>
    </tr>

    <tr>
      <td><h3>Password:</h3></td>
      <td>
        <input type="password" id="pass" name="pass" required>
      </td>
    </tr>

    <tr>
      <td colspan="2" align="center">
        <input type="submit" value="Login" class="button" name="login">
      </td>
    </tr>

  </table>
  <h4 align="center">Don't Have an Account? <a href="./Customer_Registration.php">Signup</a></h4>
</form>
   

    
</body>
</html>

