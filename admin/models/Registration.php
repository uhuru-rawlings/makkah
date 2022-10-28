<?php
    class Registration {
        public $Fname;
        public $Lname;
        public $Email;
        public $Phone;
        public $Password;
        public $Last_Modified;
        private $conn;

        public function __construct($db)
        {
            $this-> conn = $db;
        }

        public function addUsers()
        {
            $sql = "SELECT * FROM Registration WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
                $sql = "INSERT INTO `Registration`(`Fname`,`Lname`,`Email`,`Phone`,`Password`,`Last_Modified`) VALUES(?,?,?,?,?,?)";
                $query = $this -> conn -> prepare($sql);
                $query -> execute([$this -> Fname,$this -> Lname,$this -> Email,$this -> Phone,password_hash($this -> Password,PASSWORD_DEFAULT),$this -> Last_Modified]);
                if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }

        public function getAllUsers()
        {
            $sql = "SELECT * FROM Registration";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
        public function getUser()
        {
            $sql = "SELECT * FROM Registration WHERE Email = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                while($results = $query -> fetch(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
        public function updateUser()
        {
            $sql = "SELECT * FROM Registration WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Email]);
            $rows = $query -> rowCount();
            if($rows > 0){
                return false;
            }else{
               if($this -> Password == "" || empty($this -> Password)){
                    $sql = "UPDATE `Registration` SET `Fname` = ?,`Lname` =?,`Email`= ?,`Phone` = ?,`Last_Modified` = ? WHERE Email = ?";
                    $query = $this -> conn -> prepare($sql);
                    $query -> execute([$this -> Fname,$this -> Lname,$this -> Email,$this -> Phone,$this -> Last_Modified,$this -> Email]);
               }else{
                    $sql = "UPDATE `Registration` SET `Fname` = ?,`Lname` =?,`Email`= ?,`Phone` = ?,`Password` = ?,`Last_Modified` = ? WHERE Email = ?";
                    $query = $this -> conn -> prepare($sql);
                    $query -> execute([$this -> Fname,$this -> Lname,$this -> Email,$this -> Phone,password_hash($this -> Password,PASSWORD_DEFAULT),$this -> Last_Modified,$this -> Email]);
               }
               if($query){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
?>