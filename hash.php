<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
		<input type="text" name="pswd">
		<input type="submit" >
	</form>

	<?php

	 if(isset($_POST['pswd'])) {
	 	$pswd = $_POST['pswd'];

	 	$hash = password_hash($pswd, PASSWORD_DEFAULT);

	 	if (password_verify($pswd, $hash)){
	 		echo $hash;
	 	} else {
	 		echo "not amatched";
	 	}


	 } 


	 ?>

</body>
</html>