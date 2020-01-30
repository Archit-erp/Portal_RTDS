<?php
$servername = "35.238.89.60";
$username = "test_userr";
$passwordd = "Password@123";        
$dbname = "user";


$conn =  new mysqli($servername, $username, $passwordd, $dbname);
        // Check connection
        if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }
      
       else
        {       
                if(!empty($_POST['email']))
                {
                                $email=$_POST['email'];

                                  $query= "select * FROM user1 where email='".$email."'";
                                    $result = mysqli_query($conn,$query);
                                      $rowcount = mysqli_num_rows($result);
                                                echo "$rowcount";
                                        
                                        if(rowcount>0){
                                          $response = "<span style = 'color :red;'>Not Available.</span>";
                                                }
                                        else{
                                         $response = "<span style = 'color :green'>Available.</span>";
                                                
                                        }
              
                }

                echo $response;
            }

 ?>
