<?php
session_start();
$url = "umra-services.php";
$_SESSION['redirect_url'] = $url;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Umrah Services</title>
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
                <div class="home_title">Umrah Services</div>
            </div>
        </div>

        <!-- Offers -->

        <div class="offers">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 temp_col"></div>

                    <div class="col-lg-12">
                        <!-- Offers Grid -->
                        <div class="offers_grid">

                            <!-- Offers Item -->

                            <div class="offers_item rating_4">
                                <div class="row">

                                    <div class="col-lg-4 col-1680-4">
                                        <div class="offers_image_container">

                                            <div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>

                                        </div>
                                    </div>


                                    <div class="col-lg-8">
                                        <div class="offers_content">
                                            <div class="offers_price">Umrah Services</div>
                                            <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                                <i></i>
                                            </div>
                                            <p class="offers_text" id="marked_list">
                                                This visa is designed for Muslims who wish to make a pilgrimage to Mecca and other holy sites outside of the traditional Hajj period. Al-Ihsan Tours & Travel Ltd offers private and group packages of monthly umrah services.

                                                We offer;
                                            <p>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Single visa (E-Visa)
                                            </p>
                                            <p>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Umrah Express (E-Visa)
                                            </p>
                                            <p>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Umrah packages (E-Visa)
                                            </p>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="offers">
            <div class="container">
                <div class="row" style="margin-top: 60px;">
                    <div class="col-sm-6">
                        <div class="bg-light shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <h3 class="offers_price" style="font-weight: 600; font-size: 25px;">Single Visa Processing</h3>
                                <br>
                                The Kingdom of Saudi Arabia has made it far easier for prospective Umrah applicants to get their travel visas in a short period. Therefore, we help facilitate the issuing of Umrah Visas to individuals going to Saudi Arabia based on applications submitted via our office. Then, one would have to wait for a few days till the visa processing was done and applications were approved to visit Saudi Arabia.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="bg-light shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <h3 class="offers_price" style="font-weight: 600; font-size: 25px;">Umrah Visa Express Service</h3>
                                <br>
                                Our pleasure to assist you in your trip to Umrah to Saudi Arabia by providing you with Umrah visas. An Umrah visa can be easily obtained as??an electronic visa permit??to Saudi Arabia. Electronic visa application for??a tourist visa is??far more accessible??than a regular Umrah visa. The application takes just??a few minutes??to complete, and the e-Visa??arrives at your??e-mail address??within??72 hours. However, most applications are approved in only??24 hours.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="bg-light shadow p-3 mb-5 bg-body rounded">
                            <div class="card-body">
                                <h3 class="offers_price" style="font-weight: 600; font-size: 25px;">Umrah Packages </h3>
                                <br>
                                <p>
                                    Al-Ihsan Tours & Travel Ltd provides a variety of umrah packages, including the umrah tour group package. Each Umrah package has certain??specifications??over one, and you can book the umrah packages suitable for you in terms of need and want.
                                </p>

                                <p>
                                    Each umrah package is designed keeping in view the??utmost hospitality??and comfort of the pilgrims. So, providing a variety of umrah packages gives??pilgrims??a??choice??so they can select the umrah package??according??to their need, want, and budget. We are on the ground to help you organize a lifetime worth remembering journey to Makkah and Madinah.
                                </p>

                                <p>
                                    A typical Umrah package generally consists of a 7 to 14-day trip through Makkah and Madinah. For a 7-day package, the itinerary includes a 4-night and 3-night stay in Makkah and Madinah. A 14-day Umrah package typically consists of 8 nights in Makkah and 4 Nights in Madinah; the minimum number of packages offered is four people and different kinds of umrah services.
                                </p>

                                <p>
                                    We aim to be your??Companion and Friend??on??your visit to the House of Allah. Our mission is to connect people to Makkah and Madinah. No matter how far away you might be, we will help you find the Umrah trip right for you!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="offers">
            <div class="container">

                <div class="offers_grid">
                    <!-- Offers Item -->
                    <div class="offers_item rating_4">

                        <div class="row">


                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">

                                    <div class="offers_image_background" style="background-image:url(images/offer_1.jpg)"></div>

                                </div>
                            </div>


                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">Umrah Services</div>
                                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>

                                    <p class="offers_text" id="marked_list">

                                    <div class="row">

                                        <div class="col-sm-6">
                                            Also, Al-Ihsan Tours & Travel Ltd offers different classes of umrah, such as;
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Economic class (Quad room, 4-people)
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Business class (Triple & Double room 3-2 -People) &
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                First-class (Single Room)
                                            </div>

                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Visit historical places in Madinah & Makkah
                                            </div>
                                            

                                            <div class="row py-2" id="hajjbooking">
                                                <div class="col-sm-6">
                                                    <p>Do you want us to help you attend hajj and umrah?</p>
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="hajj-booking.php">
                                                        <button class="btn">Request Now</button>
                                                    </a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-sm-6">
                                            Our Umrah Package includes
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Umrah visa
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Return flight
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Luxury accommodation
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Ground Transfers in Saudi Arabia (bus)
                                            </div>
                                            <div>
                                                <span class="list_check"><i class="fa-solid fa-check"></i></span>
                                                Ground team assistance through the journey
                                            </div>
                                            
                                        </div>

                                    </div>
                                    </p>
                                </div>
                            </div>


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