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
    <link rel="shortcut icon" href="images/logo (2).png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="fontawesome/css/brands.css">
    <link rel="stylesheet" href="fontawesome/css/regular.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <title>Al-Ihsan Tours & Travel Ltd</title>
</head>
<body>
    <div class="spear-header-slider">
        <div class="image-sliders">
            <img src="images/book-flight.jpg" alt="">
        </div>
        <div class="black-overlay">
            <?php
                include("includes/navbar.php");
            ?>
        </div>
    </div>
    <div class="airline-ticketing-reservation">
        <div class="container py-4">
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="header-text">Book Now</h3>
                    <form action="booktrip-fun.php" method="post">
                        <div class="row">
                            <div class="col-sm-12">
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
                                    <input type="submit" name="booktrip" onclick="return validateTripForm()" value="Book Now" class="btn btn-secondary w-100">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <h3 class="header-text">Airline Ticketing & Reservation</h3>
                    <p>
                        Thank you in advance for choosing our services at AL-IHSAN Tours & Travel Ltd. Stating confidently that you are here at the pane of a professional journey and tour, eager to create a long-term business relationship with you.
                    </p>
                    <p>
                        We are the experts in air ticketing in the region. Whether you are fly­ing alone, with your family, or as a team, we offer the most afford­able and reliable air ticketing services for domestic and international flights. 
                    </p>
                    <p>
                        You can take advantage of our partnership with leading local and international airlines to book your flights at the least cost and guar­antee hassle-free arrival to your desired destination. Our friendly customer agents are always available to assist with inquiries regarding our services and the flight you’re booked. 
                    </p>
                </div>
            </div>
            <p>
                Our strategic partnerships with leading airlines allow us to source our clients’ best seats and prices. Our dedicated team of travel experts ensures that:
            </p>
            <ul>
                <li>
                    Check the available flights and airfare, and compare prices and deals.
                </li>

                <li>
                    Check the tickets that our clients require, whether a return, multiple or one-way tickets, and dates.
                </li>
        
                <li>
                    Offer three alternative routings - quotations for consideration. 
                </li>
        
                <li>
                    Book tickets and prepare itineraries based on the lowest fare and most convenient route. 
                </li>
        
                <li>
                    Follow precise ticketing deadlines and relevant information when creating reservations to avoid booking cancellations. 
                </li>
        
                <li>
                    Issue tickets for the clients with no errors and Ensure tickets are issued per entitlements prescribed in clients’ policies.
                </li>
        
                <li>
                    Provide clients with last-seat availability, advance seat assignments, and advance 
                    boarding passes on all airlines.
                </li>
        
                <li>
                    Contact the airline representative for further information if required.
                </li>
            </ul>
        </div>
    </div>
    <?php
        include("includes/footer.php");
    ?>
</body>
    <script src="assets/js/formValidations.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="fontawesome/js/all.js"></script>
    <script src="fontawesome/js/brands.js"></script>
    <script src="fontawesome/js/regular.js"></script>
</html>