<?php
class DBController{
private $servername = "35.238.89.60";
private $username = "test_userr";
private $passwordd = "Password@123";        
private $dbname = "user";
    
private static $conn;
    
public $firstname=$_POST['firstname'];
public $lastname=$_POST['Lastname'];
public $email=$_POST['Email'];
public $age=$_POST['age'];
public $gender=$_POST['gender'];
public $mobile=$_POST['MobileNo'];
public $password=$_POST['ConfirmPassword'];

function __construct(){
    $this->conn = $this->connectDB();
}

function connectDB(){
if(empty($email || $password))
{
    header("Location: http://35.238.89.60/Portal_RTDS/index.php");
}

else{
// Create connection
    $conn = new mysqli($servername, $username, $passwordd, $dbname);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);}
        else
        { $this->insertDB();}
    }
 function insertDB(){
 
 $query = ("INSERT INTO user1 (firstname, lastname, email, age, mobile, gender, password) VALUES ('$firstname','$lastname','$email','$age','$mobile','$gender','$password')");
            if (mysqli_query($this->conn, $query)) {
                    echo "New record created successfully";
            }
            else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
 
 } 
    
$mysqli->close();
}
?>
