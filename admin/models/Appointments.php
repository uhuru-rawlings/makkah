<?php
    class Appointment {
        public $user;
        public $date;
        private $conn;

        public function __construct($db)
        {
            $this -> conn = $db;
        }

        public function addAppointment()
        {
            $sql = "INSERT INTO `Visa_Appointments`(`user`,`Appointment_date`) VALUES(?,?)";
            $query = $this -> conn -> prepare($sql);
            $query -> execute([$this -> user,$this -> date]);
            if($query){
                return true;
            }else{
                return false;
            }
        }

        public function getAppointments()
        {
            $sql = "SELECT * FROM Visa_Appointments";
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