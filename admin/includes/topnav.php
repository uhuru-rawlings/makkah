<div class="sticky-top-nav">
    <div class="action-buttons">
        <button class="btn shadow-none" onclick="toogleNavbar(this.id)" id="openhome"><i class="fa-solid fa-house"></i></button>
        <button class="btn shadow-none" onclick="toogleNavbar(this.id)" id="closehome"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="logo-sections">
        <a href="<?php echo BASE_URL."admin/index.php" ?>">
            <img src="<?php echo BASE_URL."admin/assets/images/logo-landscape.png" ?>" alt="">
        </a>
    </div>
    <div class="user-profile">
        <ul>
            <li><button onclick="closeSection('user-dropdown')" class="btn shadow-none"><i class="fa-solid fa-user"></i> Welcome: uhuru</button></li>
        </ul>
    </div>
    <div class="user-dropdown" id="user-dropdown" data-hiden>
        <ul>
            <li><a href="#"><i class="list-icons fa-solid fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="list-icons fa-solid fa-user"></i> Logout</a></li>
        </ul>
    </div>
</div>