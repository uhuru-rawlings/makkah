<?php
    if(isset($_POST['login'])){
        include_once("../database/Database.php");
        include_once("../models/Registration.php");
        $username = $_POST['username'];
        $Password = $_POST['Password'];

        $conn = new Database();
        $db = $conn -> connection();
        $users = new Registration($db);
        $users -> Email = $username;
        $users -> Password = $Password;
        $user = $users -> loginUser();
        if($user){
            header("Location: ../index.php");
        }else{
            header("Location: index.php?error=Ooops! something went wrong, please try again.");
        }
    }
?>