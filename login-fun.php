<?php
    if(!isset($_COOKIE['adminuser'])){
        header("Location: login.php");
    }
    if(isset($_POST['login-user'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Registration.php");

        $conn    = new Database();
        $db      = $conn -> connection();
        $user    = new Registration($db);

        $user    -> Email         = $_POST['username'];
        $user    -> Password      = $_POST['password'];
        $newuser = $user -> loginUser();
        if($newuser){
            header("Location: index.php");
        }else{
            header("Location: login.php?error=Ooops! something went wrong please try again.");
        }
    }
?>