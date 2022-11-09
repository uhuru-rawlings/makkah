<?php
    include_once("../database/Database.php");
    include_once("../models/Booktrip.php");
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    if(isset($_GET['target']) && $_GET['target'] == "Airline"){
        $conn = new Database();
        $db = $conn -> connection();
        $booking = new TripBookings($db);
        $booking -> table = "Trip_Booking";
        $booking -> status = "Assigned";
        $booking -> id = $_GET['id'];
        $status = $booking -> updateStatus();
        if($status){
            header("Location: list-airlines.php?success=Status updated succesfully");
        }else{
            header("Location: list-airlines.php?error=Ooops! something went wrong try again");
        }
    }

    if(isset($_GET['target']) && $_GET['target'] == "Hotels"){
        $conn = new Database();
        $db = $conn -> connection();
        $booking = new TripBookings($db);
        $booking -> table = "Hotel_booking";
        $booking -> status = "Assigned";
        $booking -> id = $_GET['id'];
        $status = $booking -> updateStatus();
        if($status){
            header("Location: list-hotels.php?success=Status updated succesfully");
        }else{
            header("Location: list-hotels.php?error=Ooops! something went wrong try again");
        }
    }

    if(isset($_GET['target']) && $_GET['target'] == "Appointments"){
        $conn = new Database();
        $db = $conn -> connection();
        $booking = new TripBookings($db);
        $booking -> table = "Visa_Appointments";
        $booking -> status = "Assigned";
        $booking -> id = $_GET['id'];
        $status = $booking -> updateStatus();
        if($status){
            header("Location: list-appointments.php?success=Status updated succesfully");
        }else{
            header("Location: list-appointments.php?error=Ooops! something went wrong try again");
        }
    }
?>