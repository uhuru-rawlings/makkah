<?php
    class Locations {
        private $conn;
        public $location;
        public $lastmodified;
        public $id;
        
        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addLocation()
        {
            $sql   = "INSERT INTO Travel_Locations(Location_Name,Last_modified) VALUES(?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> location,$this -> lastmodified]);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function updateLocation()
        {
            $sql   = "UPDATE Travel_Locations SET Location_Name = ? WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> location, $this -> id]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
        public function getLocations()
        {
            $sql = "SELECT * FROM Travel_Locations";
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
    }
?>