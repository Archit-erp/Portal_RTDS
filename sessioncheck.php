<?php
session_start();
if(empty($_SESSION['user_id'])){
        $f = 0;

}
else{
$f = 1;
}
?>
