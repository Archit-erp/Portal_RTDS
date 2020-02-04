<?php
include 'sessioncheck.php';
echo $_SESSION['user_id'];
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

<div>
<button type="button" onclick ="sessiondes()">Logout</button>
</div>

<script>
    function sessiondes() {
        $.ajax({
            url : "sessiondestroy.php",
            method : "POST",
            success:function(response){
               console.log ('logging out');
            }
        })
    }

</script>
</body>

</html>
