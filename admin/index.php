<?php
    include("../config.php");
    include_once("database/Database.php");
    include_once("models/Bookings.php");
    include_once("models/Registration.php");
    include_once("models/Totals.php");
    include_once("models/Booktrip.php");
    $_SESSION['active']="dashboard";
    if(isset($_COOKIE['adminuser'])){

    }else{
        header("Location: auth/index.php");
    }
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
    <title>Al-Ihsan Tours & Travel Ltd</title>
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
                        <div class="card-details text-center">
                            <div class="names">Users</div>
                            <div class="numbers">
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $rows = new Totals($db);
                                    $rows -> table = "Registration";
                                    $row = $rows -> getTotals();
                                    echo $row;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-card bg-success text-light">
                        <div class="card-icon">
                            <i class="bi bi-person-check-fill"></i>
                        </div>
                        <div class="card-details text-center">
                            <div class="names">Appointments</div>
                            <div class="numbers">
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $rows = new Totals($db);
                                    $rows -> table = "Registration";
                                    $row = $rows -> getTotals();
                                    echo $row;
                                ?>
                            </div>
                        </div>
                    </div>
                     <div class="item-card bg-warning text-light">
                        <div class="card-icon">
                            <i class="fa-solid fa-hotel"></i>
                        </div>
                        <div class="card-details text-center">
                            <div class="names">Hotels</div>
                            <div class="numbers">
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $rows = new Totals($db);
                                    $rows -> table = "Travel_Destinations";
                                    $row = $rows -> getTotals();
                                    echo $row;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="item-card bg-danger text-light">
                        <div class="card-icon">
                            <i class="fa-solid fa-plane"></i>
                        </div>
                        <div class="card-details text-center">
                            <div class="names">Airlines</div>
                            <div class="numbers">
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $rows = new Totals($db);
                                    $rows -> table = "Airline";
                                    $row = $rows -> getTotals();
                                    echo $row;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">Latest Bookings</div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Hotel_name</th>
                                    <th>From_Date</th>
                                    <th>To_Date</th>
                                    <th>People</th>
                                    <th>Status</th>
                                    <th>Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn     = new Database();
                                    $db       = $conn -> connection();
                                    $bookings = new TripBookings($db);
                                    $book     = $bookings -> getHotelBooking(); 
                                    if($book){
                                        foreach($book as $book){
                                ?>
                                <tr>
                                    <td><?php echo $book['id']?></td>
                                    <td><?php echo $book['Fname']." ".$book['Lname']?></td>
                                    <td><?php echo "<a href='mailto:{$book['Email']}'>{$book['Email']}</a>"?></td>
                                    <td><?php echo "<a href='tel:{$book['Phone']}'>{$book['Phone']}</a>"?></td>
                                    <td><?php echo $book['Hotel_name']?></td>
                                    <td><?php echo $book['From_Date']?></td>
                                    <td><?php echo $book['To_Date']?></td>
                                    <td><?php echo $book['People']?></td>
                                    <td>
                                        <?php
                                            if($book['status'] == "Assigned"){
                                                echo '<button class="btn btn-success">Assigned</button>';
                                            }else{
                                                echo '<a href=""><button class="btn btn-danger">Pending</button></a>';
                                            }
                                        ?>
                                    </td>
                                    <td><?php echo $book['Date_added']?></td>
                                </tr>
                                <?php
                                        }
                                    }else{
                                        echo "<option colspan='8'>No data found</option>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">Latest Users</div>
                    <div class="card-body">
                        <table class="table table-hover">
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