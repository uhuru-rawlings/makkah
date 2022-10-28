<?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    if(isset($_POST['submit'])){
        include("../database/Database.php");
        include_once("../models/Imageuploads.php");
        include_once("../models/Destinations.php");

        $location_name    = $_POST['location-name'];
        $location_image   = $_FILES['location-image'];
        $prices           = $_POST['prices'];
        $daysoppened      = $_POST['daysoppened'];
        $placedescription = $_POST['placedescription'];
        $last_modified    = date("Y-m-d H:i:s");
        $Location         = $_POST['Location']; 

        $conn = new Database();
        $db = $conn -> connection();
        $uploads = new Imageuploads();
        $uploads -> image = $location_image;
        $upload = $uploads -> upload_image();
        if($upload){
            echo $location_name;
            $new_destination = new Destinations($db);
            $new_destination -> location_name    = $location_name;
            $new_destination -> Location_images  = $upload;
            $new_destination -> Price_Perday     = $prices;
            $new_destination -> Days_Opened      = $daysoppened;
            $new_destination -> Last_Modified    = $last_modified;
            $new_destination -> place_description    = $placedescription;
            $new_destination -> Location    = $Location;
            $destination = $new_destination -> addDestination();
            if($destination){
                header("Location: add-destinations.php?success=destination added succesfully.");
            }else{
                header("Location: add-destinations.php?error=Ooops! something went wrong, try again.");
            }
        }
    }
?>