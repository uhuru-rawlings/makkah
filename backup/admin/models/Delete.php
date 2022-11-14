<?php
    class Delete {
        public $table;
        public $id;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function delete()
        {
            $sql   = "DELETE FROM ".$this -> table." WHERE id = ?";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> id]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>