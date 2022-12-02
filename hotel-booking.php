
<?php
include_once("admin/database/Database.php");
include("admin/models/Destinations.php");
?>
<!DOCTYPE html>
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
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
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
				<div class="home_title">Hotel Booking</div>
			</div>
		</div>

		<!-- Offers -->

		
		


		<div class="offers py-4">
			<!-- Offers -->
			<div class="container py-2" id="hotel_cards">
				<h2>Book With Us.</h2>
				<div class="row">
					<?php
					$conn = new Database();
					$db   = $conn->connection();
					$products = new Destinations($db);
					$product = $products->getDestinations();
					if ($product) {
						foreach ($product as $product) {
							$image = explode(",", $product['Location_images']);
					?>
							<div class="col-sm-4" style="margin-bottom: 15px;">
								<div class="card">
									<div class="card_image">
										<img src='<?php echo "uploads/{$image[1]}" ?>' alt="" class="hotel_image">
									</div>
									<div class="card-body">
										<div class="hotel_details">
											<div class="row">
												<div class="col-sm-6 hotel_name">
													<b><i class="fa-solid fa-location-dot"></i> <?php echo $product['Location_Name'] ?></b>
												</div>
												<div class="col-sm-6 price"><i class="fa-solid fa-dolar"></i> Kshs. <?php echo $product['Price_Perday'] ?> / Day</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-center">
										<a href='<?php echo "hotel-details.php?hotel_id=" . $product['id'] ?>'>
											<button class="btn" onclick="closeOverlay('hotel-booking',this.id)" id="<?php echo $product['id'] ?>">VIEW DETAILS</button>
										</a>
									</div>
								</div>
							</div>
					<?php
						}
					} else {
						echo "<div class='alert alert-danger'>No hotels available at the moment.</div>";
					}
					?>

					
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
									<div class="form-group" style="display: none;">
										<label for="hetels">Hotel Name</label>
										<input type="text" name="hetels" id="hotels" class="form-control" placeholder="Hotel name">
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



		<div class="offers py-4">
			<div class="container py-2">
				<div class="row">
					<div class="col-sm-4">
						<img src="img/hotel-bookings.jpg" width="100%" style="height: auto;" alt="">
					</div>
					<div class="col-sm-8">
						<p>
							Our vast network of hotels locally and worldwide enables us to provide the best deals and rates available to our clients. You can rely on our professional hotel booking services to guarantee your space in the most comfortable and affordable accommodation at your destination.  Whether traveling locally or abroad for a holiday, business, medical or educational purposes, we can organize timely pickup services to get you from the airport into your booked hotel for your stay or as you wait for other transit. The best thing about booking your hotel and accommodation with us is that we are constantly updated on facilities offering seasonal or promotional discounts and would like you to sample their world-class hospitality. You may also be eligible for discounts should you book your flight and accommodation with us; try us today.
						</p>
						
					</div>
				</div>
				<h3>We ensure that:</h3>
				<ul>
					<li>
						Hotels and quotations are based on the lowest possible rates.
					</li>
					<li>
						You remain updated on the status of reservations and informed of additional offers.
					</li>
					<li>
						We leverage relationships with hotels to get the best possible deals for you.
					</li>
					<li>
						Arriving at a new destination can be a daunting experience, but a friendly face can improve it; our team Assists services are available at your destination airport.
					</li>
					<li>
						A warm welcome by our team at the airport.
					</li>
					<li>
						Escort through immigration, baggage collection, customs clearance, and airport transfer.
					</li>
					<li>
						Visa delivery to airport immigration.
					</li>
				</ul>
			</div>
		</div>


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