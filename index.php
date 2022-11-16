<?php
	include_once("admin/database/Database.php");
	include_once("admin/models/Airline.php");
	include_once("admin/models/Destinations.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Al-Ihsan Tours & Travel Ltd</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
	<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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

			<!-- Home Slider -->

			<div class="home_slider_container">

				<div class="owl-carousel owl-theme home_slider">

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">

						<div class="home_slider_background" style="background-image:url(img/hotel-bookings.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>Hotel</h1>
								<h1>Booking</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(img/signup-background-image.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>Vacation</h1>
								<h1>Destinations</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item -->
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(img/umra-packages.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>Visa</h1>
								<h1>Assistance</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>

					<!-- Slider Item --> umrah-services.jpg
					<div class="owl-item home_slider_item">
						<div class="home_slider_background" style="background-image:url(img/umrah-services.jpg)"></div>

						<div class="home_slider_content text-center">
							<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
								<h1>Hajj</h1>
								<h1>& umrah Services</h1>
								<div class="button home_slider_button">
									<div class="button_bcg"></div><a href="#">explore now<span></span><span></span><span></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Nav - Prev -->
				<div class="home_slider_nav home_slider_prev">
					<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_prev'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#0143a9' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 " />
					</svg>
				</div>

				<!-- Home Slider Nav - Next -->
				<div class="home_slider_nav home_slider_next">
					<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
						<defs>
							<linearGradient id='home_grad_next'>
								<stop offset='0%' stop-color='#fa9e1b' />
								<stop offset='100%' stop-color='#0143a9' />
							</linearGradient>
						</defs>
						<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z" />
						<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 " />
					</svg>
				</div>

				<!-- Home Slider Dots -->

				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
						<li class="home_slider_custom_dot active">
							<div></div>01.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>02.
						</li>
						<li class="home_slider_custom_dot">
							<div></div>03.
						</li>
					</ul>
				</div>

			</div>

		</div>

		<!-- Search -->

		<div class="search">


			<!-- Search Contents -->

			<div class="container fill_height">
				<div class="row fill_height">
					<div class="col fill_height">

						<!-- Search Tabs -->

						<div class="search_tabs_container">
							<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
								<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">Hajj & Umrah</div>
								<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">Visa Assistance</div>
							</div>
						</div>

						<!-- Search Panel -->

						<div class="search_panel active text-light">
							<form action="bookhotel-fun.php" method="post" class="w-100">
								<div class="row">
									<div class="col-sm-4">
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
									<div class="col-sm-4">
										<div class="form-group">
											<label for="fromdate">From Date</label>
											<input type="date" oninput="removeErrors(this.id)" name="fromdate" id="fromdate" class="shadow-none form-control">
										</div>
										<div class="form-group">
											<label for="todate">To Date</label>
											<input type="date" oninput="removeErrors(this.id)" name="todate" id="todate" class="shadow-none form-control">
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group" style="margin-top: 20px;">
											<input type="submit" value="Book Now" onclick="return validateHotelBooking()" name="bookhotel" class="btn btn-secondary" id="book">
										</div>
									</div>
								</div>
							</form>
						</div>

						<!-- Search Panel -->

						<div class="search_panel text-light">
							<form action="booktrip-fun.php" method="post" class="w-100">
								<div class="row">
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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
									<div class="col-sm-4">
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

						<!-- Search Panel -->

						<div class="search_panel text-light">
							<div>
								<p class="text-light w-100">
									We aim to be your Companion and Friend on your visit to the House of Allah. Our mission is to connect people to Makkah and Madinah. No matter how far away you might be, we will help you find the Umrah trip right for you! Also, Al-Ihsan Tours & Travel Ltd offers different classes of umrah
								</p>
								<div class="row">
									<div class="col-sm-6">
										<p class="text-light">Do you want to book ?</p>
									</div>
									<div class="col-sm-6">
										<a href="hajj-booking.php"><button class="btn btn-secondary">Book Now</button></a>
									</div>
								</div>
							</div>
						</div>

						<!-- Search Panel -->

						<div class="search_panel text-light">
							<p class="text-light">
								We take the task of visa application from out clicents by doing that ourselves. You book an appointment with us, we will organise and take the right procedures on your behalf which will be alittle faster. Do you want to book a meeting ?
							</p>
							<form action="bookappointments.php" method="post" class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="appointmentdate">Date</label>
											<input type="date" oninput="removeErrors(this.id)" name="appointmentdate" id="appointmentdate" class="shadow-none form-control">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group" style="margin-top: 20px;">
											<input type="submit" onclick="return validateVisaBookings()" value="Book Appointment" name="save" class="btn btn-secondary">
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Intro -->

		<div class="intro">
			<div class="container">
				<!-- <div class="row">
					<div class="col">
						<h2 class="intro_title text-center">We have the best tours</h2>
					</div>
				</div> -->


				<div class="row">
					<div class="col-lg-6">
						<img width="80%" height="auto" src="images/about-us-section1.jpg" alt="Holiday Destinations" srcset="">
					</div>

					<div class="col-lg-6">
						<div class="">
						<h2 class="intro_title text-left gpadding">Your Flying Partner</h2>
							<p>
								Al-Ihsan Tours & Travel Ltd started operations in 2015 in Amsterdam, Netherlands. The company is registered and licensed as a full-fledged travel and tourism management agency to operate inbound, outbound, and airline ticket reservations for domestic and international travelers.
							</p>

							<p>
								Al-Ihsan Tours & Travel Ltd is the market leader in low-cost domestic and international air travel. Since our inception, we have distinguishably provided end-to-end air transportation solutions for our clients flying to domestic and international destinations. We have also established a solid status for reliability and world-class customer service.
							</p>

							<p>
								Al-Ihsan also provides Hajj and Umrah services, skilled travel advisers, and a customer support team with almost ten (10) years of combined expertise, making us one of the top firms providing Hajj and Umrah packages smoothly as possible.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h2 class="intro_title text-center gpadding">Our Objectives</h2>
					</div>
					<div class="col-sm-6">
					
					<img width="100%" height="auto" src="images/holiday-saudia.jpg" alt="Holiday Destinations" srcset="">

					
					<p>
							The main business scope at Al Ihsan Tours & Travel Ltd is Air ticketing, Regional, local, and international, Hajj and Umrah, and Hotel Booking. Regarding marketing strategy, Al Ihsan Tours & Travel Ltd can improve and develop the tourism sector locally and internationally.

							We aim to develop our business in the travel industry in line with international rules and policy. Also, the potential to expand its business as the company is often focused on engaging with overseas travel agencies, especially during the holiday season.
						</p>
					</div>



					<div class="col-sm-6" id="marked_list">
						<ul>
							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								Provide a high standard of services for individuals seeking relaxing, comfortable, and memorable experiences in the hospitality and tourism industry.
							</p>

							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								Produce expeditions and memories that would satisfy every single customer. 
							</p>

							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								Customer-focused organization; we listen to our customers by providing them superior service and exceeding their expectations. Thus, earning their trust, respect, and confidence.
							</p>
							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								We are a unified team that believes in collaboration, professionalism, investing in our employees, technology, quality, continuous learning, and improvement.
							</p>
							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								We recognize the responsibility and opportunity to contribute to society and make a meaningful difference.
							</p>

							<p>
								<span class="list_check"><i class="fa-solid fa-check"></i></span>
								We Participate in local and regional community service by providing general lectures, consultation, and training programs.
							</p>
						</ul>
					</div>
				</div>


				<div class="row intro_items">

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							
							<div class="intro_item_background" style="background-image:url(images/intro_1.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Mauritius</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							
							<div class="intro_item_background" style="background-image:url(images/intro_2.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Greece</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Intro Item -->

					<div class="col-lg-4 intro_col">
						<div class="intro_item">
							<div class="intro_item_overlay"></div>
							<!-- Image by https://unsplash.com/@willianjusten -->
							<div class="intro_item_background" style="background-image:url(images/intro_3.jpg)"></div>
							<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
								<div class="intro_date">May 25th - June 01st</div>
								<div class="button intro_button">
									<div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a>
								</div>
								<div class="intro_center text-center">
									<h1>Scotland</h1>
									<div class="intro_price">From $1450</div>
									<div class="rating rating_4">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- objectives -->

		<!-- CTA -->

		<div class="cta">
			
			<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

			<div class="container">
				<div class="row">
					<div class="col">

						<!-- CTA Slider -->

						<div class="cta_slider_container">
							<div class="owl-carousel owl-theme cta_slider">

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item">
									<div class="cta_title text-center">Hajj & Umrah package</div>
									<div class="rating_r rating_r_4 text-center">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p>
										Driven by our deeply rooted origins and commitment to delivering the highest service standards, we have successfully distinguished ourselves in the world of hospitality by designing exceptional Hajj and Umrah packages and organizing Hajj and Umrah groups. We have consistently moved towards evolution and excellence in Hajj and Umrah services to ensure the best possible experience during the pilgrimage.
									</p>

									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a>
									</div>

								</div>

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item">
									<div class="cta_title text-center">Airline reservation & ticketing.</div>
									<div class="rating_r rating_r_4 text-center">
										<i></i>
									</div>
									<p>
										We are the experts in air ticketing in the region. Whether you are fly­ing alone, with your family, or as a team, we offer the most afford­able and reliable air ticketing services for domestic and international flights.

										You can take advantage of our partnership with leading local and international airlines to book your flights at the least cost and guar­antee hassle-free arrival to your desired destination. Our friendly customer agents are always available to assist with inquiries regarding our services and the flight you’re booked.
									</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a>
									</div>
								</div>

								<!-- CTA Slider Item -->
								<div class="owl-item cta_item">
									<div class="cta_title">Hotel Booking services.</div>
									<div class="rating_r rating_r_4">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="cta_text">
										We go an extra mile to look for the best hotels, We seek quality and afordability on your behalf.
										We are well connected with some of the best hotels that serves the interests of our customers.
									</p>
									<div class="button cta_button">
										<div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a>
									</div>
								</div>

							</div>

							<!-- CTA Slider Nav - Prev -->
							<div class="cta_slider_nav cta_slider_prev">
								<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#0143a9' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- CTA Slider Nav - Next -->
							<div class="cta_slider_nav cta_slider_next">
								<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='cta_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#0143a9' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>
			</div>

		</div>

		<!-- Offers -->

		<div class="offers">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">the best offers with rooms</h2>
					</div>
				</div>
				<div class="row offers_items">

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>
										<div class="offer_name"><a href="#">grand castle</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$70<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.html">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by Egzon Bytyqi -->
										<div class="offers_image_background" style="background-image:url(images/offer_2.jpg)"></div>
										<div class="offer_name"><a href="#">turkey hills</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$50<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.html">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@nevenkrcmarek -->
										<div class="offers_image_background" style="background-image:url(images/offer_3.jpg)"></div>
										<div class="offer_name"><a href="#">island dream</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$90<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.html">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@mantashesthaven -->
										<div class="offers_image_background" style="background-image:url(images/offer_4.jpg)"></div>
										<div class="offer_name"><a href="#">travel light</a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price">$30<span>per night</span></div>
										<div class="rating_r rating_r_4 offers_rating">
											<i></i>
											<i></i>
											<i></i>
											<i></i>
											<i></i>
										</div>
										<p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
										<div class="offers_icons">
											<ul class="offers_icons_list">
												<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
												<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
											</ul>
										</div>
										<div class="offers_link"><a href="offers.html">read more</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- core values -->
		<div class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">Our core values</h2>
					</div>
				</div>
				<div id="core_values">
					<div class="row py-2">
						<div class="col-sm-4" style="height: 220px;">
							<img src="img/transparency.jpg" height="100%" width="100%" alt="">
						</div>
						<div class="col-sm-8">
							<div class="core_values_text">
								<h4 class="trending_title">Transparency</h4>
								<p>
									Building trust in all business and personal dealings.
								</p>
							</div>
						</div>
					</div>
					<div class="row py-2">
						<div class="col-sm-4">
							<img src="img/quanlity.jpg" height="100%" width="100%" alt="">
						</div>
						<div class="col-sm-8">
							<div class="core_values_text">
								<h4 class="trending_title">Quality</h4>
								<p>
									We provide outstanding products and services that deliver premium value to our clients and end agents.
								</p>
							</div>
						</div>
					</div>
					<div class="row py-2">
						<div class="col-sm-4">
							<img src="img/respect.jpg" height="100%" width="100%" alt="">
						</div>
						<div class="col-sm-8">
							<div class="core_values_text">
								<h4 class="trending_title">Respect</h4>
								<p>
									For ourselves, our guests, our partners, and our team.
								</p>
							</div>
						</div>
					</div>
					<div class="row py-2">
						<div class="col-sm-4">
							<img src="img/integrity.jpg" height="100%" width="100%" alt="">
						</div>
						<div class="col-sm-8">
							<div class="core_values_text">
								<h4 class="trending_title">Integrity</h4>
								<p>
									We uphold the highest standards of integrity in all our actions.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials -->

		<div class="testimonials">
			<div class="test_border"></div>
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">what our clients say about us</h2>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<!-- Testimonials Slider -->

						<div class="test_slider_container">
							<div class="owl-carousel owl-theme test_slider">

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_1.jpg" alt="https://unsplash.com/@anniegray"></div>
										<div class="test_icon"><img src="images/backpack.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_2.jpg" alt="https://unsplash.com/@tschax"></div>
										<div class="test_icon"><img src="images/island_t.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_3.jpg" alt="https://unsplash.com/@seefromthesky"></div>
										<div class="test_icon"><img src="images/kayak.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_2.jpg" alt=""></div>
										<div class="test_icon"><img src="images/island_t.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_1.jpg" alt=""></div>
										<div class="test_icon"><img src="images/backpack.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

								<!-- Testimonial Item -->
								<div class="owl-item">
									<div class="test_item">
										<div class="test_image"><img src="images/test_3.jpg" alt=""></div>
										<div class="test_icon"><img src="images/kayak.png" alt=""></div>
										<div class="test_content_container">
											<div class="test_content">
												<div class="test_item_info">
													<div class="test_name">carla smith</div>
													<div class="test_date">May 24, 2017</div>
												</div>
												<div class="test_quote_title">" Best holliday ever "</div>
												<p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
											</div>
										</div>
									</div>
								</div>

							</div>

							<!-- Testimonials Slider Nav - Prev -->
							<div class="test_slider_nav test_slider_prev">
								<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_prev'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#0143a9' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
								</svg>
							</div>

							<!-- Testimonials Slider Nav - Next -->
							<div class="test_slider_nav test_slider_next">
								<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
									<defs>
										<linearGradient id='test_grad_next'>
											<stop offset='0%' stop-color='#fa9e1b' />
											<stop offset='100%' stop-color='#0143a9' />
										</linearGradient>
									</defs>
									<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
									<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
								</svg>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>

		<div class="trending">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<h2 class="section_title">trending now</h2>
					</div>
				</div>
				<div class="row trending_container">

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">grand hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">mars hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">queen hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">mars hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">grand hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">mars hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">queen hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

					<!-- Trending Item -->
					<div class="col-lg-3 col-sm-6">
						<div class="trending_item clearfix">
							<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
							<div class="trending_content">
								<div class="trending_title"><a href="#">mars hotel</a></div>
								<div class="trending_price">From $182</div>
								<div class="trending_location">madrid, spain</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="contact">
			<div class="contact_background" style="background-image:url(images/contact.png)"></div>

			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="contact_image">

						</div>
					</div>
					<div class="col-lg-7">
						<div class="contact_form_container">
							<div class="contact_title">get in touch</div>
							<form action="#" id="contact_form" class="contact_form">
								<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
								<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
								<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
								<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<?php
		include_once("includes/footer.php");
		?>
		<!-- footer -->
	</div>
	<script src="js/main.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>