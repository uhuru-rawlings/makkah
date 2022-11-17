<?php
    include("Sendmail/Sendmail.php");
    $sendmail = new SendMail();
    $sendmail -> to      = "uhururawlings40@gmail.com";
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
                                            Your Booking for [location-name] has been and received, It is being procesed and we'll get back to you within 24 hours.
                        
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
    if($submit){
        echo "email sent succesfully";
    }else{
        echo "something went wrong,email not sent.";
    }
?>