<?php
    if(isset($_POST['sendmessage'])){
        include_once("database/Database.php");
        include_once("models/Contact.php");
        $Fullname = $_POST['Fullname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Subject = $_POST['Subject'];
        $Message = $_POST['Message'];

        $conn = new Database();
        $db = $conn -> connection();
        $message = new Contact($db);
        $message -> Fullname = $Fullname;
        $message -> Email    = $Email;
        $message -> Phone    = $Phone;
        $message -> Subject  = $Subject;
        $message -> Message  = $Message;
        $save = $message -> saveMessage();
        if($save){
            echo "Message sent we will get to you as soon as we can.";
            echo "<script>setTimeout(() => {history.go(-1)},2500)</script>";
        }else{
            echo "Oops! something went wrong, please try again";
            echo "<script>setTimeout(() => {history.go(-1)},2500)</script>";
        }
    }
?>