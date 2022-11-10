<?php
    include_once("admin/database/Database.php");
    include_once("admin/models/Airline.php");
    include("admin/models/Destinations.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo (2).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/regular.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <title>ALIHSAN TOUR & TRAVEL LTD</title>
</head>
<body>
    <div class="spear-header-slider">
        <div class="image-sliders">
            <img src="images/background-1.jpg" alt="">
        </div>
        <div class="black-overlay">
            <?php
                include("includes/navbar.php");
            ?>
        </div>
    </div>
    <div class="hotel-bookings">
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-6">
                    <h3 class="header-text">Hotel Booking</h3>
                    <form action="bookhotel-fun.php" method="post">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="hetels">Hotels</label>
                                <select name="hetels" id="hetels" class="shadow-none form-control">
                                        <?php
                                            $conn = new Database();
                                            $db = $conn -> connection();
                                            $hotels = new Destinations($db);
                                            $location  = $hotels -> getDestinations();
                                            foreach($location as $location){
                                                echo "<option value='{$location['Location_Name']}'>".$location['Location_Name']."</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numbers">Number of People</label>
                                <input type="number" name="numbers" id="numbers" class="shadow-none form-control" value="1" max="3" min="1">
                            </div>
                        </div>
                       <div class="col-sm-12">
                            <div class="form-group">
                                <label for="fromdate">From Date</label>
                                <input type="date" name="fromdate" id="fromdate" class="shadow-none form-control">
                            </div>
                            <div class="form-group">
                                <label for="todate">To Date</label>
                                <input type="date" name="todate" id="todate" class="shadow-none form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group" style="margin-top: 20px;">
                                <input type="submit" value="Book Now" name="bookhotel" class="btn btn-secondary w-100" id="book">
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
    </div>
    <?php
        include("includes/footer.php");
    ?>
</body>
    <script src="assets/js/index.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="fontawesome/js/brands.js"></script>
    <script src="fontawesome/js/regular.js"></script>
</html>