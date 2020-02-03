<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";
$dbname = "user";



//session_start();
$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    // $_SESSION['user_id']= $email;
    $query = "SELECT email, password FROM user1 WHERE email = '".$email."' AND password = '".$password."'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
        echo "here";
        $response = 1;
    }

    else{
        echo "here1";
        $response = 0;
    }
}

?>
