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
            echo "<script>alert('booking was succesfully sent, we'll get to you soon.')</script>";
            echo "<script>history.go(-1)</script>";
        }else{
            echo "<script>alert('Oops! something went wrong, please try again.')</script>";
            echo "<script>history.go(-1)</script>";
        }
    }
?>