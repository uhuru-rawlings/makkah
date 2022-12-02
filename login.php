<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/regular.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Al-Ihsan Tours & Travel Ltd</title>
</head>
<body>
    <div class="login-form-section">
        <img data-image src="images/auth-background.jpg" width="100%" height="100%" alt="">
        <div class="follow-us-on">
            <p class="text-light">Follow Us:</p>
            <div class="authentication-icons">
                <a href=""><div class="auth-icons"><i class="fa-brands fa-facebook"></i></div></a>
                <a href=""><div class="auth-icons"><i class="fa-brands fa-twitter"></i></div></a>
                <a href=""><div class="auth-icons"><i class="fa-brands fa-instagram"></i></div></a>
                <a href=""><div class="auth-icons"><i class="fa-brands fa-linkedin"></i></div></a>
            </div>
        </div>
        <div class="login-form">
            <form action="login-fun.php" method="post">
                
                <div class="form-logo" id="formlogo">
                    <img src="images/logo.png" width="100%" height="100%" alt="">
                </div>
                <h1 class="text-center">Welcome Back to Alihsan Tour</h1>
                <p class="text-center">Please login to proceed</p>
                <?php
                    if(isset($_GET['error'])){
                        echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                    }else if(isset($_GET['success'])){
                        echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                    }
                ?>
                <div class="form-group">
                    <label for="username">Email</label>
                    <input type="email" name="username" id="username" class="form-control" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="username">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <a href="reset-password.php">forgot password ?</a>
                        </div>
                        <div class="col-sm-6">
                            <a href="create-account.php">create account ?</a>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="login-user" value="Login" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/formValidations.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="fontawesome/js/brands.js"></script>
    <script src="fontawesome/js/regular.js"></script>
</html>