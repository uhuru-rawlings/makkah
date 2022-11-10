<?php
    include_once("admin/database/Database.php");
    include_once("admin/models/Airline.php");
    include("admin/models/Destinations.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo (2).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/regular.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ALIHSAN TOUR & TRAVEL LTD</title>
</head>
<body>
    <div class="spear-header-slider">
        <div class="image-sliders">
            <!-- <div class="owl-carousel header-carousel position-absolute">
                <div class="owl-carousel-item position-relative">
                    <img src="images/background-1.jpg" class="img-fluid" alt="">
                </div>
                <div class="owl-carousel-item position-relative">
                    <img src="images/background-2.jpg" class="img-fluid" alt="">
                </div>
                <div class="owl-carousel-item position-relative">
                    <img src="images/background-3.jpg" class="img-fluid" alt="">
                </div>
            </div> -->
            <img src="images/background-1.jpg" id="image-slider" alt="">
        </div>
        <div class="black-overlay">
            <?php
                include("includes/navbar.php");
            ?>
        </div>
    </div>
    <section class="booking-info-section">
        <div class="top-select-section">
            <button onclick="toogleServicespage('book-a-trip',event.target)" id="button1" class="btn shadow-none active"><i class="fa-solid fa-plane"></i> Book A Trip</button>
            <button onclick="toogleServicespage('hotelbooking',event.target)" id="button2" class="btn shadow-none"><i class="fa-solid fa-hotel"></i> Hotel Booking</button>
            <button onclick="toogleServicespage('hajjumrah',event.target)" id="button3" class="btn shadow-none"><i class="fa-solid fa-mosque"></i> Hajj & Umrah</button>
            <button onclick="toogleServicespage('visaasistant',event.target)" id="button4" class="btn shadow-none"><i class="fa-solid fa-credit-card"></i> Visa Asistance</button>
        </div>
        <div class="bookings-cards py-4" id="book-a-trip">
            <div class="container">
                <form action="booktrip-fun.php" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="row">
                                <div class="form-group col">
                                    <label for="fromlocation">From Location</label>
                                    <select oninput="removeErrors(this.id)" class="shadow-none form-control" name="fromlocation" id="fromlocation">
                                        <?php
                                            $conn = new Database();
                                            $db = $conn -> connection();
                                            $locations = new Airline($db);
                                            $location  = $locations -> getDestinations();
                                            foreach($location as $location){
                                                echo "<option value='{$location['From_location']}'>".$location['From_location']."</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="tolocation">To Location</label>
                                    <select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tolocation" id="tolocation">
                                        <?php
                                            $conn = new Database();
                                            $db = $conn -> connection();
                                            $locations = new Airline($db);
                                            $location  = $locations -> getDestinations();
                                            foreach($location as $location){
                                                echo "<option value='{$location['To_location']}'>".$location['To_location']."</option>";
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
        </div>
        <div class="bookings-cards py-4" id="hotelbooking">
            <div class="container">
                <form action="bookhotel-fun.php" method="post">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="hetels">Hotels</label>
                                <select name="hetels" id="hetels" class="shadow-none form-control">
                                        <?php
                                            $conn = new Database();
                                            $db = $conn -> connection();
                                            $hotels = new Destinations($db);
                                            $location  = $hotels -> getDestinations();
                                            foreach($location as $location){
                                                echo "<option value='{$location['Location_Name']}'>".$location['Location_Name']."</option>";
                                            }
                                        ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numbers">Number of People</label>
                                <input type="number" name="numbers" id="numbers" class="shadow-none form-control" value="1" max="3" min="1">
                            </div>
                        </div>
                       <div class="col-sm-4">
                            <div class="form-group">
                                <label for="fromdate">From Date</label>
                                <input type="date" name="fromdate" id="fromdate" class="shadow-none form-control">
                            </div>
                            <div class="form-group">
                                <label for="todate">To Date</label>
                                <input type="date" name="todate" id="todate" class="shadow-none form-control">
                            </div>
                       </div>
                       <div class="col-sm-4">
                        <div class="form-group" style="margin-top: 20px;">
                            <input type="submit" value="Book Now" name="bookhotel" class="btn btn-secondary" id="book">
                        </div>
                       </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="bookings-cards py-4" id="hajjumrah">
            <div class="container">
                <p>
                    These are some of the most important religious pilgrimages for the Muslim fraternity. As fellow Muslims, we are obliged by our faith to facilitate the travel of the faithful to the Holy sites. To facilitate this, we encourage our customers to start making preparations early enough to avoid the last-minute rush.
                </p>
                <p>
                    We thus allow our customers to come over for early visa application, besides pre-booking their return flights and accommodation when demand for such services is still low and charges affordable. We are always at hand to assist that intent on attending the Hajj and Umrah with all the required preparations, including visa application, flight booking, and planning for ac­commodation.
                </p>
                <div class="row">
                    <div class="col">
                        <a href="hajj-services.php" ><button class="btn btn-secondary">Hajj Services</button></a>
                    </div>
                    <div class="col">
                        <a href="umra-services.php" ><button class="btn btn-secondary">Umrah Services</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bookings-cards py-4" id="visaasistant">
            <div class="container">
                <p>
                    We take the task of visa application from out clicents by doing that ourselves. You book an appointment with us, we will organise and take the right procedures on your behalf which will be alittle faster. Do you want to book a meeting ?
                </p>
                <form action="bookappointments.php" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="appointmentdate">Date</label>
                                <input type="date" name="appointmentdate" id="appointmentdate" class="shadow-none form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" style="margin-top: 20px;">
                                <input type="submit" value="Book Appointment" name="save" class="btn btn-secondary">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="full-services-details py-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="flex-dets">
                                <div class="icons"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="name">Airline Booking</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="flex-dets">
                                <div class="icons"><i class="fa-solid fa-hotel"></i></div>
                                <div class="name">Hotel Booking</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="#">
                            <div class="flex-dets">
                                <div class="icons"><i class="fa-solid fa-car"></i></div>
                                <div class="name">Car Renting</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus-section">
        <div class="container py-3">
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/background-1.jpg" width="100%" height="100%" alt="alishan">
                </div>
                <div class="col-sm-8">
                    <h3 class="header-text">About Us.</h3>
                    <p>
                        Al-Ihsan Tours & Travel Ltd started operations in 2015 in Amsterdam, Netherlands. The company is registered and licensed as a full-fledged travel and tourism management agency to operate inbound, outbound, and airline ticket reservations for domestic and international travelers.
                    </p>
                    <p>
                        AL-IHSAN Tours & Travel Ltd is the market leader in low-cost domestic and international air travel. Since our inception, we have distinguishably provided end-to-end air transportation solutions for our clients flying to domestic and international destinations. We have also established a solid status for reliability and world-class customer service.
                    </p>
                    <p>
                        AL-IHSAN also provides Hajj and Umrah services, skilled travel advisers, and a customer support team with almost ten (10) years of combined expertise, making us one of the top firms providing Hajj and Umrah packages smoothly as possible.
                    </p>
                </div>
            </div>
            <h3 class="header-text">Our Objectives</h3>
            <div class="row py-4">
                <div class="col-sm-6" id="our-objectives">
                The main business scope at Al Ihsan Tours & Travel Ltd is Air ticketing, Regional, local, and international, Hajj and Umrah, and Hotel Booking. Regarding marketing strategy, Al Ihsan Tours & Travel Ltd can improve and develop the tourism sector locally and internationally. 

                We aim to develop our business in the travel industry in line with international rules and policy. Also, the potential to expand its business as the company is often focused on engaging with overseas travel agencies, especially during the holiday season. 
                </div>
                <div class="col-sm-6">
                    <ul>
                        <li>
                            Provide a high standard of services for individuals seeking relaxing, comfortable, and memorable experiences in the hospitality and tourism industry.
                        </li>
                        <li>
                            Produce expeditions and memories that would satisfy every single customer.
                        </li>
                        <li>
                            Customer-focused organization; we listen to our customers by providing them superior service and exceeding their expectations. Thus, earning their trust, respect, and confidence.
                        </li>
                        <li>
                            We are a unified team that believes in collaboration, professionalism, investing in our employees, technology, quality, continuous learning, and improvement.
                        </li>
                        <li>
                            Value our role in the community, where we recognize the responsibility and opportunity to contribute to society and make a meaningful difference.
                        </li>
                        <li>
                            Value our role in the community, where we Participate in local and regional community service by providing general lectures, consultation, and training programs.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="previous-travel-routes">
        <div class="container py-3">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="header-text">Trips From Kenya to Saudi</h3>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="header-text">Trips From Kenya to Saudi</h3>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                    <div class="tip-card p-2">
                        <div class="trip-details">
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="text-bold">Nairobi</div>
                                <div class="text-bold">Nairobi</div>
                            </div>
                            <div class="col-sm-6" style="text-align: right;">
                                <div class="text-center">Round Trips</div>
                                <div class="text-center text-bold">350</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="mission-vision">
        <div class="mission-overlay">
            <div class="container py-4">
                <h3 class="header-text m-auto">Mission & Vision</h3>
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="header-text">Our Vision</h4>
                            <ul>
                                <li>
                                    Travel leading Travel Agency in the travel industry, providing our customers with the best and most effective services.
                                </li>
                                <li>
                                    To be one of the well–known leading Hajj and Umrah agencies in Kenya. 
                                </li>
                                <li>
                                    Provide new cultural exchange in unique ways by creating a multi-tourism, Hajj, and Umrah business.
                                </li>
                            </ul>
                    </div>
                    <div class="col-sm-6">
                        <h4 class="header-text">Our Mission</h4>
                            <ul>
                                <li>
                                    We seek service excellence and will provide quality service at a cost that will enable us to remain competitive. 
                                </li>
                                <li>
                                    Expand our relationship with airlines, charter flight operators, hotels, tour operators, and travel agents within East Africa and overseas.
                                </li>
                                <li>
                                    To Deliver overall satisfaction to our clients while fulfilling their requirements and needs with assistance from our experienced and professional team with total commitment to the satisfaction of our client
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="svg-background">
        <section class="core-values">
            <div class="container py-4">
                <div class="row">
                    <div class="col-sm-3">
                        <h3 class="header-text">Our Core Values</h3>
                    </div>
                    <div class="col-sm-9">
                        <div class="row">
                            <div class="col-sm-3">
                                <h4 class="header-text">Transparency</h4>
                                <p>
                                    <q>Building trust in all business and personal dealings.</a>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="header-text">Quality</h4>
                                <p>
                                    <q>We provide outstanding products and services that deliver premium value to our clients and end agents.</a>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="header-text">Respect</h4>
                                <p>
                                    <q>For ourselves, our guests, our partners, and our team.</a>
                                </p>
                            </div>
                            <div class="col-sm-3">
                                <h4 class="header-text">Integrity</h4>
                                <p>
                                    <q>We uphold the highest standards of integrity in all our actions.</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="corevalues py-4" id="corevalues">
                    <div class="corevalue-card">
                        <h3 class="header-text m-auto">Transparency</h3>
                        <p class="text-center">
                            <q>Building trust in all business and personal dealings.</a>
                        </p>
                    </div>
                    <div class="corevalue-card">
                        <h3 class="header-text m-auto">Quality</h3>
                        <p class="text-center">
                            <q>We provide outstanding products and services that deliver premium value to our clients and end agents.</a>
                        </p>
                    </div>
                    <div class="corevalue-card">
                        <h3 class="header-text m-auto">Respect</h3>
                        <p class="text-center">
                            <q>For ourselves, our guests, our partners, and our team.</a>
                        </p>
                    </div>
                    <div class="corevalue-card">
                        <h3 class="header-text m-auto">Integrity</h3>
                        <p class="text-center">
                            <q>We uphold the highest standards of integrity in all our actions.</a>
                        </p>
                    </div>
                </div> -->
            </div>
        </section>
        <section class="testimonials-section">
            <div class="container">
                <div class="row py-4">
                    <div class="col-sm-4">
                        <h3 class="header-text">Testimonials</h3>
                        <h4>What does our customer says about us.</h4>
                    </div>
                    <div class="col-sm-8" id="testimonials-cards">
                        <div class="customer-cards card">
                            <div class="top-sections">
                                <img src="images/testimonials.jpg" alt="">
                                <p>Anthony Haggins</p>
                            </div>
                            <div class="botom-sections">
                                <q>
                                    I have used some of their services before and they offer the best services
                                </q>
                            </div>
                        </div>
                        <div class="customer-cards card">
                            <div class="top-sections">
                                <img src="images/testimonials.jpg" alt="">
                                <p>Khalid Ball</p>
                            </div>
                            <div class="botom-sections">
                                <q>
                                    I have used some of their services before and they offer the best services
                                </q>
                            </div>
                        </div>
                        <div class="customer-cards card">
                            <div class="top-sections">
                                <img src="images/testimonials.jpg" alt="">
                                <p>Anthony Haggins</p>
                            </div>
                            <div class="botom-sections">
                                <q>
                                    I have used some of their services before and they offer the best services
                                </q>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php
        include("includes/footer.php");
    ?>
</body>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/formValidations.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="fontawesome/js/brands.js"></script>
    <script src="fontawesome/js/regular.js"></script>
    <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</html>