<?php
    if(isset($_POST['booktrip'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Booktrip.php");
        include_once("admin/models/Registration.php");
        $fromlocation = $_POST['fromlocation'];
        $tolocation = $_POST['tolocation'];
        $tripsround = $_POST['tripsround'];
        $formdate = $_POST['formdate'];
        $travelclass = $_POST['travelclass'];
        $number = $_POST['number'];
        $aggrement = $_POST['aggrement'];

        $conn = new Database();
        $db   = $conn -> connection();
        $bookings = new TripBookings($db);
        $users = new Registration($db);
        $users -> Email = $_COOKIE['adminuser'];
        $user  = $users -> getUser();
        $bookings -> Fromlocation = $fromlocation;
        $bookings -> Tolocation   = $tolocation;
        $bookings -> Tripsround   = $tripsround;
        $bookings -> Formdate     = $formdate;
        $bookings -> Travelclass  = $travelclass;
        $bookings -> Number       = $number;
        $bookings -> Agrement     = $aggrement;
        $bookings -> User         = $user['id'];

        $book = $bookings -> bookTrip();
        if($book){
            echo "booking was succesfully sent, we'll get to you soon, you will be redirected shortly";
            echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
        }else{
            echo "Oops! something went wrong, please try again, you will be redirected shortly";
            echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
        }
    }
?>