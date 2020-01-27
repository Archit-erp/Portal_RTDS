<?php
$servername = "localhost";
$username = "id12328517_rtcs1234";
$password = "Archit@123";                                                                                                                                                      
$dbname = "id12328517_rtcs1234";

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$passwordd=$_POST['passwordd'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

else
{$sql = ("INSERT INTO USERS (firstname, lastname, email, age, mobile, gender, passwordd) VALUES ('$firstname','$lastname','$email','$age','$gender','$mobile','$passwordd')");
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>