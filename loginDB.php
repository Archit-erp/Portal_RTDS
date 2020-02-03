<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";
$dbname = "user";

console.log('here0');

session_start();
$email = $_POST['Email'];
$password = $_POST['Password'];

console.log('here0_1');


$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $_SESSION['user_id']= $email;
    $query = "SELECT email, password FROM user1 WHERE username = '".$email."' AND password = '".$password."'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        echo "here";
        header("Location : http://35.238.89.60/Portal_RTDS/Dashboard.php");
    }

    else{
        echo "here1";
        header("Location : http://35.238.89.60/Portal_RTDS/login.php");
    }
}

?>
