<?php
    if(isset($_GET['delete'])){
        include_once("../database/Database.php");
        include_once("../models/Delete.php");


        $conn = new Database();
        $db = $conn -> connection();
        $delete_item = new Delete($db);
        $delete_item -> id = $_GET['delete'];
        $delete_item -> table = 'Travel_Locations';
        $delete = $delete_item -> delete();
        if($delete){
            header("Location: add-locations.php?delete-success=record deleted succesfully.");
        }else{
            header("Location: add-locations.php?delete-error=Ooops! something went wrong please try again.");
        }
    }
?>