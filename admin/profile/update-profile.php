<?php
    if(isset($_POST['update'])){
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
        $user = $profile -> updateUser();
    }
?>