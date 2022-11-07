<?php
    if(isset($_POST['save'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include_once("../database/Database.php");
        include_once("../models/Airline.php");
        include_once("../models/Imageuploads.php");


        $conn = new Database();
        $db   = $conn -> connection(); 
        $airlines = new Airline($db);
        $airlines -> Name = $_POST['airlinename'];
        $images = new Imageuploads();
        $images -> image = $_FILES['airlineimage'];
        $image_name = $images -> upload_image();
        $airlines -> Logo = $image_name;
        $save = $airlines -> addAirline();
        if($save){
            header("Location: add-airlines.php?success=Airline added succesfully");
        }else{
            header("Location: add-airlines.php?error=Ooops! something went wrong, please try again.");
        }
    }

    if(isset($_POST['save-airline'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include_once("../database/Database.php");
        include_once("../models/Airline.php");
        include_once("../models/Imageuploads.php");
        $conn = new Database();
        $db   = $conn -> connection(); 
        $airlines = new Airline($db);
        $airlines -> id = $_POST['airline'];
        $airlines -> From_Location = $_POST['fromlocation'];
        $airlines -> To_Location = $_POST['tolocation'];
        $airlines -> Logo = $image_name;
        $save = $airlines -> saveDestination();
        if($save){
            header("Location: add-airlines.php?air-success=Destinations added succesfully");
        }else{
            header("Location: add-airlines.php?air-error=Ooops! something went wrong, please try again.");
        }
    }
?>