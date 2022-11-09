<?php
    if(isset($_POST['bookhotel'])){

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
        $users -> Email = $_COOKIE['adminuser'];
        $user  = $users -> getUser();
        $bookings -> User      = $user['id'];
        $bookings -> Hotel     = $hotels;
        $bookings -> Formdate  = $fromdate;
        $bookings -> To_Date   = $todate;
        $bookings -> Number    = $numbers;
        $book = $bookings -> bookHotel();
        if($book){
            echo "booking was succesfully sent, we'll get to you soon, you will be redirected shortly";
            echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
        }else{
            echo "Oops! something went wrong, please try again, you will be redirected shortly";
            echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
        }
    }
?>