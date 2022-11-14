<?php
    if(isset($_POST['create-accout'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Registration.php");

        $conn    = new Database();
        $db      = $conn -> connection();
        $user    = new Registration($db);
        $name_array = explode(" ",$_POST['Fullname']);
        $user    -> Fname    = $name_array[0];
        $user    -> Lname    = $name_array[1];
        $user    -> Email    = $_POST['username'];
        $user    -> Phone    = $_POST['Phone'];
        $user    -> Password = $_POST['password'];
        $newuser = $user -> addUsers();
        if($newuser){
            header("Location: login.php?success=Account created succesfully, please login to procceed.");
        }else{
            header("Location: create-account.php?error=Ooops! something went wrong please try again.");
        }
    }
?>