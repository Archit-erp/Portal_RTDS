<!DOCTYPE HTML> 
<html>  
   <head> 
	</head> 
	<body> 
			   <form onsubmit="return validate();" method="post" action="register.php">
			   First Name:<br>
			  <input type="text" id="fname" name="firstname" placeholder="First Name">
			  <br>
			   Last Name:<br>
			  <input type="text" id="lname" name="Lastname" placeholder="Last Name">
			  <br>
			   Email:<br>
			  <input type="email" id="email" name="Email" placeholder="Email">
			  <br>
			  Age:<br>
			  <input type="number" id="Age" name="age" placeholder="Age">
			  <br>
			  Mobile:<br>
			  <input type="text" id="mob" name="MobileNo" maxlength="10" placeholder="Mobile No">`
 			  <br><br>
			  Gender:<br>
			  
			  <input type="radio" id="r1" name="gender" value="male" checked> Male<br>
			  <input type="radio" id="r2" name="gender" value="female"> Female<br>
			  <input type="radio" id="r3" name="gender" value="other"> Other 
			
			  <br>
			  Password:<br>
			  <input type="password" id="pass" name="Password" placeholder="Set a Password" required><br>
			  Confirm Password:<br>
			  <input type="password" id="cpass" name="ConfirmPassword" placeholder="Confirm Password" required><br><br><br>
			  <input type="submit" id="sub" value="Submit">
			  </form>
				
			<script>
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
							var mob1 =  document.getElementById('mob').value;
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
					
					else if(!em.match(filter))
					{
						alert('Please Provide Valid Email ID');
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
					
					else if(!regpass.match(pass))
					{
						alert("Password minimum length(5 chars)");
							pass.focus();
							return true;
					
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
