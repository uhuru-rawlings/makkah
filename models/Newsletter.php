<?php
    class Newsletter {
        public $Email;
        public $Status = 0;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveEmails()
        {
            $sql =  "SELECT * FROM Newsletter WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
                $sql = "INSERT INTO Newsletter(Email) VALUES(?)";
                $query = $this -> conn -> prepare($sql);
                $query ->execute([$this -> Email]);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function unSubscribe()
        {
            $sql = "UPDATE Newsletter SET is_subscribed = ? WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Status,$this -> Email]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>