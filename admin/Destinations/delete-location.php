<?php
    if(isset($_GET[''])){
        include_once("../database/Database.php");
        include_once("../models/Delete.php");


        $conn = new Database();
        $db = $conn -> connection();
        $delete_item = new Delete($db);
        $delete = $delete_item -> delete();
        if($locations){
            header("Location: add-locations.php?success=record deleted succesfully.");
        }else{
            header("Location: add-locations.php?error=Ooops! something went wrong please try again.");
        }
    }
?>