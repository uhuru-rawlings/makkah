<?php
    class Database {
        private $db_host     = "127.0.0.1";
        private $db_user     = "root";
        private $db_password = "";
        private $db_name     = "alishan_tour";
        private $conn;

        public function connection()
        {
            $db = "mysql:host=".$this -> db_host.";dbname=".$this -> db_name;
            $conn = new PDO($db,$this -> db_user,$this -> db_password);
            if($conn){
                $this -> conn = $conn;
            }else{
                $this -> conn = json_encode(array("message" => "could not initiate connection to the database"));
            }
            return $this -> conn;
        }
    }
?>