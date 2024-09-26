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
			<img src="image.png" style="width: 1380px; height: 1030px;">
		</div>

	<div class="login-tag">
		<h1 class="heading">SRDBL - Password Management System</h1>
	</div>
	
	<div class="container">
			
			<form action="login_handler.php" method="post">
				<fieldset style="width:350px">
				<legend>Log In:</legend>

				<label>Username: 
					<input type="text" name="username">
				</label>

				<br> <br>
				<label>Password:
					<input type="password" name="password">
				</label>

				
			
				<?php   
					 if (isset($_GET['msg']) && $_GET['msg']=="error") {
						//echo "<strong style='opacity:1; color:white;font-size:24px'> Incorrect Username/Password </strong>";
						echo "<script>";
						echo "alert('Inavlid Username/passwprd')";
						echo "</script>";
						} 

					elseif (isset($_GET['msg']) && $_GET['msg']=="added")  {
						echo "<script>"; 
						echo "alert('New User Added')";
						echo "</script>";
					}

				?>  

				<br><br>


				
				<input type="submit" value="Log In">
				</fieldset>

				<a style="color:white; font-size: 20px; " href="sign_up.php">Not a user?</a>
			</form>

	</div>
</div>
</body>
</html>