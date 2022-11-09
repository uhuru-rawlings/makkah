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

        public function getTripBooking()
        {
            $sql = "SELECT Trip_Booking.id,Trip_Booking.user,Trip_Booking.From_location,Trip_Booking.To_location,Trip_Booking.From_date,Trip_Booking.Travel_class,Trip_Booking.People,Trip_Booking.Agrement,Trip_Booking.status,Trip_Booking.Date_added,Registration.Fname,Registration.Lname,Registration.Phone,Registration.Email FROM Trip_Booking INNER JOIN Registration ON Registration.id = Trip_Booking.user ORDER BY Trip_Booking.id";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            if($query){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }

        public function bookHotel()
        {
            $sql = "INSERT INTO `Hotel_booking`(`user`,`Hotel_name`,`From_Date`,`To_Date`,`People`) VALUES(?,?,?,?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> User,$this -> Hotel,$this -> Formdate,$this -> To_Date,$this -> Number]);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function getHotelBooking()
        {
            $sql = "SELECT Hotel_booking.id,Hotel_booking.user,Hotel_booking.Hotel_name,Hotel_booking.From_Date,Hotel_booking.To_Date,Hotel_booking.People,Hotel_booking.status,Hotel_booking.Date_added,Registration.Fname,Registration.Lname,Registration.Phone,Registration.Email FROM Registration INNER JOIN Hotel_booking ON Hotel_booking.user = Registration.id";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            if($query){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return true;
            }
        }

        public function getAppointments()
        {
            $sql = "SELECT Visa_Appointments.id,Visa_Appointments.user,Visa_Appointments.Appointment_date,Visa_Appointments.Date_added,Visa_Appointments.status,Registration.Fname,Registration.Lname,Registration.Phone,Registration.Email FROM Registration INNER JOIN Visa_Appointments ON Visa_Appointments.user = Registration.id";
            $query = $this -> conn -> prepare($sql);
            $query -> execute();
            if($query){
                while($results = $query -> fetchAll(PDO::FETCH_ASSOC)){
                    return $results;
                }
            }else{
                return false;
            }
        }
    }
?>