<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Locations.php");
    include_once("../models/Destinations.php");
    $_SESSION['active']="destination";
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
                    <li class="breadcrumb-item active">Update Destination</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        Update Destinations
                    </div>
                    <div class="card-body">
                            <?php
                                if(isset($_GET['success'])){
                                    echo "<div class='alert alert-success'>".$_GET['success']."</div>";
                                }else if(isset($_GET['error'])){
                                    echo "<div class='alert alert-danger'>".$_GET['error']."</div>";
                                }
                            ?>
                        <form action="update-destination-fun.php" enctype="multipart/form-data" method="post">
                            <?php
                                if(isset($_GET['update'])){
                                    $conn = new Database();
                                    $db = $conn -> connection();
                                    $destination = new Destinations($db);
                                    $destination -> id = $_GET['update'];
                                    $update = $destination -> getSingleDestination();
                                    if($update){
                            ?>
                            <div class="form-group">
                                <input type="text" value="<?php echo $update['id'] ?>" name="update_id" id="update_id" class="form-control">
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Location Name</label>
                                    <select name="location-name" id="location-name" class="form-control">
                                        <?php
                                            $conn = new Database();
                                            $db = $conn -> connection();
                                            $location = new Locations($db);
                                            $locations = $location -> getLocations();
                                            if($locations){
                                                foreach($locations as $destination){
                                                    if($destination['id'] == $_GET['update']){
                                                        echo "<option value='{$destination['id']}' selected>".$destination['Location_Name']."</option>";
                                                    }else{
                                                        echo "<option value='{$destination['id']}'>".$destination['Location_Name']."</option>";
                                                    }
                                                }
                                            }else{
                                                echo '<option value="">No Location Available</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Location Image <small class="text-danger">(you can upload multiple images)</small></label>
                                    <input type="file" name="location-image[]" id="location-image" class="form-control" placeholder="Location Name" multiple>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Price per Day</label>
                                    <input type="text" value="<?php echo $update['Price_Perday'] ?>" name="prices" id="prices" class="form-control" placeholder="Price per Day">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Days Oppened <small class="text-danger">add multiple days separate with a comma.</small></label>
                                    <input type="text" value="<?php echo $update['Days_Opened'] ?>" name="daysoppened" id="daysoppened" class="form-control" placeholder="Days Oppened">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="Location">Location</label>
                                <input type="url" value="<?php echo $update['Location'] ?>" name="Location" id="Location" class="form-control" placeholder="Location">
                            </div>
                            <div class="form-group">
                                <label for="placedescription">Description</label>
                                <textarea name="placedescription" id="placedescription" cols="30" rows="10" class="form-control" value="<?php echo $update['place_description'] ?>"><?php echo $update['place_description'] ?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" value="Save Destination" class="btn btn-primary" id="save">
                            </div>
                        <?php
                                }else{
                                    echo "<div class='alert alert-danger'>No location with this id</div>";
                                }
                            }
                        ?>
                        </form>
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