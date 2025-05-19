<?php

$fnameErr = $lnameErr = $unameErr = $emailErr = $numberErr = $dobErr = $genderErr = $passwordErr = $fileErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required.";
    } 
    elseif (!preg_match("/^[a-zA-Z]+$/",  $_POST["fname"])) {
        $fnameErr = "First name must contain only letters.";
    }

   
    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required.";
    } 
    elseif (!preg_match("/^[a-zA-Z]+$/", $_POST["lname"])) {
        $lnameErr = "Last name must contain only letters.";
    } 

    
    if (empty($_POST["uname"])) {
        $unameErr = "Username is required.";
    } 

   
    if (empty($_POST["email"])) {
        $emailErr = "Email is required.";
    } 
    elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@gmail\.com$/", $_POST["email"])) {
        $emailErr = "Invalid email format";
    } 

  
    if (empty($_POST["number"])) {
        $numberErr = "Phone number is required.";
    }
     elseif (strlen($_POST["number"]) != 11) {
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
    } 

    elseif (strlen($_POST["password"]) < 3) {
        $passwordErr = "Password must be at least 3 characters.";
    }
    


   
    if($_FILES["uploadfile"]["name"] == "")
    {
        $fileErr= " No file upload";
    }


    if (empty($fnameErr) && empty($lnameErr) && empty($unameErr) && empty($emailErr) &&
    empty($numberErr) && empty($dobErr) && empty($genderErr) && empty($passwordErr) && empty($fileErr)) {

        if(move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "./upload/".$_FILES["uploadfile"]["name"]))
        {
            
              echo "<script> alert('Registration Successful!'); </script>";
        }

    }

        


   
       
        if (isset($_POST['clear'])) {
            $_POST = ""; 
            $fnameErr = $lnameErr = $unameErr = $emailErr = $numberErr = $dobErr = $genderErr = $passwordErr = $fileErr = "";
        }
        
        
}
?>
