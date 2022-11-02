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
    <title>ALIHSAN TOUR & TRAVEL LTD</title>
</head>
<body>
    <?php 
        include_once("includes/navbar.php")
    ?>
    <div class="header-section" id="about-header">
        <div class="spear-header-section">
            <div class="image-slider-carousel">
                <img class="spear-background" src="images/slider1.jpg" alt="">
                <img class="spear-background" src="images/slider2.jpg" alt="">
                <img class="spear-background" src="images/slider3.jpg" alt="">
                <img class="spear-background" src="images/slider4.jpg" alt="">
            </div>
            <div class="welcome-text-section p-4">
                <h1>Contact Us.</h1>
            </div>
        </div>
    </div>
    <div class="contact-us-section" id="contact-us-section">
        <div class="container py-4">
            <h1 class="header-text">Talk To Us</h1>
            <div class="row">
                <div class="col-sm-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127642.11182818291!2d36.821051!3d-1.2843240000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5feca0500bd24aeb!2sJKUAT%20Towers!5e0!3m2!1sen!2sus!4v1666785399093!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-7">
                    <form action="contact-fun.php" autocomplete="off" method="post">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" oninput="removeErrors(this.id)" name="fullname" id="fullname" class="form-control" placeholder="Fullname">
                        </div>
                        <div class="form-group">
                            <label for="emailadress">Email</label>
                            <input type="email" oninput="removeErrors(this.id)" name="emailadress" id="emailadress" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone</label>
                            <input type="tel" oninput="removeErrors(this.id)" name="phonenumber" id="phonenumber" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea oninput="removeErrors(this.id)" name="message"  class="form-control" id="message" cols="30" rows="10">Message here...</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" onclick="return validateContact()" value="SEND MESSAGE" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-section py-4 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fa-solid fa-phone"></i><a href="tel:+254 727 885454"> +254 727 885454</a></li>
                        <li><i class="fa-solid fa-envelope"></i><a href="mailto:info@alIhsanumrah.com"> info@alIhsanumrah.com</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="destinations.html">Destination</a></li>
                        <li class="active"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4>Newsletter</h4>
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="SIGNUP" id="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="col-sm-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d127642.11182818291!2d36.821051!3d-1.2843240000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5feca0500bd24aeb!2sJKUAT%20Towers!5e0!3m2!1sen!2sus!4v1666785399093!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <p class="text-center">copyright &copy; all rights reserved.</p>
        </div>
    </div>
</body>
<script src="assets/js/validation.js"></script>
<script src="assets/js/index.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<script src="fontawesome/js/brands.js"></script>
<script src="fontawesome/js/regular.js"></script>
</html>