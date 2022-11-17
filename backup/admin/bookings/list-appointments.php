<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Booktrip.php");
    $_SESSION['active']="bookings";
    if(isset($_COOKIE['adminuser'])){

    }else{
        header("Location: ../auth/index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../assets/images/logo (2).png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/brands.css">
    <link rel="stylesheet" href="../assets/css/solid.css">
    <link rel="stylesheet" href="../assets/css/regular.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Al-Ihsan Tours & Travel Ltd</title>
</head>
<body>
    <section class="top-nav">
        <?php
            include("../includes/topnav.php");
        ?>
    </section>
    <section class="fullbody-content">
        <section class="sidenav" id="sidenavbar">
            <?php
                include("../includes/sidenav.php");
            ?>
        </section>
        <section class="body-content">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo BASE_URL."admin/index.php" ?>">Home</a></li>
                    <li class="breadcrumb-item active">Appointments</li>
                </ol>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">
                        Appointments
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['success'])){
                                echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                            }else if(isset($_GET['error'])){
                                echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                            }
                        ?>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Date Added</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn     = new Database();
                                    $db       = $conn -> connection();
                                    $bookings = new TripBookings($db);
                                    $book     = $bookings -> getAppointments(); 
                                    if($book){
                                        foreach($book as $book){
                                ?>
                                <tr>
                                    <td><?php echo $book['id']?></td>
                                    <td><?php echo $book['Fname']." ".$book['Lname']?></td>
                                    <td><?php echo "<a href='mailto:{$book['Email']}'>{$book['Email']}</a>"?></td>
                                    <td><?php echo "<a href='tel:{$book['Phone']}'>{$book['Phone']}</a>"?></td>
                                    <td><?php echo $book['Appointment_date']?></td>
                                    <td>
                                        <?php
                                            if($book['status'] == "Assigned"){
                                                echo '<button class="btn btn-success">Assigned</button>';
                                            }else{
                                                echo "<a href='updated-status.php?id={$book['id']}&target=Appointments'><button class='btn btn-danger'>Pending</button></a>";
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
            </div>
        </section>
        <section class="footer">
            <?php
                include("../includes/footer.php");
            ?>
        </section>
    </section>
</body>
<script src="../assets/js/index.js"></script>
<script src="../assets/js/main.d810cf0ae7f39f28f336.js"></script>
<script src="../assets/js/all.js"></script>
<script src="../assets/js/brands.js"></script>
<script src="../assets/js/solid.js"></script>
<script src="../assets/js/regular.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
</html>