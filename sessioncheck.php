<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}
else{
    header("Location : http://35.238.89.60/Portal_RTDS/Dashboard.php");
}
?>
