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
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
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
				<h2>HAJJ & UMRAH SERVICES</h2>
				<div class="row">
					<div class="col-lg-5">
						<div class="intro_image"><img width="100%" height="auto" src="images/hajj-and-umrah.jpg" alt=""></div>
					</div>
					<div class="col-lg-7">
						<div class="intro_content">
							<!-- <div class="intro_title">Message</div> -->
							<p class="intro_text">
                                Our great strength lies in our values and our experienced people who meet the challenges of a fast-moving and growing travel industry with a view of providing the best to our customers.
							</p>
                            <p class="intro_text">
                                Al-Ihsan Tours & Travel, by the grace of Allah, has serviced various sectors with dedication. Our experience is our strength; we are not here to compete in this only journey. We are here to provide the right choices when it comes to your demand right from your doorstep; we will cater to all your needs, be it Airlines, Hotels, transport & Meals. We will leave no stone unturned to offer you peace of Mind.
                            </p>
							<p class="intro_text">
                                Driven by our deeply rooted origins and commitment to delivering the highest service standards, we have successfully distinguished ourselves in the world of hospitality by designing exceptional Hajj and Umrah packages and organizing Hajj and Umrah groups. We have consistently moved towards evolution and excellence in Hajj and Umrah services to ensure the best possible experience during the pilgrimage. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="intro bg-white">
			<div class="container">
                <p class="intro_text">
                    We have built a vast network of solid relationships that include; citizens, residents, and high-ranking governmental and private institutions. We provide our clients with everything they need most efficiently and suitably through partnerships with key Saudi Arabian companies, hospitality facilities, and luxurious hotels in the Holy Lands. 
                </p>
                <p class="intro_text">
                    These are some of the most important religious pilgrimages for the Muslim fraternity. As fellow Muslims, we are obliged by our faith to facilitate the travel of the faithful to the Holy sites. To facilitate this, we encourage our customers to prepare early enough to avoid the last-minute rush.
                </p>
                <p class="intro_text">
                    We thus allow our customers to come over for early visa application, besides pre-booking their return flights and accommodation when demand for such services is still low and charges affordable. We are always at hand to assist that intent on attending the Hajj and Umrah with all the required preparations, including visa application, flight booking, and planning for accommodation.
                </p>
                <p class="intro_text">
                    Our permanent representatives in Makkah and Medina deliver our promise of convenience and excellence. Designated staff is also on hand to welcome clients in KSA’s airports to facilitate seamless Hajj and Umrah procedures.
                </p>
			</div>
		</div>
		<!-- Footer -->


        <div class="intro bg-white">
			<div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="bg-light shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <h3 class="text-center">UMRAH SERVICES</h3>
                                <p>
                                    This visa is designed for Muslims who wish to pilgrimage to Mecca and other holy sites outside the traditional Hajj period. Al-Ihsan Tours & Travel Ltd offers private and group packages of monthly umrah services.
                                </p>
                                <div class="button book_button"><a href="umra-services.php">Umrah Services<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-light shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <h3 class="text-center">HAJJ SERVICES</h3>
                                <p>
                                    Hajj is an annual Islamic pilgrimage to the Muslim’s holiest city since Hajj is the fifth pillar of Islamic practice for every Muslim, with the physical and financial ability to undertake the journey to Makkah, Saudi Arabia.
                                </p>
                                <div class="button book_button"><a href="hajj-services.php">hAJJ Services<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
        </div>

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
											<button class="btn" id="<?php echo $product['id'] ?>">VIEW DETAILS</button>
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
		<?php
		include_once("includes/footer.php");
		?>

	</div>
</body>
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
</html>