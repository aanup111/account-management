<?php
   require 'dbconfig/config.php';
?>

<!DOCTYPE htlm>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#1abc9c">
	
	<div id ="main">
	<center><h2>Register</center>
	
	
	
	<form class ="myform" action="register.php" method="post">
		<label><b>Full name:</b></label><br>
		<input name="fullname" type="text" class="inputvalues" placeholder="Enter full name" required/> <br> <br>
		<label><b>Gender</b></label>
		<input name="gender" type="radio" class="radiobtns" value="male" checked required/> Male 
		<input name="gender" type="radio" class="radiobtns" value="female" required/> Female <br> <br>
		
		<label><b>Username:</b></label><br>
		<input name="username" type="text" class="inputvalues" placeholder="Enter username" required/> <br> <br>
		<label><b>Password:</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Enter Password" required/><br>
		<input name ="submit_btn" type="submit" id="signup_btn" value ="Sign up"/><br>
		<a href="index.php"><input type="button" id="previous_btn" value ="Previous"/></a>
	
	</form>
	
	<?php
		if(isset($_POST ['submit_btn']))
		{
			 $fullname = $_POST['fullname'];
			 $gender = $_POST['gender'];
			 $username = $_POST['username'];
			 $cpassword = $_POST['cpassword'];
			 
				$query = "select * from userinfo WHERE username = '$username' "; 
				 
				$query_run = mysqli_query($con,$query);
				 
				if(mysqli_num_rows($query_run) > 0)
				{
						echo '<script type="text/javascript"> alert("User already exists, please enter a diferent username")</script>';
				} else {
					$query = "insert into userinfo values ('','$username', '$fullname','$gender','$cpassword')";
					$query_run = mysqli_query($con, $query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("Register successful")</script>';
					}
					
					else {
						echo '<script type="text/javascript"> alert("Error")</script>';
						
					}
					
					
					
					
					
					
				}					
				 
			 
			 
			 
			 // echo '<script type="text/javascript"> alert("Clicked")</script>';
		}
	
	?>
	</div>
</body>
</html>