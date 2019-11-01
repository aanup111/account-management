<?php
	session_start();
	require 'dbconfig/config.php';
?>

<!DOCTYPE htlm>
<html>
<head>
<title>Login page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#1abc9c">
	
	<div id ="main">
	<center><h2>Welcome</center>
	
	
	
	<form class ="myform" action="index.php" method="post">
		<label><b>Username:</b></label><br>
		<input name = "username" type="text" class="inputvalues" placeholder="Enter your username" required/> <br> <br>
		<label><b>Password:</b></label><br>
		<input name ="cpassword" type="password" class="inputvalues" placeholder="Enter your password" required/><br>
		<input name ="login" type="submit" id="login_btn" value ="Login"/><br>
		<a href="register.php"><input type="button" id="register_btn" value ="Register"/></a>
	
	</form>
	
	<?php
		
		if(isset($_POST['login']))
		
		{
			 $username =$_POST['username'];
			 $cpassword =$_POST['cpassword'];
			 $query = "select * from userinfo WHERE username = '$username' AND password = '$cpassword'";
			 $query_run = mysqli_query($con,$query);
			 
			 if(mysqli_num_rows($query_run) > 0) {
				 $_SESSION['username'] = $username;
				 header('location:home.php');
				 
			 } else {
				 echo '<script type="text/javascript"> alert("Invalid username or password")</script>';
				 
			 }
		}
	?>
	
	
	</div>
</body>
</html>