<?php
    include("../config.php");
    include_once("database/Database.php");
    include_once("models/Bookings.php");
    include_once("models/Registration.php");
    $_SESSION['active']="dashboard";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="assets/images/logo (2).png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/brands.css">
    <link rel="stylesheet" href="assets/css/solid.css">
    <link rel="stylesheet" href="assets/css/regular.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>ALISHAN TOUR & TRAVEL LTD.</title>
</head>
<body>
    <section class="top-nav">
        <?php
            include("includes/topnav.php");
        ?>
    </section>
    <section class="fullbody-content">
        <section class="sidenav" id="sidenavbar">
            <?php
                include("includes/sidenav.php");
            ?>
        </section>
        <section class="body-content">
            <div class="container">
                <div class="dashboard-cards">
                    <div class="item-card bg-info text-light">
                        <div class="card-icon">
                            <i class="bi bi-person-fill"></i>
                        </div>
                        <div class="card-details">
                            <div class="names">Users</div>
                            <div class="numbers">34</div>
                        </div>
                    </div>
                    <div class="item-card bg-success text-light">
                        <div class="card-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <div class="card-details">
                            <div class="names">Admins</div>
                            <div class="numbers">34</div>
                        </div>
                    </div>
                     <div class="item-card bg-warning text-light">
                        <div class="card-icon">
                            <i class="fa-solid fa-bus"></i>
                        </div>
                        <div class="card-details">
                            <div class="names">Bookings</div>
                            <div class="numbers">34</div>
                        </div>
                    </div>
                    <div class="item-card bg-danger text-light">
                        <div class="card-icon">
                            <i class="fa-solid fa-road"></i>
                        </div>
                        <div class="card-details">
                            <div class="names">Destinations</div>
                            <div class="numbers">34</div>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">Latest Bookings</div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Full Name</th>
                                    <th>Location</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Persons</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $location = new Bookings($db);
                                    $locations = $location -> getBookings();
                                    if($locations){
                                        foreach($locations as $destination){
                                ?>
                                <tr>
                                    <td><?php echo $destination['id'] ?></td>
                                    <td><?php echo $destination['Fullname'] ?></td>
                                    <td><?php echo $destination['Location_id'] ?></td>
                                    <td><?php echo $destination['From_Date'] ?></td>
                                    <td><?php echo $destination['To_Date'] ?></td>
                                    <td><?php echo $destination['Travelers'] ?></td>
                                    <td><?php echo $destination['Status'] ?></td>
                                    <td>
                                        <?php if($destination['Status']  == "Pending"){
                                            echo "<a href=''><button class='btn btn-success'>Approve</button></a>";
                                            }else{
                                            echo "<a href=''><button class='btn btn-danger'>Cancel</button></a>";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }else{
                                        echo '<tr>
                                                <td colspan="7" class="text-center">No Bookings Available</td>
                                              </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">Latest Users</div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Fist Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Roles</th>
                                    <th>Date Added</th>
                                    <th>Last Modified</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $user = new Registration($db);
                                    $update = $user -> getAllUsers();
                                    if($update){
                                        foreach($update as $user){
                                ?>
                                <tr>
                                    <td><?php echo $user['id'] ?></td>
                                    <td><?php echo $user['Fname'] ?></td>
                                    <td><?php echo $user['Lname'] ?></td>
                                    <td><?php echo $user['Email'] ?></td>
                                    <td><?php echo $user['Phone'] ?></td>
                                    <td>
                                        <?php 
                                        if($user['Roles'] == "Admin"){ 
                                            echo "<button class='btn btn-success'>Admin</button>";
                                        }else{
                                          echo "<button class='btn btn-info text-light'>User</button>";
                                        }
                                        ?>
                                    </td>
                                    <td><?php echo $user['Date_added'] ?></td>
                                    <td><?php echo $user['Last_Modified'] ?></td>
                                    <td>
                                        <a href="users/update-destination.php?update=<?php echo $destination['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                        <a class="text-danger" href="users/delete-destination.php?delete=<?php echo $destination['id'] ?>"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }else{
                                        echo '<tr>
                                                <td colspan="5">No Location Available</td>
                                              </tr>';
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer">
            <?php
                include("includes/footer.php");
            ?>
        </section>
    </section>
</body>
<script src="assets/js/index.js"></script>
<script src="assets/js/main.d810cf0ae7f39f28f336.js"></script>
<script src="assets/js/all.js"></script>
<script src="assets/js/brands.js"></script>
<script src="assets/js/solid.js"></script>
<script src="assets/js/regular.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
</html>