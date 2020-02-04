<?php
echo $_SESSION['user_id']; 
echo $_SESSION;
//include 'sessioncheck.php';
?>

<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class = "container">
    <br>
    <h1 class="text-center" id="h1"> LOGIN!</h1>
    <br>

    <form method = "post" onsubmit=" return validate();" action = "Dashboard.php">

        <div class="row">
            <div class="col-sm-12"><label>Email</label></div>
        </div>
        <div class="row">
            <div class="col-sm-4" id="space"><input class="form-control" type="email" id="email"  name="Email" placeholder="Email"></div>
        </div>
        <div class="row">
            <div class="col-sm-4"><label>Password</label></div>
        </div>

        <div class="row">
            <div class="col-sm-4"><input class="form-control" type="password" id="pass" name="Password" placeholder="Password"><br></div>
        </div>

        <br>
        <center>
            <input type="submit" id="sub"  class="btn btn-default" value="Submit">
        </center>
        <h5>Not A Member?<a href="index.php"> Click to register</a></h5>
    </form>
</div>



</body>
<script>

    function validate(){

        var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var em = document.getElementById('email').value;
        var p = document.getElementById('pass').value;


        /*  if(!em.match(filter)){

              alert("Please Enter Valid Email Address")
              email.focus();
              return false;
          }*/

        if( em == "" || p == "")
        {
            alert("Please Fill the Details Completely!");
            pass.focus();
            return false;
        }

        else{
            var response;
            var email = $('#email').val();
            var pass = $('#pass').val();

            $.ajax({
                url : "loginDB.php",
                cache: false,
                data : {email : email , password : pass},
                method : "POST",
                success:function(response){
                    if(response == 1)
                    {
                        return true;
                    }

                    else if(response == 0)
                    {
                        alert('Wrong credentials');
                        return false;

                    }

                }
            })

        }

    }



</script>
</html>
