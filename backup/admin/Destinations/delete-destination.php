<?php
    if(isset($_GET['delete'])){
        include_once("../database/Database.php");
        include_once("../models/Delete.php");


        $conn = new Database();
        $db = $conn -> connection();
        $delete_item = new Delete($db);
        $delete_item -> id = $_GET['delete'];
        $delete_item -> table = 'Travel_Destinations';
        $delete = $delete_item -> delete();
        if($delete){
            header("Location: list-destinations.php?delete-success=record deleted succesfully.");
        }else{
            header("Location: list-destinations.php?delete-error=Ooops! something went wrong please try again.");
        }
    }
?>