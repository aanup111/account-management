<?php
session_start();
?>

<!DOCTYPE htlm>
<html>
<head>
<title>Home page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style ="background-color:#1abc9c">
	
	<div id ="main">
	<center><h1>Welcome
			<?php echo $_SESSION['username'] ?>
	
	</h1></center>
	<form class ="myform" action="home.php" method="post">
	<input name= "log" type="submit" id="logout_btn" value ="Log Out"/>
	
	</form>

		<?php 
		
		if(isset($_POST['log']))
		{
			session_destroy();
			header('location:index.php');	
			echo '<script type="text/javascript"> alert("Error")</script>';
		} 	
		?>





	</div>
</body>
</html>