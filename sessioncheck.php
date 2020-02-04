<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}
echo $_SESSION['user_id'];die;
