<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Brahmi&display=swap" rel="stylesheet">
<nav class="navbar">
    <div class="manu-left">
        <div class="page-logo">
            <a href="index.php"><img src="images/logo-landscape.png" width="100%" height="100%" alt=""></a>
        </div>
        <div class="menu-section">
            <button id="menu-button" onclick="displayElements('menu-list')" class="btn shadow-none">MENU <i class="fa-solid fa-bars"></i></button>
            <div class="menu-list" id="menu-list">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About</a></li>
                    <li id="dropdown">
                        <a href="javascript:void(0)">Services</a>
                        <ul id="main-dropdown">
                            <li><a href="book-flight.php">Booking Flight</a></li>
                            <li><a href="hajandumrah.php">Hajj & Umrah Services</a></li>
                            <li><a href="hotel-bookings.php">Hotel Bookings</a></li>
                            <li><a href="">Visa Assistance</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sign-in">
        <a href="login.php"><button class="btn shadow-none">Login / Signup</button></a>
    </div>
</nav>