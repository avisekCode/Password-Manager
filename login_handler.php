<?php 
session_start();
?>

<?php
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$salt = '~`~..,=`,=+.,`+.,=`,=`,=`,=+.,`+.,=`,=`,=+.,`+.,=~`~..,=`,=+.,`+.`~`~..,=`,=+.,`+.,=`,=`,=+.,`+.,=~`~..,=`,=+.,`+.``';
	$key = $salt.$password.$salt;


	$_SESSION['username'] = $_POST['username'];

	$conn = mysqli_connect("localhost","root","","abhipswd");
	$query = "SELECT * FROM credentials WHERE username = '$username' && password ='$key' ";

	$result = mysqli_query($conn, $query);

	$name = mysqli_fetch_assoc($result);

	$affected_rows = mysqli_affected_rows($conn);
	if($affected_rows == 1) {
		header('location:dashboard.php');
		$_SESSION['name'] = $name['username'];
	}

	else {
		header('location:login.php?msg=error');
	}

	mysqli_close($conn);
	

?>