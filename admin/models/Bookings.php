<?php
    class Bookings {
        private $conn;
        public $Fullname;
        public $Email;
        public $Phone;
        public $Location_id;
        public $From_Date;
        public $To_Date;
        public $Travelers;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addBookings()
        {
            $sql = "INSERT INTO Travel_Bookings(Fullname,Email,Phone,Location_id,From_Date,To_Date,Travelers)
                VALUES(?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> Fullname,$this -> Email,$this -> Phone,$this -> Location_id,$this -> From_Date,$this -> To_Date,$this -> Travelers]);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function getBookings()
        {
            $sql = "SELECT Travel_Bookings.id,Travel_Bookings.Fullname,Travel_Bookings.Email,Travel_Bookings.Phone,Travel_Bookings.Location_id,Travel_Bookings.From_Date,Travel_Bookings.To_Date,Travel_Bookings.Travelers,Travel_Bookings.Status,Travel_Bookings.Date_added FROM Travel_Destinations INNER JOIN Travel_Bookings ON Travel_Bookings.Location_id = Travel_Destinations.id";
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