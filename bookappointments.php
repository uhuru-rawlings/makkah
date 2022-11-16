<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['adminuser'])){
            header("Location: login.php");
        }
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
                echo "<div class='alert alert-success'>booking was succesfully sent, we'll get to you soon.</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }else{
                echo "<div class='alert alert-danger'>Oops! something went wrong, please try again.</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }
        }
    ?>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>