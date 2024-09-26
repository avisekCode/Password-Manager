<?php 

	$con = mysqli_connect("localhost", "root", "", "abhipswd");
			$num = $_GET['val'];

			$query = "DELETE FROM password WHERE SNo = $num ";

			if(mysqli_query($con, $query)) {
				header('Location: dashboard.php');
			}
			else {
				echo "**************";
			}

		mysqli_close($con);


		
	?>