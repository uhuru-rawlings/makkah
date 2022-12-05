<?php
    // if(isset($_POST['save'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include_once("models/Newsletter.php");
        include_once("database/Database.php");
        $Email = $_POST['Email'];

        $conn = new Database();
        $db = $conn -> connection();
        $signup = new Newsletter($db);
        $signup -> Email = $Email;
        $save = $signup -> saveEmails();
        if($save){
            echo "Thank your for subscribing to our newsletter.";
            echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
        }else{
            echo "Oops! something went wrong, seems you have already signed up.";
            echo "<script>setTimeout(() => { history.go(-1) }, 1500)</script>";
        }
    // }
?>