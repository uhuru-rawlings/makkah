<?php
    if(isset($_POST['save'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include_once("admin/database/Database.php");
        include_once("admin/models/Appointments.php");
        include_once("admin/models/Registration.php");

        $conn = new Database();
        $db   = $conn -> connection();
        $users = new Registration($db);
        $users -> Email = $_COOKIE['adminuser'];
        $user  = $users -> getUser();
        $appointments = new Appointment($db);
        $appointments -> user = $user['id'];
        $appointments -> date = $_POST['appointmentdate'];
        $appointment = $appointments -> addAppointment();
        if($appointment){
            echo "<script>alert('booking was succesfully sent, we'll get to you soon.')</script>";
            echo "<script>history.go(-1)</script>";
        }else{
            echo "<script>alert('Oops! something went wrong, please try again.')</script>";
            echo "<script>history.go(-1)</script>";
        }
    }
?>