<?php
    setcookie("adminuser","",time() - 3600,"/");
    header("Location: auth/index.php?error=Logout succesfull,please login");
?>