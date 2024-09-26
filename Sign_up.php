<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PMS | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body class="login-body">
<div class="main">	
		<div class="image">
			<img src="image.png" style="width: 1680px; height: 1530px;">
		</div>

	<div class="login-tag">
		<h1 class="heading">New User Form</h1>
	</div>
	
	<div class="container">
			<form action="signup_handler.php" method="post">
				<fieldset style="width:350px">
				
				<label>Username: 
					<input type="text" name="adduser" required>
				</label><br> <br> 

				<label>Password:
					<input type="password" name="addpswd" placeholder="Enter Password" required>
				</label><br>

				<label>
					<input type="password" name="re-password" placeholder="Re-type Password">
				</label>


				<input type="submit" value="Sign Up">
				</fieldset>
			</form>

			<?php 

			if (isset($_GET['msg'])) {
				echo "<script>";
				echo "alert('Sign UP error')";
				echo "</script>";
			}

			 ?>


	</div>
</div>
</body>
</html>