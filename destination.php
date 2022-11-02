<?php
    include_once("admin/models/Destinations.php");
    include_once("admin/database/Database.php");
    include_once("config.php");
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
<body id="body">
    <?php 
        include_once("includes/navbar.php")
    ?>
    <div class="header-section" id="about-header">
        <div class="spear-header-section">
            <div class="image-slider-carousel">
                <img class="spear-background" src="images/slider1.jpg" alt="">
                <img class="spear-background" src="images/slider2.jpg" alt="">
                <img class="spear-background" src="images/slider3.jpg" alt="">
                <img class="spear-background" src="images/slider4.jpg" alt="">
            </div>
            <div class="welcome-text-section p-4">
                <h1>Destinations.</h1>
            </div>
        </div>
    </div>
    <div class="locations-in-kenya">
        <div class="container py-5">
            <h3 class="header-text">Recent Tour Locations</h3>
            <?php
                if(isset($_GET['success'])){
                    echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                }else if(isset($_GET['error'])){
                    echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                }
            ?>
            <div class="row">
                <?php
                    $conn = new Database();
                    $db = $conn -> connection();
                    $destinations = new Destinations($db);
                    $destination  = $destinations -> getDestinations();
                    if($destination){
                        foreach($destination as $location){
                ?>
                <div class="col-sm-3">
                    <div class="image-section">
                        <?php
                            $img_list = explode(",",$location['Location_images']);
                        ?>
                            <img src="<?php echo BASE_URL."uploads/".$img_list[1] ?>" width="100%" height="100%" alt="">
                        <?php
                        ?>
                        <div class="view-details">
                            <button onclick="openTravelDetails(this.id)" id="<?php echo $location['id'] ?>" class="btn shadow-none">View Details</button>
                        </div>
                    </div>
                    <div class="place-deils">
                        <div class="row">
                            <div class="col">
                                <a target="_blank" href="<?php echo $location['Location'] ?>"><i class="fa-solid fa-location-dot"></i> <?php echo $location['Location_Name'] ?> </a>
                            </div>
                            <div class="col" style="text-align: right;">
                                <i class="fa-solid fa-dollar-sign"></i> Kshs. <?php echo $location['Price_Perday'] ?>
                            </div>
                            <div class="col-sm-12">
                                <button onclick="openBookingForm(this.id)" id="<?php echo $location['id'] ?>" class="btn shadow-none">BOOK NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                        }
                    }else{
                        echo "<div class='alert alert-danger'>No Travel Locations Added.</div>";
                    }
                ?>
            </div>
        </div>
    </div>
    <div class="booking-travel-booking" id="booking-travel-booking">
        <div class="booking-model">
            <form action="bookings.php" method="post" autocomplete="off">
                <div class="row">
                    <div class="form-group col-sm-6" style="display: none;">
                        <label for="locations">Location</label>
                        <input type="text" oninput="removeErrors(this.id)" name="locations" id="locations" class="form-control" value="Masai Mara">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="fullname">Fullname</label>
                        <input type="text" oninput="removeErrors(this.id)" name="fullname" id="fullname" class="form-control" placeholder="Fullname">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="emailadress">Email</label>
                        <input type="email" oninput="removeErrors(this.id)" name="emailadress" id="emailadress" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="phonenumber">Phone</label>
                        <input type="tel" oninput="removeErrors(this.id)" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="phonenumber">From Date</label>
                        <input type="datetime-local" oninput="removeErrors(this.id)" name="fromdate" id="fromdate" class="form-control">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="phonenumber">To Date</label>
                        <input type="datetime-local" oninput="removeErrors(this.id)" name="todate" id="todate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phonenumber">People</label>
                    <input type="number" oninput="removeErrors(this.id)" name="numberofpeople" id="numberofpeople" class="form-control" placeholder="People">
                </div>
                <div class="form-group">
                    <input type="submit" onclick="return validateBookings()"  value="BOOK NOW" class="btn btn-primary">
                </div>
            </form>
            <div class="model-footer">
                <button onclick="closeBookingForm()" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
        <?php
            if(isset($_GET['item'])){
            $conn = new Database();
            $db = $conn -> connection();
            $destinations = new Destinations($db);
            $destinations -> id = $_GET['item'];
            $destination  = $destinations -> getSingleDestination();
            if($destination){
        ?>
    <div class="show-travel-details" id="show-travel-details">
        <div class="details-models">
            <div class="model-title" id="current-travel-item"><?php echo $destination['Location_Name'] ?></div>
            <div class="details">
                <div class="row" id="image-cols">
                <?php
                    $img_list = explode(",",$location['Location_images']);
                    $count = count($img_list);
                    for($i = 1;$i < $count;$i++){
                        if($i == 1){
                ?>
                        <div class="col-sm-12" style="margin-bottom: 15px;">
                            <img src="<?php echo BASE_URL."uploads/".$img_list[$i] ?>" width="100%" height="100%" alt="">
                        </div>
                <?php
                        }else{
                ?>
                        <div class="col-sm-3">
                            <img src="<?php echo BASE_URL."uploads/".$img_list[$i] ?>" width="100%" height="100%" alt="">
                        </div>
                <?php
                        }
                    }
                ?>
                </div>
                <div class="row">
                    <div class="col-sm-6">Place: <?php echo $destination['Location_Name'] ?></div>
                    <div class="col-sm-6">Price: Kshs. <?php echo $destination['Price_Perday'] ?> / Day</div>
                </div>
                <div class="days-opend">Days Opened: <?php echo $destination['Days_Opened'] ?></div>
                <div class="descriptions">
                    <?php echo $destination['place_description'] ?>
                </div>
            </div>
            <div class="model-footer" style="text-align: right;">
                <button onclick="closeTravelDetails()" class="btn btn-secondary">Close</button>
            </div>
        </div>
    </div>
    <?php
        }else{
            echo "<div class='alert alert-danger'>Ooops! something went wrong</div>";
        }
    }
    ?>
    <div class="footer-section py-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i><a href="tel:+254 727 885454"> +254 727 885454</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@alIhsanumrah.com"> info@alIhsanumrah.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li class="active"><a href="destinations.html">Destination</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>Newsletter</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="SIGNUP" id="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127642.11182818291!2d36.821051!3d-1.2843240000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5feca0500bd24aeb!2sJKUAT%20Towers!5e0!3m2!1sen!2sus!4v1666785399093!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <p class="text-center">copyright &copy; all rights reserved.</p>
        </div>
    </div>
</body>
<script src="assets/js/validation.js"></script>
<script src="assets/js/index.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<script src="fontawesome/js/brands.js"></script>
<script src="fontawesome/js/regular.js"></script>
</html>