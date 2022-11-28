<?php
	include_once("admin/database/Database.php");
	include("admin/models/Destinations.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Al-Ihsan Tours & Travel Ltd is the market leader in low-cost domestic and international air travel. Since our inception, we have distinguishably provided end-to-end air transportation solutions for our clients flying to domestic and international destinations. We have also established a solid status for reliability and world-class customer service.">
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php
		include_once("includes/navbar.php");
	?>

	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
			<ul>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="about.html">about us</a></li>
				<li class="menu_item"><a href="services.php">services</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="home_content">
			<div class="home_title">Visa Assistance</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">
		<!-- Offers -->
		<div class="container py-4" id="hotel_cards">
            <div class="row">
                <div class="col-sm-4">
                    <img src="" width="100%" style="height: auto;" alt="">
                </div>
                <div class="col-sm-8">
                    <p>
                        Al-Ihsan Tours & Travel Ltd facilitates complete visa processing for both inbound and outbound travelers to ensure a hassle-free experience no matter the chosen destination.
                    </p>
                    <p>
                        We have one of the highest success rates in visa applications in the region, and we are always glad to assist our clients in securing visas for their destination countries. Our visa application services include information dissemination, an automated application, and appointment scheduling at the embassy. 
                    </p>
                    <p>
                        Our dedication to outstanding professionalism has won the attention of a number of the leading forces in the travel industry, which has allowed us to establish ourselves as the preferred supplier of tourist visas to many independent and corporate agents. Know that the documentation procedure may vary from one visa service to another, and certain conditions apply to all visa services. So, talk to us today for affordable and customer-friendly visa application services.
                    </p>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>Types of Visa</h3>
                <ul>
                    <li>Medical visa</li>
                    <li>Student visa</li>
                    <li>Tourist visa</li>
                    <li>Business and work permit visa</li>
                    <li>Transit visa</li>
                    <li>Single entry visa</li>
                    <li>Multiple entry visa</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <h3>Consultation and visa for:</h3>
                <ul>
                    <li>Kenya </li>
                    <li>Somalia</li>
                    <li>India </li>
                    <li>Saudi Arabia </li>
                    <li>Uganda </li>
                    <li>Turkey </li>
                    <li>Malaysia </li>
                    <li>Qatar </li>
                    <li>Kuwait </li>
                    <li>Egypt </li>
                    <li>UAE</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <div class="button book_button" onclick="closeOverlay('appointment-booking')"><a href="javascript:void(0)">Book Appointment<span></span><span></span><span></span></a></div>
            </div>
		</div>		
	</div>
    <!-- book appointment -->
    <div class="overlay_white" id="appointment-booking">
        <div class="booking_models">
            <div class="card">
                <div class="card-header">
                    Book Visa Appointments
                </div>
                <div class="card-body">
                    <form action="bookappointments.php" method="post" class="w-100">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="appointmentdate">Date</label>
                                    <input type="date" oninput="removeErrors(this.id)" name="appointmentdate" id="appointmentdate" class="shadow-none form-control">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group" style="margin-top: 20px;">
                                    <input type="submit" onclick="return validateVisaBookings()" value="Book Appointment" name="save" class="btn btn-secondary">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-secondary" onclick="closeOverlay('appointment-booking')">close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end book appointment -->
	<!-- Footer -->
	<?php
		include_once("includes/footer.php");
	?>

</div>
<script src="js/main.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>