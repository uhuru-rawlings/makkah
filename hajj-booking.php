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
</body>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</html>