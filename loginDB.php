<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";
$dbname = "user";


$email = $_POST['email'];
$password = $_POST['password'];

$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{

    $query = "SELECT email, password FROM user1 WHERE email = '".$email."' AND password = '".$password."'";
    $result = mysqli_query($conn,$query);
    $rowcount = mysqli_num_rows($result);

    if($rowcount>0)
    {
        session_start();
        $_SESSION['user_id']= $email;
        $_SESSION['pass'] = $password;

        $response = 1;
    }

    else{

        $response = 0;
    }

    echo $response;
}

?>
