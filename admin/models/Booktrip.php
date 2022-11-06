<?php
    class TripBookings {
        public $Fromlocation;
        public $Tolocation;
        public $Tripsround;
        public $Formdate;
        public $Todate;
        public $Travelclass;
        public $Number;
        public $Agrement;
        public $User;
        public $Hotel;
        public $To_Date;
        public $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function bookTrip()
        {
            $sql = "INSERT INTO Trip_Booking(user,From_location,To_location,From_date,Travel_class,People,Agrement) VALUES(?,?,?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> User,$this -> Fromlocation,$this -> Tolocation,$this -> Formdate,$this -> Travelclass,$this -> Number,$this -> Agrement]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
        public function bookHotel()
        {
            $sql = "INSERT INTO Trip_Booking(user,Hotel,From_Date,To_Date,People) VALUES(?,?,?,?,?)";
            $query = $this ->conn -> prepare($sql);
            $query -> execute([$this -> User,$this -> Hotel,$this -> Formdate,$this -> To_Date,$this -> Number]);
            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>