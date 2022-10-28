<?php
    if(isset($_POST['locations'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Bookings.php");
        $locations      = $_POST['locations'];
        $fullname       = $_POST['fullname'];
        $emailadress    = $_POST['emailadress'];
        $phonenumber    = $_POST['phonenumber'];
        $fromdate       = $_POST['fromdate'];
        $todate         = $_POST['todate'];
        $numberofpeople = $_POST['numberofpeople'];
        $conn     = new Database();
        $db       = $conn -> connection();
        $bookings = new Bookings($db);
        $bookings -> Fullname     = $fullname;
        $bookings -> Email        = $emailadress;
        $bookings -> Phone        = $phonenumber;
        $bookings -> Location_id  = $locations;
        $bookings -> From_Date    = $fromdate;
        $bookings -> To_Date      = $todate;
        $bookings -> Travelers    = $numberofpeople;
        $book     = $bookings -> addBookings();  
        if($book){
            header("Location: destination.php?success=Booking was succesfull, you will be contacted on the next move.");
        }else{
            header("Location: destination.php?error=Ooops! something went wrong please try again.");
        }
    }
?>