<!DOCTYPE html>
<html>
<head>

 <title>Customer Signup</title>
 
</head>
<body>
  <h2 align="center">Customer Registration</h2>
  <form action="" method="post">
  <table border="1" align="center" cellpadding="8">

 <tr> 
  <th>First name:</th>
  <td><input type="text" id="fname" name="fname" required></td>
  </tr>

 <tr>
  <th>Last name:</th>
  <td><input type="text" id="lname" name="lname" required></td>
 </tr>

 <tr>
  <th> User name:</th>
  <td><input type="text" id="uname" name="uname" required></td>
  </tr>

 <tr>
  <th>Email:</th>
  <td><input type="email" id="email" name="email" placeholder="xy12@gmail.com" required></td>
 </tr>

 <tr>
  <th>Phone number:</th>
  <td><input type="number" id="number" name="number" required></td>
</tr>

 <tr>
  <th>Date of Birth:</th>
  <td><input type="date" id="dob" name="dob" required></td>
</tr>

 <tr>
 <th>Gender:</th>
 <td>
  <input type="radio" id="male" name="gender" value="male" required>
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female" required>
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other" required>
  <label for="other">Other</label>
 </td>
 </tr>


 <tr>
  <th>Password:</th>
  <td><input type="password" id="password" name="password" required></td>
  </tr>

 <tr>
 <td colspan="2" align="center">
  <input type="submit" value="Register">
  <input type="reset" value="Clear">
 </td>
 </tr>

</table>
</form>
</body>
</html>