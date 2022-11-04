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
    <div class="spear-header-slider">
        <div class="image-sliders">
            <img src="images/background-1.jpg" alt="">
        </div>
        <div class="black-overlay">
            <?php
                include("includes/navbar.php");
            ?>
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
    <?php
        include("includes/footer.php");
    ?>
</body>
<script src="assets/js/validation.js"></script>
<script src="assets/js/index.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="fontawesome/js/all.js"></script>
<script src="fontawesome/js/brands.js"></script>
<script src="fontawesome/js/regular.js"></script>
</html>