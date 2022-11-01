<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Locations.php");
    $_SESSION['active']="destination";
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
                    <li class="breadcrumb-item active">Add Locations</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        Add Locations
                    </div>
                    <div class="card-body">
                        <form action="add-location-fun.php" method="post">
                            <?php
                                if(isset($_GET['success'])){
                                    echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                                }else if(isset($_GET['error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                                }
                            ?>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Location Name</label>
                                    <input type="text" value="<?php if(isset($_GET['edit'])){echo $_GET['edit'];} ?>" name="location-name" id="location-name" class="form-control" placeholder="Location Name">
                                </div>
                                <?php
                                    if(isset($_GET['edit'])){
                                ?>
                                    <div class="form-group col-sm-6" style="display: none;">
                                        <label for="location-name">Location Id</label>
                                        <input type="text" value="<?php echo $_GET['id'] ?>" name="location-id" id="location-id" class="form-control" placeholder="Location Name">
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Save Destination" class="btn btn-primary" id="save">
                            </div>
                        </form>
                    </div>
                </div>
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
                        <table class="table table-hover table-bordered">
                            <thead class="bg-primary text-light">
                                <tr>
                                    <th>Id</th>
                                    <th>Location Name</th>
                                    <th>Last Modified</th>
                                    <th>Date Added</th>
                                    <th><i class="fa-solid fa-trash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $location = new Locations($db);
                                    $locations = $location -> getLocations();
                                    if($locations){
                                        foreach($locations as $destination){
                                ?>
                                <tr>
                                    <td><?php echo $destination['id'] ?></td>
                                    <td><?php echo $destination['Location_Name'] ?></td>
                                    <td><?php echo $destination['Last_modified'] ?></td>
                                    <td><?php echo $destination['Date_added'] ?></td>
                                    <td>
                                        <a href="?edit=<?php echo $destination['Location_Name'] ?>&id=<?php echo $destination['id'] ?>"><i class="fa-solid fa-pen"></i></a>
                                        <a class="text-danger" href="delete-location.php?delete=<?php echo $destination['id'] ?>"><i class="fa-solid fa-trash"></i></a>
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