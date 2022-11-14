<?php
    class Airline {
        public $Name;
        public $Logo;
        public $id;
        public $From_Location;
        public $To_Location;
        public $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addAirline()
        {
            $sql   = "SELECT * FROM Airline WHERE `Name` = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Name]);
            $rows  = $query -> rowCount(); 
            if($rows > 0){
                return false;
            }else{
                $sql   = "INSERT INTO `Airline`(`Name`,`Logo`) VALUES(?,?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> Name,$this -> Logo]);
                if($query){
                    return true;
                }else{
                    return true;
                }
            }
        }

        public function getAirlines()
        {
            $sql   = "SELECT * FROM Airline";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            if($query){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function getAirline()
        {
            $sql   = "SELECT * FROM Airline WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id]);
            if($query){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function saveDestination(){
            $sql = "SELECT * FROM Air_Destinations WHERE Airline = ? AND From_location = ? AND To_location = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id,$this -> From_Location,$this -> To_Location]);
            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
                $sql = "INSERT INTO Air_Destinations(Airline,From_location,To_location) VALUES(?,?,?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> id,$this -> From_Location,$this -> To_Location]);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function getDestinations()
        {
            $sql   = "SELECT * FROM Air_Destinations";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            if($query){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
        public function getDestination()
        {
            $sql   = "SELECT * FROM Air_Destinations WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id]);
            if($query){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
    }
?>