<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo (2).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
            <button onclick="toogleServicespage('book-a-trip',event.target)" id="button1" class="btn shadow-none active">Book A Trip</button>
            <button onclick="toogleServicespage('hotelbooking',event.target)" id="button2" class="btn shadow-none">Hotel Booking</button>
            <button onclick="toogleServicespage('hajjumrah',event.target)" id="button3" class="btn shadow-none">Hajj & Umrah</button>
            <button onclick="toogleServicespage('visaasistant',event.target)" id="button4" class="btn shadow-none">Visa Asistance</button>
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
                                        <option value="">From Location</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <label for="tolocation">To Location</label>
                                    <select oninput="removeErrors(this.id)" class="shadow-none form-control" name="tolocation" id="tolocation">
                                        <option value="">To Location</option>
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
                                    <option value="">Select Hotel</option>
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
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="appointmentdate">Date</label>
                                <input type="date" name="appointmentdate" id="appointmentdate" class="shadow-none form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input type="email" name="Email" id="Email" class="shadow-none form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="Phone">Phone</label>
                                <input type="tel" name="Phone" id="Phone" class="shadow-none form-control" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group" style="margin-top: 20px;">
                                <input type="submit" value="Book Appointment" class="btn btn-secondary">
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
                        <a href="">
                            <div class="flex-dets">
                                <div class="icons"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="name">Airline Booking</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="">
                            <div class="flex-dets">
                                <div class="icons"><i class="fa-solid fa-hotel"></i></div>
                                <div class="name">Hotel Booking</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="">
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
                    <h2 class="header-text">About Us.</h2>
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
            <div class="container">
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
    <section class="core-values">
        <div class="container">
            <div class="corevalues py-4" id="corevalues">
                <div class="corevalue-card">
                    <h3 class="header-text m-auto">Transparency</h3>
                    <p class="text-center">
                        Building trust in all business and personal dealings.
                    </p>
                </div>
                <div class="corevalue-card">
                    <h3 class="header-text m-auto">Quality</h3>
                    <p class="text-center">
                        We provide outstanding products and services that deliver premium value to our clients and end agents.
                    </p>
                </div>
                <div class="corevalue-card">
                    <h3 class="header-text m-auto">Respect</h3>
                    <p class="text-center">
                        For ourselves, our guests, our partners, and our team.
                    </p>
                </div>
                <div class="corevalue-card">
                    <h3 class="header-text m-auto">Integrity</h3>
                    <p class="text-center">
                        We uphold the highest standards of integrity in all our actions.
                    </p>
                </div>
            </div>
        </div>
    </section>
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
</html>