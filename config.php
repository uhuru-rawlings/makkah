<?php
    ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
    session_start();
    if($_SERVER['HTTP_HOST'] == "127.0.0.1" || $_SERVER['HTTP_HOST'] == "localhost"){
        
        // define('BASE_URL', 'http://localhost/Fourtech/alishan/');
        define('BASE_URL', 'http://localhost/server/fourtech/Al-Ihsan-ToursAndTravel/');
        // define('BASE_URL', 'http://fourtechglobalsolutions.com/alhasan/');
    }else{
        define('BASE_URL', '');
    }
    

?>
