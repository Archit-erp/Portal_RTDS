<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";
$dbname = "user";


$email=$_POST['Email'];
$password=$_POST['Password'];

$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

    $query = "SELECT email, password FROM user1 WHERE username = '".$email."' AND password = '".$password."'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($reuslt)>0)
    {
        echo 'Succesfull, Login';
    }

    else{
        echo 'Not a succesfull login';
    }
}

?>
