<?php
include '../Model/db.php';

$fnameErr = $lnameErr = $unameErr = $emailErr = $numberErr = $dobErr = $genderErr = $passwordErr = $fileErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required.";
    }
     elseif (!preg_match("/^[a-zA-Z]+$/", $_POST["fname"])) {
        $fnameErr = "First name must contain only letters.";
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required.";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $_POST["lname"])) {
        $lnameErr = "Last name must contain only letters.";
    }

    if (empty($_POST["uname"])) {
        $unameErr = "Username is required.";
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\\.com$/", $_POST["email"])) {
        $emailErr = "Invalid email format (must be Gmail).";
    }

    if (empty($_POST["number"])) {
        $numberErr = "Phone number is required.";
    } elseif (strlen($_POST["number"]) != 11) {
        $numberErr = "Phone number must be exactly 11 digits.";
    }

    if (empty($_POST["dob"])) {
        $dobErr = "Date of birth is required.";
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Please select your gender.";
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required.";
    } elseif (strlen($_POST["password"]) < 3) {
        $passwordErr = "Password must be at least 3 characters.";
    }

    if ($_FILES["uploadfile"]["name"] == "") {
        $fileErr = "No file uploaded.";
    }

   
    if (empty($fnameErr) && empty($lnameErr) && empty($unameErr) && empty($emailErr) &&
        empty($numberErr) && empty($dobErr) && empty($genderErr) && empty($passwordErr) && empty($fileErr)) {
        
        $uploadDir = "../upload2/";
        $pictureName = time() . "_" .$_FILES["uploadfile"]["name"];
        $uploadPath = $uploadDir . $pictureName;

        if (move_uploaded_file($_FILES["uploadfile"]["tmp_name"], $uploadPath)) {

            $conn = createCon();
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $uname = $_POST["uname"];
            $email = $_POST["email"];
            $number = $_POST["number"];
            $dob = $_POST["dob"];
            $gender = $_POST["gender"];
            $password = $_POST["password"];
            $picture = $pictureName;

            $checkUsername = "SELECT * FROM user WHERE UserName = '$uname'";
            $result = mysqli_query($conn, $checkUsername);

            if (mysqli_num_rows($result) > 0) {
                echo "<script>alert('Username already exists!');</script>";
            } else {
                $sql = "INSERT INTO user (Firstname, Lastname, Username, Email, Phone, Dateofbirth, Gender, Password, Picture)
                        VALUES ('$fname', '$lname', '$uname', '$email', '$number', '$dob', '$gender', '$password', '$picture')";

                if (mysqli_query($conn, $sql)) {

                    header("Location: login.php");
                    
                } 
                else {
                    echo "Error: " ;
                }
            }

            closeConn($conn);
        } else {
            $fileErr = "Failed to upload file.";
        }
    }

    if (isset($_POST['clear'])) {
        $_POST = [];
        $fnameErr = $lnameErr = $unameErr = $emailErr = $numberErr = $dobErr = $genderErr = $passwordErr = $fileErr = "";
    }
}
?>
