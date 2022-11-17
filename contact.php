<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
			<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/contact-section.jpg"></div>
			<div class="home_content">
				<div class="home_title">contact us</div>
			</div>
		</div>

		<!-- Contact -->

		<div class="contact_form_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">

						<!-- About Info -->

						<div class="about_content">
							<div class="logo_container about_logo">
								<div><a href="index"><img src="images/logo-landscape.png" width="50%" height="auto" alt=""></a></div>
							</div>
							<p class="about_text">Al-Ihsan also provides Hajj and Umrah services, skilled travel advisers, and a customer support team with almost ten (10) years of combined expertise, making us one of the top firms providing Hajj and Umrah packages smoothly as possible.</p>
							<ul class="about_social_list">
								<li class="about_social_item "><a href="https://www.facebook.com/profile.php?id=100086970790856"><i class="about_social_item_vertical fa-brands fa-facebook fa-2x"></i></a></li>
								<li class="about_social_item "><a href="#"><i class="about_social_item_vertical fa-brands fa-whatsapp fa-2x"></i></a></li>
							</ul>
						</div>

						<div class="about_info">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div>
									</div>
									<div class="contact_info_text">1st floor, Istanbul Shopping Mall, Captain Mungai St, Nairobi</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div>
									</div>
									<div class="contact_info_text"><a href="tel:+254 727 885454">+254 727 885454</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div>
										<div class="contact_info_icon"><img src="images/message.svg" alt=""></div>
									</div>
									<div class="contact_info_text"><a href="mailto:info@al-ihsanumrah.com" target="_top">info@al-ihsanumrah.com</a></div>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-lg-6">
						<!-- Contact Form -->
						<div class="contact_form_container">
							<div class="contact_title text-center">get in touch</div>
							<form action="contact-fun.php" autocomplete="off" method="post">
								<div class="row">
									<div class="form-group col-sm-6">
										<label for="fullname">Fullname</label>
										<input type="text" oninput="removeErrors(this.id)" name="fullname" id="fullname" class="form-control" placeholder="Fullname">
									</div>
									<div class="form-group col-sm-6">
										<label for="emailadress">Email</label>
										<input type="email" oninput="removeErrors(this.id)" name="emailadress" id="emailadress" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="phonenumber">Phone</label>
									<input type="tel" oninput="removeErrors(this.id)" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone">
								</div>
								<div class="form-group">
									<label for="message">Message</label>
									<textarea oninput="removeErrors(this.id)" name="message" class="form-control" id="message" cols="30" rows="10">Message here...</textarea>
								</div>
								<div class="form-group">
									<button type="submit" id="form_submit_button" class="form_submit_button button trans_200" onclick="return validateContact()">send message<span></span><span></span><span></span></button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- About -->

		<!-- Google Map -->

		<div class="travelix_map">
			<iframe width="100%" height="600" id="gmap_canvas" src="https://maps.google.com/maps?q=Instabull%20shopping%20mall&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					
		</div>

		<!-- Footer -->

		<?php
		include_once("includes/footer.php");
		?>

	</div>

	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="styles/bootstrap4/popper.js"></script>
	<script src="styles/bootstrap4/bootstrap.min.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
	<script src="js/contact_custom.js"></script>

</body>

</html>