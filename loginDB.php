<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";
$dbname = "user";

session_start();
$email = $_POST['Email'];
$password = $_POST['Password'];


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

        header("Location : http://35.238.89.60/Portal_RTDS/Dashboard.php");
    }

    else{
        header("Location : http://35.238.89.60/Portal_RTDS/login.php");
    }
}

?>
