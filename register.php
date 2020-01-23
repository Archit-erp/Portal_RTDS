<?php
$servername = "localhost";
$username = "id12328517_rtcs1234";
$password = "Archiit@123";                                                                                                                                                      ;
$dbname = "id12328517_rtcs1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>