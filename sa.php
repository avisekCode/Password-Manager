<?php 
$conn = mysqli_connect("localhost","root","","abhipswd");
	$query = "SELECT password FROM credentials WHERE username = 'abhi' ";

	$result = mysqli_query($conn, $query);

	$name = mysqli_fetch_assoc($result);

	echo $name['password'];
	

 ?>