<?php
class DBController{
private $servername = "35.238.89.60";
private $username = "test_userr";
private $passwordd = "Password@123";        
private $dbname = "user";
    
private static $conn;
    
function __construct(){
     $conn = new mysqli($servername, $username, $passwordd, $dbname);
            if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);)
}

function insertDB($query){
if(empty($email || $password))
{
    header("Location: http://35.238.89.60/Portal_RTDS/index.php");
}

else{
    if (mysqli_query($this->conn, $query)) {
                    $value=True;
                return $value;
        }
            else {
                $value=False;
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                return $value;
            }
}}
    
$mysqli->close();
}
?>
