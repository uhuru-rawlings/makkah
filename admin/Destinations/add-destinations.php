<?php
    include_once("../../config.php");
    include_once("../database/Database.php");
    include_once("../models/Locations.php")
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
                    <li class="breadcrumb-item active">Add Destination</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        Add Destinations
                    </div>
                    <div class="card-body">
                        <form action="" enctype="multipart/form-data" method="post">
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
                                                    echo "<option value='{$destination['id']}'>".$destination['Location_Name']."</option>";
                                                }
                                            }else{
                                                echo '<option value="">No Location Available</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Location Image <span class="text-danger">(you can upload multiple images)</span></label>
                                    <input type="file" name="location-image[]" id="location-image" class="form-control" placeholder="Location Name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Price per Day</label>
                                    <input type="text" name="prices" id="prices" class="form-control" placeholder="Price per Day">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="location-name">Days Oppened</label>
                                    <input type="text" name="daysoppened" id="daysoppened" class="form-control" placeholder="Days Oppened">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="placedescription">Description</label>
                                <textarea name="placedescription" id="placedescription" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Save Destination" class="btn btn-primary" id="save">
                            </div>
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