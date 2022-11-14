<?php
    class Totals {
        private $conn;
        public $table;


        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function getTotals()
        {
            $sql = "SELECT * FROM ".$this -> table;
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            $rows = $query -> rowCount();
            return $rows;
        }
    }
?>