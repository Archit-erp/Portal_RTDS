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
    <h1 class="text-center" id="h1"> Create Your Account!</h1>

    <h4 class="text-center" id="h2"> Fill out the form to signup.</h4>
    <br>

    <form onsubmit="return validate();" method="post" action="register.php">
        <div class="row">
            <div class="col-sm-6"><label>First Name</label></div>
            <div class="col-sm-6"><label>Last Name</label></div>
        </div>
        <div class="row">
            <div class="col-sm-6" id="space"><input class="form-control" type="text" id="fname" name="firstname" placeholder="First Name" required></div>
            <div class="col-sm-6" id="space"><input class="form-control" type="text" id="lname" name="Lastname" placeholder="Last Name"></div>
            <br>
        </div>
        <div class="row">
            <div class="col-sm-6"  ><label>Age</label></div>
            <div class="col-sm-6"  ><label>Mobile</label></div>
        </div>
        <div class="row">
            <div class="col-sm-6" id="space"><input class="form-control" type="number" id="Age" name="age" placeholder="Age" required></div>
            <div class="col-sm-6" id="space"><input class="form-control" type="text" id="mob" name="MobileNo" maxlength="10" placeholder="Mobile No" required></div>
        </div>
        <div class="row">
            <div class="col-sm-12"><label>Email</label></div>
        </div>
        <div class="row">
            <div class="col-sm-12" id="space"><input class="form-control" type="email" onkeyup="checkStatus();" onblur="emailvalidation();" id="email"  name="Email" placeholder="Email" autocomplete="off" required></div>
        </div>

        <span><img src = "2.gif" id = "loader" style="display:none;padding-left:5px,;height:20px;weight:10px"></span><div id="statusCheck"></div>


        <div class="row">
            <div class="col-sm-12"><label>Gender</label></div>
        </div>

        <div class="row">
            <input class="marg" type="radio" id="r1" name="gender" value="male"> Male<br>
            <input class="marg" type="radio" id="r2" name="gender" value="female"> Female<br>
            <input class="marg" id="space" type="radio" id="r3" name="gender" value="other"> Other
        </div>

        <div class="row">
            <div class="col-sm-6"><label>Password</label></div>
            <div class="col-sm-6"><label>Confirm Password</label></div>
        </div>

        <div class="row">
            <div class="col-sm-6"><input class="form-control" type="password" id="pass" name="Password" placeholder="Set a Password" required><br></div>
            <div class="col-sm-6"><input class="form-control" type="password" id="cpass" name="ConfirmPassword" placeholder="Confirm Password" required></div>
        </div>
        <br>
        <center>
            <input type="submit" id="sub"  class="btn btn-default" value="Submit">
        </center>
        <h5>Already Signed Up. <a href="login.php">Click to Login</a></h5>
    </form>
</div>

<script>
    var response;
    var f;
    function checkStatus()
    {
        $("#loader").show();
        var email=$('#email').val();

        $.ajax({

            url: "emailcheck.php",
            data: {email: email},
            method : "POST",
            success:function(response){
                if(response == 1) {
                    f=1;
                    $("#statusCheck").html("<span style = 'color :red'>Email Already Registered.</span>");
                    $("#loader").hide();
                }

                else{
                    f=0;
                    $("#statusCheck").html("<span style = 'color :green'>Available.</span>");
                    $("#loader").hide();
                }
            }
        });

    }


    function emailvalidation(){
        var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var em = document.getElementById('email').value;
        if(!em.match(filter))
        {
            response = "<span style = 'color :red'>Please Provide Valid Email Address.</span>";
            var em1=document.getElementById('statusCheck').innerHTML = response;

        }

    }

    function validate(){
        var g;
        var filter = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var phoneno = /^[6-9]\d{9}$/;
        var blank =  /^\w+[a-zA-Z]*$/;
        var regpass = /^.{4,20}$/;


        var fn = document.getElementById('fname').value;
        var ln = document.getElementById('lname').value;
        var em = document.getElementById('email').value;
        var ag = document.getElementById('Age').value;
        var mob1 = document.getElementById('mob').value;
        var p = document.getElementById('pass').value;
        var cp = document.getElementById('cpass').value;
        {
            if(document.getElementById('r1').checked)
                g= document.getElementById('r1').value;

            else if(document.getElementById('r2').checked)
                g= document.getElementById('r2').value;


            else if(document.getElementById('r3').checked)
                g= document.getElementById('r3').value;
        }
        if(!fn.match(blank))
        {
            alert('Name should only be in Characters');
            fname.focus();
            return false;
        }

        else if(!em.match(filter) || f==1)
        {
            email.focus();
            return false;
        }

        else if(ag<18 || ag>60)
        {
            alert('Age Out Of Bound(18-60)');
            Age.focus();
            return false;
        }

        else if(!mob1.match(phoneno))
        {
            alert('Please Enter Valid Mobile No');
            mob.focus();
            return false;
        }

        else if(!p.match(regpass))
        {
            alert("Password minimum length(5 chars)");
            pass.focus();
            return false;

        }

        else if(!p.match(cp))
        {
            alert('Password does not match');
            pass.focus();
            return false;
        }

        else
        {
            alert('Account Created!')
            return true;
        }

    }

</script>
</body>
</html>
