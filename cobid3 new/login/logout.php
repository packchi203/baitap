<?php
 session_start();
 
 $_SESSION = array();
 echo "Logout Successfully ";
 session_destroy();

 header("location: login.php");
 exit;
?>