<?php
    class Contact {
        public $Fullname;
        public $Email;
        public $Phone;
        public $Message;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveMessage()
        {
            $sql = "INSERT INTO `contact`(`Full_name`,`Email`,`Phone`,`Message`) VALUES(?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Fullname,$this -> Email,$this -> Phone,$this -> Message]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>