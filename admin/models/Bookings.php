<?php
    class Bookings {
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function getBookings()
        {
            $sql = "SELECT Travel_Bookings.id,Travel_Bookings.Location_id,Travel_Bookings.User_id,Travel_Bookings.From_Date,Travel_Bookings.To_Date,Travel_Bookings.Travelers,Travel_Bookings.Status,Registration.Fname,Registration.Lname,Registration.Email FROM Registration INNER JOIN Travel_Bookings ON Travel_Bookings.User_id = Registration.id";
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