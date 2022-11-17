<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include_once("../models/Bookings.php");
    include_once("../database/Database.php");
    include_once("../../Sendmail/Sendmail.php");
    if(isset($_GET['status'])){
        $id = $_GET['id'];
        $status = $_GET['status'];
        $conn = new Database();
        $db = $conn -> connection();
        $updates = new Bookings($db);
        $updates -> id     = $id;
        $updates -> status = $status;
        $update = $updates -> approveBookings();
        if($update){
            $location  = $updates -> getSingleBooking();
            $sendmail = new SendMail();
            $sendmail -> to      = $location['Email'];
            $sendmail -> subject = "Bookig {$location['Status']} !";
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
                                                    <div class='name'>Dear {$location['Fullname']},</div>
                                                </div>
                                                <div class='message-content' style=' background-color: #dfdfdf;padding: 20px 15px;'>
                                                    <p style='border-left: 5px solid #110603;padding-left: 10px;'>
                                                    Your Booking for {$location['Location_Name']}, schedule from  {$location['From_Date']} to {$location['To_Date']} has been and {$location['Status']}.
                                
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
            header("Location: list-bookings.php?success=status succesfully updated.");
        }else{
            header("Location: list-bookings.php?error=Ooops! something went wrong, please try again.");
        }
    }
?>