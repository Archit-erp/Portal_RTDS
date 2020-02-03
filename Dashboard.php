<?php
if(isset($_SESSION['user_id'])){
   $e = $_SESSION['user_id'];
   $p = $_SESSION['password'];
   
   echo $e;
   echo $p;

}
else {

    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}
?>

