<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Registration.php");
    $_SESSION['active'] = "profile";
    if(isset($_COOKIE['adminuser'])){

    }else{
        header("Location: ../auth/index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/images/logo (2).png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/brands.css">
    <link rel="stylesheet" href="../assets/css/solid.css">
    <link rel="stylesheet" href="../assets/css/regular.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>ALISHAN TOUR & TRAVEL LTD.</title>
</head>
<body>
    <section class="top-nav">
        <?php
            include("../includes/topnav.php");
        ?>
    </section>
    <section class="fullbody-content">
        <section class="sidenav" id="sidenavbar">
            <?php
                include("../includes/sidenav.php");
            ?>
        </section>
        <section class="body-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL."admin/index.php" ?>">Home</a></li>
                    <li class="breadcrumb-item active">Update</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        Update
                    </div>
                    <div class="card-body">
                        <form action="update-profile.php" method="post">
                            <?php
                                if(isset($_GET['success'])){
                                    echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                                }else if(isset($_GET['error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                                }
                            ?>
                            <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $user = new Registration($db);
                                    $user -> Email = $_COOKIE['adminuser'];
                                    $update = $user -> getUser();
                                    if($update){
                            ?>
                           
                            <div class="row">
                              <div class="form-group col-sm-6">
                                <label for="Fname">Firstname</label>
                                <input type="text" value="<?php echo $update['Fname'] ?>" name="Fname" id="Fname" class="form-control" placeholder="Firstname">
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="Lname">Lastname</label>
                                <input type="text" value="<?php echo $update['Lname'] ?>" name="Lname" id="Lname" class="form-control" placeholder="Lastname">
                              </div>
                            </div>
                            <div class="row">
                              <div class="form-group col-sm-6">
                                <label for="Email">Email</label>
                                <input type="email" value="<?php echo $update['Email'] ?>" name="Email" id="Email" class="form-control" placeholder="Email">
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="Phone">Phone</label>
                                <input type="tel" value="<?php echo $update['Phone'] ?>" name="Phone" id="Phone" class="form-control" placeholder="Phone">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="Password" id="Password" class="form-control" placeholder="Password">
                              </div>
                            <div class="form-group">
                                <input type="submit" value="Update Profile" name="update" class="btn btn-primary" id="save">
                            </div>
                            <?php
                                    }else{
                                        echo "<div class='alert alert-danger'>Seems you are not loged in.</div>";
                                    }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <?php
                include("../includes/footer.php");
            ?>
        </section>
    </section>
</body>
<script src="../assets/js/index.js"></script>
<script src="../assets/js/main.d810cf0ae7f39f28f336.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/brands.js"></script>
<script src="../assets/js/solid.js"></script>
<script src="../assets/js/regular.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</html>