<?php
    class Newsletter {
        private $conn;
        public  $Email;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function setEmail()
        {
            $sql = "SELECT * FROM Newsletter WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
                $sql = "INSERT INTO Newsletter(Email) VALUES(?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> Email]);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
?>