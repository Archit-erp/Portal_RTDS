<<<<<<< HEAD
nam<?php
=======

<?php
>>>>>>> 2707243273d96500f73d9c91d0f2ed52eca14009
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";                                                                                                                                                      
$dbname = "user";
$firstname=$_POST['firstname'];
$lastname=$_POST['Lastname'];
$email=$_POST['Email'];
$age=$_POST['age'];
//$age=int($age);
$gender=$_POST['gender'];
$mobile=$_POST['MobileNo'];
$password=$_POST['ConfirmPassword'];
<<<<<<< HEAD

=======
>>>>>>> 2707243273d96500f73d9c91d0f2ed52eca14009
// Create connection
$conn = new mysqli($servername, $username, $passwordd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else
{$sql = ("INSERT INTO user1 (firstname, lastname, email, age, mobile, gender, password) VALUES ('$firstname','$lastname','$email','$age','$mobile','$gender','$password')");
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>
