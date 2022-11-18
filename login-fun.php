<?php
    session_start();
    if(isset($_SESSION['redirect_url'])){
        $url  = $_SESSION['redirect_url'];
    }else{
        $url  = "";
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
            if($url ==""){
                header("Location: index.php");
            }else{
                header("Location: ".$url);
            }
        }else{
            header("Location: login.php?error=Ooops! something went wrong please try again.");
        }
    }
?>