<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/images/logo (2).png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/brands.css">
    <link rel="stylesheet" href="../assets/css/solid.css">
    <link rel="stylesheet" href="../assets/css/regular.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/auth.css">
    <title>Al-Ihsan Tours & Travel Ltd</title>
</head>
<body>
    <div class="container">
        <div class="container-fluid">
            <div class="login-form">
                <form action="login-fun.php" method="post" autocomplete="off">
                    <div class="logo-sections">
                        <img src="../assets/images/logo-landscape.png" width="100%" height="100%" alt="">
                    </div>
                    <?php
                        if(isset($_GET['success'])){
                            echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                        }else if(isset($_GET['error'])){
                            echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                        }
                    ?>
                    <div class="form-group">
                        <label for="username">Email</label>
                        <input type="email" name="username" id="username" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="Password" id="Password" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" name="login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
    <script src="../assets/js/all.js"></script>
    <script src="../assets/js/brands.js"></script>
    <script src="../assets/js/solid.js"></script>
    <script src="../assets/js/regular.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</html>