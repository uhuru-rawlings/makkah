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
        if(isset($_POST['newsletter'])){
            include_once("admin/database/Database.php");
            include_once("admin/models/Newsletter.php");
            $conn = new Database();
            $db = $conn -> connection();
            $newsletter = new Newsletter($db);
            $newsletter -> Email = $_POST['useremail'];
            $save       = $newsletter -> setEmail();
            if($save){
                echo "<div class='alert alert-success'>Email signup succesfully, you will be redirected shortly</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }else{
                echo "<div class='alert alert-danger'>Oops! something went wrong, please try again, you will be redirected shortly</div>";
                echo "<script>setTimeout(() => { history.go(-1) },3000)</script>";
            }
        }
    ?>
</body>
<script src="bootstrap/js/bootstrap.min.js"></script>
<style>
    body{
        height: 100vh;
        display: flex;
        align-items: center;
    }
    body div{
        width: 70%;
        margin: auto;
    }
</style>
</html>