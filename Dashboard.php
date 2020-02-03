<?php
if(isset($_SESSION['user_id'])){
    echo "Succesfull Login";
    
}

else {

    header("Location : http://35.238.89.60/Portal_RTDS/login.php");
}
?>

