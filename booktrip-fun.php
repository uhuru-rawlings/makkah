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
            $users -> Email = $_COOKIE['adminuser'];
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
<!-- <style>
    body{
        height: 100vh;
        display: flex;
        align-items: center;

    }
</style> -->
</html>