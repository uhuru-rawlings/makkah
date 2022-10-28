<nav>
    <ul>
        <li>
            <a href="<?php echo BASE_URL."admin/index.php" ?>">
                <span><i class="nav-icon fa-solid fa-guarg"></i> Dashboard</span>
            </a>
        </li>
        <li>
            <a href="">
                <span><i class="nav-icon fa-solid fa-user"></i> Users</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul>
                <li>
                    <a href="<?php echo BASE_URL."admin/users/add-users.php" ?>">
                        <span><i class="nav-icon fa-solid fa-plus-circle"></i> Add User</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">
                <span><i class="nav-icon fa-solid fa-road"></i> Destinations</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
            <ul>
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
        <li>
            <a href="">
                <span><i class="nav-icon fa-solid fa-list-check"></i> Bookings</span> <i class="fa-solid fa-chevron-down"></i>
            </a>
        </li>
        <li>
            <a href="<?php echo BASE_URL."admin/profile/profile.php" ?>">
                <span><i class="nav-icon fa-solid fa-cogs"></i> Profile</span>
            </a>
        </li>
        <li>
            <a href="">
                <span><i class="nav-icon fa-solid fa-guarge"></i> Logout</span>
            </a>
        </li>
    </ul>
</nav>