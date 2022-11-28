<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Bookings.php");
    include_once("../models/Airline.php");
    $_SESSION['active']="destination";
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
    <title>Al-Ihsan Tours & Travel Ltd</title>
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
                    <li class="breadcrumb-item active">Add Airlines</li>
                </ol>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">
                        Add Airlines
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['success'])){
                                echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                            }else if(isset($_GET['error'])){
                                echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                            }
                        ?>
                        <form action="add-airlines-fun.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="airlinename">Airline Name</label>
                                        <input type="text" name="airlinename" id="airlinename" class="form-control" placeholder="Airline Name">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="airlineimage">Airline Logo/Image</label>
                                        <input type="file" name="airlineimage[]" id="airlineimage" class="form-control" placeholder="Airline Image">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="submit" style="margin-top: 20px;" value="Add Airline" name="save" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">Add Travel Destinations</div>
                    <div class="card-body">
                        <form action="add-airlines-fun.php" method="post">
                            <?php
                                if(isset($_GET['air-success'])){
                                    echo "<div class='alert alert-success'>".$_GET['air-success']."</div>";
                                }else if(isset($_GET['air-error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['air-error']."</div>";
                                }
                            ?>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="airline">Airline</label>
                                        <select name="airline" class="form-control" id="airline">
                                            <?php
                                                $conn = new Database();
                                                $db = $conn -> connection();
                                                $airlines = new Airline($db);
                                                $airline = $airlines -> getAirlines();
                                                foreach($airline as $airline){
                                                    echo "<option value='{$airline['id']}'>{$airline['Name']}</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="fromlocation">From Location</label>
                                        <input type="text" name="fromlocation" id="fromlocation" class="form-control" placeholder="From Location">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="tolocation">To Location</label>
                                        <input type="text" name="tolocation" id="tolocation" class="form-control" placeholder="To Location">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Save Destinations" name="save-airline" class="btn btn-primary">
                            </div>
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