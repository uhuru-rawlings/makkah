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
                    <li><a href="">Bookings</a></li>
                    <li id="dropdown">
                        <a href="javascript:void(0)">Services</a>
                        <ul id="main-dropdown">
                            <li><a href="book-flight.php">Booking Flight</a></li>
                            <li><a href="hajandumrah.php">Hajj & Umrah Services</a></li>
                            <li><a href="">Hotel Bookings</a></li>
                            <li><a href="">Visa Assistance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sign-in">
        <a href="contact.php"><button class="btn shadow-none">Contact Us</button></a>
    </div>
</nav>