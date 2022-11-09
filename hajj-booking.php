<?php
    include_once("admin/database/Database.php");
    include_once("admin/models/Booktrip.php");
    include_once("admin/models/Registration.php");
    $conn = new Database();
    $db = $conn -> connection();
    $booking = new TripBookings($db);
    $users = new Registration($db);
    $users -> Email = $_COOKIE['adminuser'];
    $user  = $users -> getUser();
    $booking -> User = $user['id'];
    $book = $booking -> bookHajj();

    if($book){
        echo "booking was succesfully sent, we'll get to you soon, you will be redirected shortly";
        echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
    }else{
        echo "Oops! something went wrong, please try again, you will be redirected shortly";
        echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
    }
?>