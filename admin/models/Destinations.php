<?php
    class Destinations {
        public $location_name;
        public $Location_images;
        public $Price_Perday;
        public $Days_Opened;
        public $place_description;
        public $Last_Modified;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addDestination()
        {
            $sql = "INSERT INTO Travel_Destinations(Location_id,Location_images,Price_Perday,Days_Opened,place_description,Last_Modified) VALUES(?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> location_name,$this -> Location_images,$this -> Price_Perday,$this -> Days_Opened,$this -> place_description,$this -> Last_Modified]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>