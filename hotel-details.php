<?php
	include_once("admin/database/Database.php");
	include_once("admin/models/Destinations.php");
?>
<!DOCTYPE html>
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
			<div class="home_title">Hotel Booking</div>
		</div>
	</div>

	<!-- Offers -->

	<div class="offers">
		<!-- Offers -->
		<div class="container" id="hotel_cards">
			<div class="row">
                <?php
                    $conn = new Database();
                    $db   = $conn -> connection();
                    $products = new Destinations($db);
                    $products -> id = $_GET['hotel_id'];
                    $product = $products -> getSingleDestination();
                    if($product){   
                ?>
                <div class="col-sm-12">
					<div class="hotel_name">
						<h2 class="intro_title text-left gpadding"><?php echo $product['Location_Name'] ?></h2>	
					</div>
                    <div class="card_image" id="multiple_images">
						<?php
							$image = explode(",",$product['Location_images']);
							// for($i = 1; $i < count($image); $i++){
						?>
                        	<img src='<?php echo "uploads/{$image[1]}"?>' alt="" class="hotel_image">
						<?php
							// }
						?>
                    </div>
                    <div class="hotel_details">
						<div class="hotel_name"><?php echo $product['place_description'] ?></div>
						<h4>Cost</h4>
                        <div class="price">Kshs. <?php echo $product['Price_Perday'] ?> / Day</div>
                    </div>
					<div class="col-sm-6 py-2" style="padding-left: 0 !important;">
						<p><b>You can send your enquiry via the form below.</b></p>
						<form action="bookhotel-fun.php" method="post" class="w-100">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group" style="display: none;">
										<label for="hetels">Hotel Name</label>
										<input type="text" name="hetels" id="hotels" value="<?php echo $_GET['hotel_id'] ?>" class="form-control" placeholder="Hotel name">
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
										<input type="submit" value="Book Now" onclick="return validateHotelBooking()" name="bookhotel" class="btn btn-primary btn btn-secondary" id="book">
									</div>
								</div>
							</div>
						</form>
					</div>
                </div>
                <?php
                        // }
                    }else{
                        echo "<div class='alert alert-danger'>No hotels available at the moment.</div>";
                    }
                ?>
            </div>
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