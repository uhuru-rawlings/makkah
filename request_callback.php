<?php
    if(isset($_POST['save'])){
        include_once("models/Callback.php");
        include_once("database/Database.php");
        $fullname  = $_POST['fullname'];
        $phoneno  = $_POST['phoneno'];
        $subject  = $_POST['subject'];

        $conn = new Database();
        $db = $conn -> connection();
        $request = new Callback($db);
        $request -> Full_name = $fullname;
        $request -> Phone = $phoneno;
        $request -> Subject = $subject;
        $save = $request -> saveRequest();
        if($request){
            echo "Call back request sent, We will call you back softly.";
            echo "<script>setTimeout(() => { history.go(-1) },1500)</script>";
        }else{
            echo "Oops! something went wrong, please try again.";
            echo "<script>setTimeout(() => { history.go(-1) },1500)</script>";
        }
        
    }
?>