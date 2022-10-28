<?php
    if(isset($_POST['submit'])){
        include_once("../database/Database.php");
        include_once("../models/Destinations.php");
        include_once("../models/Imageuploads.php");
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        $update_id         = $_POST['update_id'];
        $locationname      = $_POST['location-name'];
        $prices            = $_POST['prices'];
        $daysoppened       = $_POST['daysoppened'];
        $placedescription  = $_POST['placedescription'];
        $Last_Modified = date("Y-m-d H:i:s");

        $conn = new Database();
        $db = $conn -> connection();
        $destination = new Destinations($db);
        $destination -> location_name      = $locationname;
        $destination -> Price_Perday       = $prices;
        $destination -> Days_Opened        = $daysoppened;
        $destination -> place_description  = $placedescription;
        $destination -> Last_Modified      = $Last_Modified;
        $destination -> id                 = $update_id;
        if(!empty($_FILES['location-image']['name'][0]) || $_FILES['location-image']['name'][0] !== ""){
            $image  = new Imageuploads();
            $image -> image = $_FILES['location-image'];
            $upload = $image -> upload_image();
            $destination -> Location_images = $upload;
        }else{
            $destination -> Location_images = "";
        }
        $update = $destination -> updateDestination();
        if($update){
            header("Location: update-destination.php?update=$update_id&success=Destination updated succesfully.");
        }else{
            header("Location: update-destination.php?update=$update_id&error=Ooops! something went wrong, please try again");
        }
    }
?>