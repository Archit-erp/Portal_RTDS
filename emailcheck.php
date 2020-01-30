<?php
$servername = "http://35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";        
$dbname = "user";


$conn =  mysqli_connect($servername, $username, $passwordd, $dbname);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo "error in";
                                    }
                echo "error out";
/*else
{
echo "2";
(isset($_POST['email'])){
  $email=$_POST['email'];
  
  $query= "select count(*) as CntUser from user1 where email='".$email."'";
  $result = mysqli_query($conn,$query);
  $response="<span style='color :green'>Available.</span>";
        echo "here";
    if(mysqli_num_rows($result)){
    
    $row=mysqli_fetch_array($result);
    $count=$row['CntUser'];
      if($count>0){
      $response = "<span style='color :red;'>Not Available.</span>";
       echo $response;
      }
    
   
    }
 
 
}*/


?>
