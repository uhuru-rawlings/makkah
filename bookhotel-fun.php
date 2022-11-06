<?php
    if(isset($_POST[''])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Booktrip.php");
        include_once("admin/models/Registration.php");
        $hotels    = $_POST['hetels'];
        $numbers   = $_POST['numbers'];
        $fromdate  = $_POST['fromdate'];
        $todate    = $_POST['todate'];
        $conn = new Database();
        $db   = $conn -> connection();
        $bookings = new TripBookings($db);
        $users = new Registration($db);
        $user  = $users -> getUser();
        $bookings -> User      = $user['id'];
        $bookings -> Hotel     = $hotels;
        $bookings -> Formdate  = $fromdate;
        $bookings -> To_Date   = $todate;
        $bookings -> Number    = $numbers;
        $book = $bookings -> bookHotel();
        if($book){
            echo "<script>alert('booking was succesfully sent, we'll get to you soon.')</script>";
            echo "<script>history.go(-1)</script>";
        }else{
            echo "<script>alert('Oops! something went wrong, please try again.')</script>";
            echo "<script>history.go(-1)</script>";
        }
    }
?>