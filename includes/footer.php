<footer class="page-footer">
    <a href="javascript:void(0)" onclick="scrollToTop()" class="scroll-top">
        <div class="scroll-to-top">
            <i class="fa-solid fa-chevron-up"></i>
        </div>
    </a>
    <div class="container py-4">
        <div class="news-letter">
            <div class="footer-services">
                <div><a href="book-flight.php">Airline Ticketing & Reservation</a></div>
                <div><a href="#">Hajj & Umrah Services</a></div>
                <div><a href="#">Hotel Booking</a></div>
                <div><a href="#">Visa Assistance</a></div>
                <div><a href="#">Car Rental</a></div>
                <div><a href="#">Leisure and Holidays services</a></div>
                <div><a href="#">Job replacement</a></div>
                <div><a href="#">Training and consultations</a></div>
                <div><a href="#">Airport transfer services </a></div>
                <div><a href="#">VIP Services (door-to-door)</a></div>
            </div>
            <p class="text-center">
                Subscribe to our newsletter to receive the latest special offers and news on
            </p>
            <form action="newsletter.php" method="post">
                <div class="form-group">
                    <input type="email" name="useremail" id="useremail" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="newsletter" value="Sign Up" class="btn btn-secondary">
                </div>
            </form>
        </div>
        <div class="social-links">
            <a href=""><div class="social-icons"><i class="fa-brands fa-facebook"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-instagram"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-linkedin"></i></div></a>
            <a href=""><div class="social-icons"><i class="fa-brands fa-twitter"></i></div></a>
        </div>
        <div class="copyright-section">
            <small class="text-center">copyright &copy; all rights reserved | pwered by <a href="">Fourtech</a></small>
        </div>
    </div>
</footer>
<?php
    if(!isset($_COOKIE['adminuser'])){
        echo "<script>
                var url = window.location.href;
                var url_array = url.split('/');
                var new_ulr_array = url.split(url_array[url_array.length - 1])
                window.location.href = new_ulr_array[0]+'login.php';
            </script>";
    }
?>

<script>
    const scrollToTop = () =>{
        scrollTo(0,0);
    }
</script>