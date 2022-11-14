<?php
    if(isset($_POST['reset-password'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Registration.php");

        $conn    = new Database();
        $db      = $conn -> connection();
        $user    = new Registration($db);

        $user    -> Email         = $_POST['username'];
        $user    -> Password      = $_POST['password'];
        $user    -> Last_Modified = date("Y-m-d H:i:s");
        $newuser = $user -> resetPassword();
        if($newuser){
            header("Location: login.php?success=Password reset was succesfull, please login to procceed.");
        }else{
            header("Location: reset-password.php?error=Ooops! something went wrong please try again.");
        }
    }
?>