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
        if(isset($_POST['phonenumber'])){
            ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
            include_once("admin/database/Database.php");
            include_once("admin/models/Contact.php");
            $fullname    = $_POST['fullname'];
            $emailadress = $_POST['emailadress'];
            $phonenumber = $_POST['phonenumber'];
            $message     = $_POST['message'];

            $conn = new Database();
            $db   = $conn -> connection();
            $messages = new Contact($db);
            $messages -> Fullname = $fullname;
            $messages -> Email = $emailadress;
            $messages -> Phone = $phonenumber;
            $messages -> Message = $message;
            $save = $messages -> saveMessage();
            if($save){
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