<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['adminuser'])){
            header("Location: login.php");
        }
        if(isset($_POST['bookhotel'])){

            include_once("admin/database/Database.php");
            include_once("admin/models/Booktrip.php");
            include_once("admin/models/Registration.php");
            include_once("admin/models/Destinations.php");
            include_once("Sendmail/Sendmail.php");
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
            // for emails
            $user_name = $user['Fname']." ".$user['Lname'];
            $user_email = $user['Email'];
            $user_phone = $user['Phone'];
            $detination = new Destinations($db);
            $detination -> id = $hotels;
            $destinations = $detination -> getSingleDestination();
            $hotel_name = $destinations['Location_Name'];
            $body = "
                    <!DOCTYPE html>
                    <html lang='en'>
                    
                    <head>
                        <title>Al-Ihsan Tours & Travel Ltd</title>
                        <meta charset='utf-8'>
                        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                        <meta name='description' content='Travelix Project'>
                        <meta name='viewport' content='width=device-width, initial-scale=1'>
                        <link rel='shortcut icon' href='images/logo.png' type='image/x-icon'>
                        <link rel='preconnect' href='https://fonts.googleapis.com'>
                        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
                        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap' rel='stylesheet'>
                        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' integrity='sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm' crossorigin='anonymous' />
                        <script defer src='https://use.fontawesome.com/releases/v5.15.4/js/all.js' integrity='sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc' crossorigin='anonymous'></script>
                        <link rel='stylesheet' type='text/css' href='styles/bootstrap4/bootstrap.min.css'>
                        <link href='plugins/font-awesome-4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
                    </head>
                        <body>
                            <ul>
                                <p>User with the following details:</p>
                                <li>Name: {$user_name}</li>
                                <li>Email: {$user_email}</li>
                                <li>Phone: {$user_phone}</li>
                                <p>Is requesting booking for </p>
                                <li>Hotel Name: {$hotel_name}</li>
                                <li>Number of People: {$numbers}</li>
                                <li>From Date: {$fromdate}</li>
                                <li>To Date Date: {$todate}</li>
                            </ul>
                            <p>A copy of these details has been sent to your admin dashboard.</p>
                            <small class='text-danger'>
                                <i>
                                    this email was intended for Alishan tours, if you are not the intended recipient please ignore.
                                </i>
                            </small>
                        </body>
                        <style>
                            *{
                                font-family: 'Poppins', sans-serif;
                            }
                            ul li{
                                list-style: none;
                            }
                        </style>
                    </html>
                    ";
            if($book){
                $sendmail = new SendMail();
                $sendmail -> body = $body;
                $sendmail -> to = "uhururawlings40@gmail.com";
                $sendmail -> subject = "New Hotel Booking Request";
                $send = $sendmail -> sendMail();
                echo "<div class='alert alert-success'>booking was succesfully sent, we'll get to you soon, you will be redirected shortly</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }else{
                echo "<div class='alert alert-danger'>Oops! something went wrong, please try again, you will be redirected shortly</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }
        }
    ?>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
</html>