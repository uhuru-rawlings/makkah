<?php
	session_start();
	include_once("admin/database/Database.php");
	include_once("admin/models/Airline.php");
	include_once("admin/models/Destinations.php");
	$url = "index.php";
	$_SESSION['redirect_url'] = $url;
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title>About Us</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Al-Ihsan Tours & Travel Ltd is the market leader in low-cost domestic and international air travel. Since our inception, we have distinguishably provided end-to-end air transportation solutions for our clients flying to domestic and international destinations. We have also established a solid status for reliability and world-class customer service.">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/about_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<?php
		include_once("includes/navbar.php");
		?>

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<div class="logo menu_logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
				<ul>
					<li class="menu_item"><a href="index.php">home</a></li>
					<li class="menu_item"><a href="about.php">about us</a></li>
					<li class="menu_item"><a href="services.php">services</a></li>
					<li class="menu_item"><a href="contact.php">contact</a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
			<div class="home_content">
				<div class="home_title">Services</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro">
			<div class="container">
				<h2>AIRLINE RESERVATION & TICKETING</h2>
				<div class="row">
					<div class="col-lg-5">
						<div class="intro_image"><img width="100%" height="auto" src="images/background-1.jpg" alt=""></div>
					</div>
					<div class="col-lg-7">
						<div class="intro_content">
							<!-- <div class="intro_title">Message</div> -->
							<p class="intro_text">
								Thank you in advance for choosing our services at Al-Ihsan Tours & Travel Ltd. Stating confidently that you are here at the pane of a professional journey and tour, eager to create a long-term business relationship with you.
							</p>
                            <p class="intro_text">
								We are the experts in air ticketing in the region. Whether you are flying alone, with your family, or as a team, we offer the most affordable and reliable air ticketing services for domestic and international flights.
                            </p>
							<p class="intro_text">
								You can take advantage of our partnership with leading local and international airlines to book your flights at the least cost and guarantee hassle-free arrival to your desired destination. Our friendly customer agents are always available to assist with inquiries regarding our services and the flight you’re booked.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="intro bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 m-auto text-center">
						<p class="intro_text">
							Our strategic partnerships with leading airlines allow us to source our clients’ best seats and prices. Our dedicated team of travel experts ensures that: 
						</p>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>01</span></div>
									Check the available flights and airfare, and compare prices and deals.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>02</span></div>
									Check the tickets that our clients require, whether a return, multiple or one-way tickets, and dates.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>03</span></div>
										Offer the different alternative routings - quotations for consideration.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>04</span></div>
									Book tickets and prepare itineraries based on the lowest fare and most convenient route.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>05</span></div>
									Follow precise ticketing deadlines and relevant information when creating reservations to avoid booking cancellations. 
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>06</span></div>
										Issue tickets for the clients with no errors and Ensure tickets are issued per entitlements prescribed in clients’ policies. 
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>07</span></div>
										Provide clients with last-seat availability, advance seat assignments, and advance boarding passes on all airlines.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="bg-light shadow p-3 mb-5 bg-body rounded">
								<div class="card-body">
									<div class="count bg-light"><span>08</span></div>
									Contact the airline representative for further information if required.
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="col-lg-6">
						<h3>Apply Now</h3>
						<form action="booktrip-fun.php" method="post">
							<div class="form-group">
								<label for="fromlocation">From Location</label>
								<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="fromlocation" id="fromlocation" required>
									<?php
									$conn = new Database();
									$db = $conn->connection();
									$locations = new Airline($db);
									$location  = $locations->getDestinations();
									foreach ($location as $location) {
										echo "<option value='{$location['From_location']}'>" . $location['From_location'] . "</option>";
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="tolocation">To Location</label>
								<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tolocation" id="tolocation" required>
									<?php
									$conn = new Database();
									$db = $conn->connection();
									$locations = new Airline($db);
									$location  = $locations->getDestinations();
									foreach ($location as $location) {
										echo "<option value='{$location['To_location']}'>" . $location['To_location'] . "</option>";
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="tripsround">Trip</label>
								<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tripsround" id="tripsround" required>
									<option value="Rount Trip">Rount Trip</option>
									<option value="One Way">One Way</option>
								</select>
							</div>
							<div class="form-group">
								<label for="formdate">Date From</label>
								<input oninput="removeErrors(this.id)" type="date" class="shadow-none form-control" name="formdate" id="formdate" required>
							</div>
							<div class="form-group">
								<label for="travelclass">Travel Class</label>
								<select oninput="removeErrors(this.id)" name="travelclass" id="travelclass" class="shadow-none form-control" required>
									<option value="Guest">Guest</option>
									<option value="Business">Business</option>
									<option value="First">First</option>
								</select>
							</div>
							<div class="form-group">
								<label for="number">Number of People</label>
								<input oninput="removeErrors(this.id)" type="number" min="1" value="1" max="7" name="number" id="number" class="shadow-none form-control" required>
							</div>
							<div class="form-group">
								<input oninput="removeErrors(this.id)" type="checkbox" name="aggrement" id="aggrement" required>
								<label for="aggrement">Agree To Change +/- 7 days.</label>
							</div>
							<div class="form-group">
								<input type="submit" name="booktrip" onclick="return validateTripForm()" value="Book Now" class="btn btn-secondary">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer -->

		<?php
		include_once("includes/footer.php");
		?>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/greensock/TweenMax.min.js"></script>
	<script src="plugins/greensock/TimelineMax.min.js"></script>
	<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
	<script src="plugins/greensock/animation.gsap.min.js"></script>
	<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/about_custom.js"></script>
</body>
</html>