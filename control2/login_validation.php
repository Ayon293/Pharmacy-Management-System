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

    $query = "SELECT * FROM user WHERE UserName = '$uname' AND Password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $uname;
        header("Location: Dashboard.php"); 
        
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }

    closeConn($conn);
}
?>
