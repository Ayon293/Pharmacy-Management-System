<?php
session_start();
include '../Model/db.php';


if (!isset($_SESSION['admin_username']) ) {
    header("Location: login.php");
    exit();
}


$conn = createCon();
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Homepage</title>
    <link rel="stylesheet" href="../css2/adminhome_style.css">
</head>
<body>



<h3>All Registered Users</h3>

<table>
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Picture</th>
        <th>Actions</th>
    </tr>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["Firstname"] . "</td>";
            echo "<td>" . $row["Lastname"] . "</td>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Email"] . "</td>";
            echo "<td>" . $row["Phone"] . "</td>";
            echo "<td>" . $row["Dateofbirth"] . "</td>";
            echo "<td>" . $row["Gender"] . "</td>";
            echo "<td><img src='../upload2/" . $row["Picture"] . "' alt='User Image'></td>";
             echo "<td>
             <a href =' '><button type='button' >Update</button></a>
              <a href ='../control2/delete.php?id= ". $row["Id"] ." '><button type='button' >Delete</button></a>
              </td>";

            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No users found.</td></tr>";
    }

    closeConn($conn);
    ?>
</table>

<div align="center">
    <br>
    <a href="logout.php">
        <button type="button" id="button">Logout</button>
    </a>
</div>

</body>
</html>
