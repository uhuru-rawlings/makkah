<?php
    class Callback {
        public $Full_name;
        public $Phone;
        public $Subject;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function saveRequest()
        {
            $sql = "INSERT INTO Callback(`Fullname`,`Phoneno`,`Subject`) VALUES(?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Full_name,$this -> Phone,$this -> Subject]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>