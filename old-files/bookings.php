<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if(isset($_POST['locations'])){
        include_once("admin/database/Database.php");
        include_once("admin/models/Bookings.php");
        include_once("Sendmail/Sendmail.php");
        include_once("admin/models/Destinations.php");

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
        $locations_id = new Destinations($db);
        $locations_id -> id = $locations;
        $location  = $locations_id -> getSingleDestination();
        $sendmail = new SendMail();
        $sendmail -> to      = $emailadress;
        $sendmail -> subject = "Bookig Received";
        $sendmail -> body = "<html lang='en'>
                            <head>
                                <meta charset='UTF-8'>
                                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                                <title>Email Template</title>
                            </head>
                            <body>
                                <div class='container'>
                                    <div class='container-fluid'>
                                        <div class='email-template' style='font-size: 18px;font-family: sans-serif;'>
                                            <div class='user-details'>
                                                <div class='name'>Dear Rawlings Otieno Uhuru,</div>
                                            </div>
                                            <div class='message-content' style=' background-color: #dfdfdf;padding: 20px 15px;'>
                                                <p style='border-left: 5px solid #110603;padding-left: 10px;'>
                                                Your Booking for {$location['Location_Name']} has been and received, It is being procesed and we'll get back to you within 24 hours.
                            
                                                    For any inquiry please reach out throught <a style='text-decoration: none;' href='mailto:'>[support-email]</a>, We will be glad to help.
                                                
                                                    Thank you for choosing us.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                            </body>
                            </html>";
        $submit = $sendmail -> sendMail();
        if($book){
            header("Location: destination.php?success=Booking was succesfull, you will be contacted on the next move.");
        }else{
            header("Location: destination.php?error=Ooops! something went wrong please try again.");
        }
    }
?>