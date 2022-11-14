<?php
    if(isset($_POST['addusers'])){
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
        $profile -> Password = $Password;
        $profile -> Last_Modified = date("Y-m-d H:i:s");
        $user = $profile -> addUsers();
        if($user){
            header("Location: add-users.php?success=user added succesfully.");
        }else{
            header("Location: add-users.php?success=Ooops! something went wrong please try again.");
        }
    }
?>