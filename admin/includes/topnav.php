<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">

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
            <li><button onclick="closeSection('user-dropdown')" class="btn shadow-none"><i class="fa-solid fa-user"></i> Welcome: <?php echo $_COOKIE['adminuser'] ?></button></li>
        </ul>
    </div>
    <div class="user-dropdown" id="user-dropdown" data-hiden>
        <ul>
            <li>
                <a href="profile/profile.php"><span><i class="fa-solid fa-user"></i> Profile</span></a>
            </li>
            <li>
                <a href="logout.php"><span><i class="fa-solid fa-right-from-bracket"></i> Logout</span></a>
            </li>
        </ul>
    </div>
</div>