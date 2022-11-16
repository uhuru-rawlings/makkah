<?php
	include_once("admin/database/Database.php");
	include_once("admin/models/Airline.php");
	include("admin/models/Destinations.php");
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Services</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
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
			<div class="home_title">our services</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->



		<!-- Offers -->

		<div class="container">
			<div class="row">
				<div class="col-lg-1 temp_col"></div>
				
				<div class="col-lg-12">
					<!-- Offers Grid -->

					<div class="offers_grid">

						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
										<!-- <div class="offer_name"><a href="single_listing.html">grand castle</a></div> -->
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">Hotel Booking</div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											We look for affordable,secure hotels who serves our customers needs and make them available to you.
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button" onclick="closeOverlay('hotel-booking')"><a href="javascript:void(0)">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@thoughtcatalog -->
										<div class="offers_image_background" style="background-image:url(img/visa-assistance.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">Visa Asistance</span></div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											We work hard to avail visa to our clients who need them, We are well connected and we can process your visa legaly but faster.
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button" onclick="closeOverlay('appointment-booking')"><a href="javascript:void(0)">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

						<div class="offers_item rating_5">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mindaugas -->
										<div class="offers_image_background" style="background-image:url(img/background-1.jpg)"></div>
										<div class="offer_name"><a href="single_listing.html">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">Airline Ticketing & Reservation</div>
										<div class="rating_r rating_r_5 offers_rating"  data-rating="5">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											We are the experts in air ticketing in the region.You can take advantage of our partnership with leading local and international airlines to book your flights at the least cost and guar­antee hassle-free arrival to your desired destination. Our friendly customer agents are always available to assist with inquiries regarding our services and the flight you’re booked.
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button" onclick="closeOverlay('flight-booking')"><a href="javascript:void(0)">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

						<div class="offers_item rating_4">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@rktkn -->
										<div class="offers_image_background" style="background-image:url(img/hajj-and-umrah.jpg)"></div>
										<!-- <div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div> -->
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">Hajj & Umrah Services</div>
										<div class="rating_r rating_r_4 offers_rating" data-rating="4">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											Driven by our deeply rooted origins and commitment to delivering the highest service standards, we have successfully distinguished ourselves in the world of hospitality by designing exceptional Hajj and Umrah packages and organizing Hajj and Umrah groups. We have consistently moved towards evolution and excellence in Hajj and Umrah services to ensure the best possible experience during the pilgrimage. 
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="row">
											<div class="col-sm-6">
												<div class="button book_button"><a href="umra-services.php">Umrah Services<span></span><span></span><span></span></a></div>
											</div>
											<div class="col-sm-6">
												<div class="button book_button"><a href="hajj-services.php">Hajj Services<span></span><span></span><span></span></a></div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
						</div>

						<!-- Offers Item -->

						<div class="offers_item rating_3">
							<div class="row">
								<div class="col-lg-1 temp_col"></div>
								<div class="col-lg-3 col-1680-4">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@itsnwa -->
										<div class="offers_image_background" style="background-image:url(img/surfing.jpg)"></div>
										<!-- <div class="offer_name"><a href="single_listing.html">grand castle</a></div> -->
									</div>
								</div>
								<div class="col-lg-8">
									<div class="offers_content">
										<div class="offers_price">Leisure and Holidays services</div>
										<div class="rating_r rating_r_3 offers_rating" data-rating="3">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">
											Do you find it hard to choose the best holyday location for you or you and your family. We have sampled and chosen the best among the best Leisure and holiday destinations for you at an affordable price.
										</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>		
	</div>
	<!-- hotel booking -->
	<div class="overlay_white" id="hotel-booking">
		<div class="booking_models">
			<div class="card">
				<div class="card-header">
					Book Hotel
				</div>
				<div class="card-body">
				<form action="bookhotel-fun.php" method="post" class="w-100">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="hetels">Hotels</label>
								<select oninput="removeErrors(this.id)" name="hetels" id="hetels" class="shadow-none form-control">
									<?php
									$conn = new Database();
									$db = $conn->connection();
									$hotels = new Destinations($db);
									$location  = $hotels->getDestinations();
									foreach ($location as $location) {
										echo "<option value='{$location['Location_Name']}'>" . $location['Location_Name'] . "</option>";
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="numbers">Number of People</label>
								<input type="number" oninput="removeErrors(this.id)" name="numbers" id="numbers" class="shadow-none form-control" value="1" max="3" min="1">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group">
								<label for="fromdate">From Date</label>
								<input type="date" oninput="removeErrors(this.id)" name="fromdate" id="fromdate" class="shadow-none form-control">
							</div>
							<div class="form-group">
								<label for="todate">To Date</label>
								<input type="date" oninput="removeErrors(this.id)" name="todate" id="todate" class="shadow-none form-control">
							</div>
						</div>
						<div class="col-sm-12">
							<div class="form-group" style="margin-top: 20px;">
								<input type="submit" value="Book Now" onclick="return validateHotelBooking()" name="bookhotel" class="btn btn-secondary" id="book">
							</div>
						</div>
					</div>
				</form>
				</div>
				<div class="card-footer">
					<button class="btn btn-secondary" onclick="closeOverlay('hotel-booking')">close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end hotel booking -->
	<!-- flight booking -->
	<div class="overlay_white" id="flight-booking">
		<div class="booking_models">
			<div class="card">
				<div class="card-header">
					Book Flight
				</div>
				<div class="card-body">
					<form action="booktrip-fun.php" method="post" class="w-100">
						<div class="row">
							<div class="col-sm-12">
								<div class="row">
									<div class="form-group col">
										<label for="fromlocation">From Location</label>
										<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="fromlocation" id="fromlocation">
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
									<div class="form-group col">
										<label for="tolocation">To Location</label>
										<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tolocation" id="tolocation">
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
								</div>
								<div class="row">
									<div class="form-group col">
										<label for="tripsround">Trip</label>
										<select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tripsround" id="tripsround">
											<option value="Rount Trip">Rount Trip</option>
											<option value="One Way">One Way</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="row">
									<div class="form-group col-sm-12">
										<label for="formdate">Date From</label>
										<input oninput="removeErrors(this.id)" type="date" class="shadow-none form-control" name="formdate" id="formdate">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="form-group">
											<label for="travelclass">Travel Class</label>
											<select oninput="removeErrors(this.id)" name="travelclass" id="travelclass" class="shadow-none form-control">
												<option value="Guest">Guest</option>
												<option value="Business">Business</option>
												<option value="First">First</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label for="number">Number of People</label>
									<input oninput="removeErrors(this.id)" type="number" min="1" value="1" max="7" name="number" id="number" class="shadow-none form-control">
								</div>
								<div class="form-group">
									<input oninput="removeErrors(this.id)" type="checkbox" name="aggrement" id="aggrement">
									<label for="aggrement">Agree To Change +/- 7 days.</label>
								</div>
								<div class="form-group">
									<input type="submit" name="booktrip" onclick="return validateTripForm()" value="Book Now" class="btn btn-secondary">
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="card-footer">
					<button class="btn btn-secondary" onclick="closeOverlay('flight-booking')">close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end flight booking -->
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