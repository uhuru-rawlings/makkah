<?php
        include_once("../database/Database.php");
        include_once("../models/Locations.php");
        $conn = new Database();
        $db = $conn -> connection();
        $location = new Locations($db);
        $location -> location = $_POST['location-name'];
        $location -> lastmodified = date("Y-m-d H:i:s");
        if(isset($_POST['location-id']) && !empty($_POST['location-id'])){
            $location -> id = $_POST['location-id'];
            $locations = $location -> updateLocation();
            if($locations){
                header("Location: add-locations.php?success=details updated addded");
            }else{
                header("Location: add-locations.php?error=Ooops! something went wrong please try again.");
            }
        }else{
            $locations = $location -> addLocation();   
            if($locations){
                header("Location: add-locations.php?success=details successfully addded");
            }else{
                header("Location: add-locations.php?error=Ooops! something weht wrong please try again.");
            }
        }
?>