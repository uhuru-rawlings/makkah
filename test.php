<?php
    $https = $_SERVER['HTTPS'];
    if($https){
        echo "https://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
    }else{
        echo "http://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
    }
?>