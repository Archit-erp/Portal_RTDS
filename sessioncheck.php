<?php
session_start();
if(empty($_SESSION['user_id'])){

    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
echo "greeg";
}
?>
