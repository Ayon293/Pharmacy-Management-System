<?php
session_start();
include '../Model/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["username"];
    $password = $_POST["pass"];

    $conn = createCon();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

 
    $adminQuery = "SELECT * FROM admin WHERE username='$uname' AND password='$password'";
    $adminResult = mysqli_query($conn, $adminQuery);

    if (mysqli_num_rows($adminResult) == 1) {
    $_SESSION["admin_username"] = $uname;
    header("Location: adminhomepage.php");
    exit();
}

    
    $userQuery = "SELECT * FROM user WHERE username='$uname' AND password='$password'";
    $userResult = mysqli_query($conn, $userQuery);

    if (mysqli_num_rows($userResult) == 1) {
        $_SESSION["username"] = $uname;
        header("Location: Dashboard.php");
        exit();
    }

  
    echo "<script>alert('Invalid username or password');</script>";

    closeConn($conn);
}
?>
