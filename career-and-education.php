<?php
session_start();
$url = "hajj-services.php";
$_SESSION['redirect_url'] = $url;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Hajj Services</title>
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
				<div class="home_title">Services</div>
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
									<div class="col-lg-3 col-1680-4">
										<div class="offers_image_container">

											<div class="offers_image_background" style="background-image:url(images/hajj-services.jpg)"></div>

										</div>
									</div>
									<div class="col-lg-8">
										<div class="offers_content">
											<div class="offers_price">CAREERS & STUDIES CONSULTATIONS</div>
											<p class="offers_text" id="marked_list">
                                                Al-Ihsan Tours & Travel Ltd is one of the region's leading career and studies consultancy. Our mandate as set up makes careers and studies opportunities available for our youth and clients. Our Careers & studies consultancy aims to provide professional and solution-focused advice and effective representation to clients regarding their career counseling and study abroad.
											</p>
											<p class="offers_text" id="marked_list">
                                                Our Careers & studies Consultancy offers advice and services to those interested in migrating abroad for further education. We operate under a strict Code of Conduct that Al-Ihsan administers; therefore, you can be assured that the advice you receive is lawful.
                                                We currently run a portfolio of over 50 universities distributed across the globe. We provide many high scholars with career guidance and eventual linkage with Top Universities abroad.
											</p>
										</div>
									</div>
								</div>
                                <div class="continuations">
                                    <p class="offers_text">
                                        We provide our clients with transparent, up-to-date information on all available options to help them make the right decisions per their aspirations and budget. 
                                    </p>
                                    <p class="offers_text">
                                        We offer students a highly professional and cost-effective service process that enables a quick admission and smooth visa process. 
                                    </p>
                                    <p class="offers_text">
                                        It is a matter of a combination of professional services of our consultants and expertise, international mindset, and international experience of living, studying, and working abroad, but with common values and a shared vision for individual higher education – that enables us to understand your needs, “see” your opportunities, and precisely respond to your interests with successful results and outcomes.
                                    </p>
                                </div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

        <div class="offers">
            <div class="container">
                <div class="offers_price">Our services include</div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-sm-12 mb-4">
                        <div class="cards p-2">
                            <h3>IELTS training</h3>
                            <div class="row">
                                <div class="col-sm-5">
                                    <img src="images/IELTS-training.jpg" width="100%" style="height: auto;" alt="">
                                </div>
                                <div class="col-sm-7">
                                    <p class="offers_text">
                                        IELTS is an English language exam required by international candidates considering studying or working in a country where English is the primary language of communication. The UK, Australia, New Zealand, the USA, and Canada are the most popular countries where IELTS is accepted for university admissions.
                                    <!-- </p>
                                    <p class="offers_text"> -->
                                        IELTS is a specific English-language test accepted by more than 1,000 organizations across the globe, from education institutions to employers and government and professional bodies.
                                        IELTS assesses your English-language proficiency across four skills: listening, reading, writing, and speaking in academic, higher education, or practical, everyday setting.
                                    <!-- </p>
                                    <p class="offers_text"> -->
                                        Our coaching team has more than ten years of experience in quality IELT Academics, IELTS General, and IELTS Life Skills. Our supportive tutors will help you build confidence, develop your English language skills, and pass your exams.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-4">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="cards p-2">
                                    <h3>Career counseling</h3>
                                    <p class="offers_text">
                                        The true purpose of education is to equip learners with the skills to become productive when they finish school. Career guidance is one of the services given to learners to help them identify, explore, decide and apply their skills. 
                                    </p>
                                    <p class="offers_text">
                                        Poor career readiness skills among students and youth in communities have led to mismatched skills and fields of study, career misalignment, poor delivery of career information, and poor school-to-work transition programs. This situation is further affected by the fact that personnel appointed to offer the service are ill-equipped with career guidance competencies. Our team will guide you on what course will suit your passion.
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <img src="images/career-advise.jpg" width="100%" style="height: 100%;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-4">
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="images/life-skills-training.jpg" width="100%" style="height: 100%;" alt="">
                            </div>
                            <div class="col-sm-7">
                                <div class="cards p-2">
                                    <h3>Life Skills Training & Workshops</h3>
                                    <p class="offers_text">
                                        Before we begin everything, our team will organize and give you training, a workshop, and a complete orientation that will empower you personally and academically. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mb-6">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="cards p-2">
                                    <h3>University selection & Applications</h3>
                                    <p class="offers_text">
                                        Our team will let you know what country or university best fits your needs and budget. Our team will assist in your university application, submission, and follow-ups.
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="col-sm-5">
                                <img src="images/university.jpg" width="100%" style="height: 100%;" alt="">
                            </div> -->
                        </div>
                    </div>
                    <div class="col-sm-12 mb-6">
                        <div class="cards p-2">
                            <h3>Visa Processing</h3>
                            <p class="offers_text">
                                We are a Travel Management Agent and offer various visa assistance services to our clients. Our visa expert team will give full visa assistance, such as application, file completion, submissions, and follow-up.
                            </p>
                        </div>
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
	<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
	<script src="plugins/easing/easing.js"></script>
	<script src="plugins/parallax-js-master/parallax.min.js"></script>
	<script src="js/offers_custom.js"></script>

</body>

</html>