<nav>
    <ul>
        <li class="<?php if($_SESSION['active'] == "dashboard"){ echo "active"; } ?>">
            <a href="<?php echo BASE_URL."admin/index.php" ?>">
                <span><i class="fa-solid fa-gauge"></i> Dashboard</span>
            </a>
        </li>
        <li onclick="toogleDropDown(this.id)" id="userdropdown" class="<?php if($_SESSION['active'] == "users"){ echo "active"; } ?>">
            <a href="javascript:void(0)">
                <span><i class="nav-icon fa-solid fa-user"></i> Users</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="userdropdown">
                <li>
                    <a href="<?php echo BASE_URL."admin/users/add-users.php" ?>">
                        <span><i class="nav-icon fa-solid fa-plus-circle"></i> Add User</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL."admin/users/list-users.php" ?>">
                        <span><i class="nav-icon fa-solid fa-list"></i> List User</span>
                    </a>
                </li>
            </ul>
        </li>
        <li onclick="toogleDropDown(this.id)" id="destinationdropdown" class="<?php if($_SESSION['active'] == "destination"){ echo "active"; } ?>">
            <a href="javascript:void(0)">
                <span><i class="nav-icon fa-solid fa-road"></i> Destinations</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="destinationdropdown">
                <li>
                    <a href="<?php echo BASE_URL."admin/Destinations/add-destinations.php" ?>">
                        <span><i class="nav-icon fa-solid fa-plus-circle"></i> Add Destination</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL."admin/Destinations/list-destinations.php" ?>">
                        <span><i class="nav-icon fa-solid fa-list"></i> List Destination</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL."admin/Destinations/add-locations.php" ?>">
                        <span><i class="nav-icon fa-solid fa-plus-circle"></i> Add Locations</span>
                    </a>
                </li>
            </ul>
        </li>
        <li onclick="toogleDropDown(this.id)" id="bookingsdropdown" class="<?php if($_SESSION['active'] == "bookings"){ echo "active"; } ?>">
            <a href="javascript:void(0)">
                <span><i class="nav-icon fa-solid fa-list-check"></i> Bookings</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul class="bookingsdropdown">
                <li>
                    <a href="<?php echo BASE_URL."admin/bookings/list-bookings.php" ?>">
                        <span><i class="nav-icon fa-solid fa-plus-circle"></i> All Bookings</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="<?php if($_SESSION['active'] == "profile"){ echo "active"; } ?>">
            <a href="<?php echo BASE_URL."admin/profile/profile.php" ?>">
                <span><i class="nav-icon fa-solid fa-cogs"></i> Profile</span>
            </a>
        </li>
        <li>
            <a href="">
                <span><i class="fa-solid fa-right-from-bracket"></i> Logout</span>
            </a>
        </li>
    </ul>
</nav>