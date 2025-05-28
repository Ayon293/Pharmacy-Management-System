<?php
include '../Model/db.php';
$conn = createCon();

$id = $_GET['id'];

$query = "DELETE FROM user WHERE Id=$id";
if (mysqli_query($conn, $query)) {
    header("Location: ../View2/adminhomepage.php"); 
    
}
 else {
    echo "Error delete user.";
}
?>
