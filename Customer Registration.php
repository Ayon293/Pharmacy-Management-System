<!DOCTYPE html>
<html>
<head>

 <title>Customer Signup</title>
 <link rel="stylesheet" href="cstyle.css">
 
</head>
<body>
  <h2 id="heading"align="center">Customer Registration</h2>
  <form action="" method="post">
  <table  align="center" >

 <tr> 
  <td><h3>First name:</h3></td>
  <td><input type="text" id="fname" name="fname" required></td>
  </tr>

 <tr>
  <td><h3>Last name: </h3></td>
  <td><input type="text" id="lname" name="lname" required></td>
 </tr>

 <tr>
  <td><h3>User name: </h3> </td>
  <td><input type="text" id="uname" name="uname" required></td>
  </tr>

 <tr>
  <td><h3>Email:</h3></td>
  <td><input type="email" id="email" name="email" placeholder="xy12@gmail.com" required></td>
 </tr>

 <tr>
  <td><h3>Phone number:</h3></td>
  <td><input type="number" id="number" name="number" required></td>
</tr>

 <tr>
  <td><h3>Date of Birth:</h3></td>
  <td><input type="date" id="dob" name="dob" class="dob" required></td>
</tr>

 <tr>
 <td><h3>Gender: </h3></td>
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
  <td ><h3> Password:</h3></td>
  <td><input type="password" id="password" name="password" required></td>
  </tr>

 <tr>
 <td  colspan="2" align="center">
  <input  type="submit" value="Register" class= "button">
  <input type="reset" value="Clear" class= "button">
 </td>
 </tr>



</table>
<h4 align="center"> Already Have an Account?<a  href=""> Login</a></h4>


</form>
</body>
</html>