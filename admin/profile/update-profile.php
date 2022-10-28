<?php
    if(isset($_POST['update'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include("../database/Database.php");
        include("../models/Registration.php");
        $Fname    = $_POST['Fname'];
        $Lname    = $_POST['Lname'];
        $Email    = $_POST['Email'];
        $Phone    = $_POST['Phone'];
        $Password = $_POST['Password'];

        $conn = new Database();
        $db = $conn -> connection();
        $profile = new Registration($db);
        $profile -> Fname    = $Fname;
        $profile -> Lname    = $Lname;
        $profile -> Email    = $Email;
        $profile -> Phone    = $Phone;
        if(!empty($Password)){
            $profile -> Password = $Password;
        }else{
            $profile -> Password = "";
        }
        $profile -> Last_Modified = date("Y-m-d H:i:s");
        $user = $profile -> updateUser();
        if($user){
            header("Location: profile.php?success=profile updated succesfully.");
        }else{
            header("Location: profile.php?error=Ooops! something went wrong pleasetry again.");
        }
    }
?>