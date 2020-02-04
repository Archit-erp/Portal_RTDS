<?php
$flag = $_POST['f'];

if(!isset($_SESSION['user_id'])){
    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}
else if($flag == 1){
    session_destroy();
    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}

else {
    session_start();
}
?>
