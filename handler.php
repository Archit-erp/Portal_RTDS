<?php
require_once("register.php");
$db_handle= new DBController();

public $firstname=$_POST['firstname'];
public $lastname=$_POST['Lastname'];
public $email=$_POST['Email'];
public $age=$_POST['age'];
public $gender=$_POST['gender'];
public $mobile=$_POST['MobileNo'];
public $password=$_POST['ConfirmPassword'];


 $query = ("INSERT INTO user1 (firstname, lastname, email, age, mobile, gender, password) VALUES ('$firstname','$lastname','$email','$age','$mobile','$gender','$password')");
 $value = $db_handle->insertDB($query);
    if($value == True)
       echo "New Record Created Succesfully";
     else
      echo "---Error";
?>
