<?php
    if(isset($_GET['update'])){
        ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
        include_once("../database/Database.php");
        include_once("../models/Destinations.php");

        $conn = new Database();
        $db = $conn -> connection();
        $destination = new Destinations($db);
        $destination -> id = $_GET['update'];
        $update = $destination -> getSingleDestination();
        var_dump($update);
    }
?>                                 