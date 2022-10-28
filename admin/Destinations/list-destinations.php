<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Destinations.php");
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
    <title>ALISHAN TOUR & TRAVEL LTD.</title>
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
                    <li class="breadcrumb-item active">List Destinations</li>
                </ol>
                <div class="card" style="margin-top: 15px;">
                    <div class="card-header">
                        List Location
                    </div>
                    <div class="card-body">
                            <?php
                                if(isset($_GET['delete-success'])){
                                    echo "<div class='alert alert-success'>".$_GET['delete-success']."</div>";
                                }else if(isset($_GET['delete-error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['delete-error']."</div>";
                                }
                            ?>
                        <table class="table table-hover table-boddered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Location Name</th>
                                    <th>Price Perday</th>
                                    <th>Days Opened</th>
                                    <th>Date added</th>
                                    <th>Last Modified</th>
                                    <th><i class="fa-solid fa-trash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $location = new Destinations($db);
                                    $locations = $location -> getDestinations();
                                    if($locations){
                                        foreach($locations as $destination){
                                ?>
                                <tr>
                                    <td><?php echo $destination['id'] ?></td>
                                    <td><?php echo $destination['Location_Name'] ?></td>
                                    <td><?php echo $destination['Price_Perday'] ?></td>
                                    <td><?php echo $destination['Days_Opened'] ?></td>
                                    <td><?php echo $destination['Date_added'] ?></td>
                                    <td><?php echo $destination['Last_Modified'] ?></td>
                                    <td>
                                        <a href="update-destination.php?update=<?php echo $destination['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                        <a class="text-danger" href="delete-destination.php?delete=<?php echo $destination['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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