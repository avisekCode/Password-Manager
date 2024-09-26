<?php 
	$con = mysqli_connect("localhost", "root", "", "abhipswd");
	
	if ( $_POST['addpswd'] == $_POST['re-password'] ) {
		if (isset($_POST['adduser'])) {
			$Id = $_POST['adduser'];
			$key = $_POST['addpswd'];

			$salt = '~`~..,=`,=+.,`+.,=`,=`,=`,=+.,`+.,=`,=`,=+.,`+.,=~`~..,=`,=+.,`+.`~`~..,=`,=+.,`+.,=`,=`,=+.,`+.,=~`~..,=`,=+.,`+.``';
					
   			  $hash = $salt.$key.$salt;

			$query = "INSERT INTO credentials Values('$Id', '$hash')";

			if(mysqli_query($con, $query)) {
				header('Location: login.php?msg=added'); }
			   else {
				echo "Mysqli Error";
				}
		}	
	

	} else {
		header('Location: sign_up.php?msg=pswd_error');
	}

?>