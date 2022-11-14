<?php
    class Destinations {
        public $location_name;
        public $Location_images;
        public $Price_Perday;
        public $Days_Opened;
        public $place_description;
        public $Last_Modified;
        public $Location;
        public $id;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addDestination()
        {
            $sql = "INSERT INTO Travel_Destinations(Location_id,Location_images,Price_Perday,Days_Opened,place_description,Last_Modified,`Location`) VALUES(?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> location_name,$this -> Location_images,$this -> Price_Perday,$this -> Days_Opened,$this -> place_description,$this -> Last_Modified,$this -> Location]);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function getDestinations()
        {
            $sql = "SELECT Travel_Destinations.id,Travel_Destinations.Location_id,Travel_Destinations.Location_images,Travel_Destinations.Price_Perday,Travel_Destinations.Days_Opened,Travel_Destinations.place_description,Travel_Destinations.Date_added,Travel_Destinations.Last_Modified,Travel_Locations.Location_Name,Travel_Destinations.Location FROM  Travel_Locations INNER JOIN Travel_Destinations ON Travel_Locations.id = Travel_Destinations.Location_id ORDER BY Travel_Destinations.Location_id DESC";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function getSingleDestination()
        {
            $sql = "SELECT Travel_Destinations.id,Travel_Destinations.Location_id,Travel_Destinations.Location_images,Travel_Destinations.Price_Perday,Travel_Destinations.Days_Opened,Travel_Destinations.place_description,Travel_Destinations.Date_added,Travel_Destinations.Last_Modified,Travel_Locations.Location_Name,Travel_Destinations.Location FROM  Travel_Locations INNER JOIN Travel_Destinations ON Travel_Locations.id = Travel_Destinations.Location_id WHERE Travel_Destinations.id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id]);
            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }  
        public function updateDestination()
        {
            if(!empty($this -> Location_images) || $this -> Location_images !== ""){
                $sql = "UPDATE Travel_Destinations SET Location_id = ?,Location_images = ?,Price_Perday = ?,Days_Opened = ?,place_description = ?,Last_Modified = ?,`Location` = ? WHERE id = ?";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> location_name,$this -> Location_images,$this -> Price_Perday,$this -> Days_Opened,$this -> place_description,$this -> Last_Modified,$this -> Location,$this -> id]);
            }
            if(empty($this -> Location_images) || $this -> Location_images == ""){
                $sql = "UPDATE Travel_Destinations SET Location_id = ?,Price_Perday = ?,Days_Opened = ?,place_description = ?,Last_Modified = ?,`Location` = ? WHERE id = ?";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> location_name,$this -> Price_Perday,$this -> Days_Opened,$this -> place_description,$this -> Last_Modified,$this -> Location,$this -> id]);
            }
            
            if($query){
                return true;
            }else{
                return false;
            }
        } 
    }
?>