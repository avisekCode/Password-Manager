<?php 

	$con = mysqli_connect("localhost", "root", "", "abhipswd");



		if (!empty($_POST['Name']) || !empty($_POST['Username']) || !empty($_POST['Kpswd']) || !empty($_POST['Link'])) {
		
			$name = $_POST['Name'];
			/*$username  ->  all acceptable*/
			$password = $_POST['Kpswd'];


			

			if( !preg_match('/^[a-z0-9A-Z.\/\\*!%($)&^!@#\-+_`~?]*$/', $name) ){
				header('Location: dashboard.php?msg=failed');
				}

			elseif (!preg_match('/^[a-z0-9A-Z.\/\\*!%($)&^!@#\-+_`~?]*$/', $password) ) {
				header('Location: dashboard.php?msg=pswd');
			}

			else {
				$SNo = $_POST['SNo'];
				$Name = $_POST['Name'];
				$Username = $_POST['Username'];
				$str = $_POST['Kpswd'];
				$Link = $_POST['Link'];
				$salt = '`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+';
						$key = trim($data,$salt);
       			  $hash = $salt.$str.$salt;

				$query = "INSERT INTO password Values('', '$Name', '$Username', '$hash', '$Link')";

				if(mysqli_query($con, $query)) {
					header('Location: dashboard.php');
				}
				else {
					echo "Mysqli Error";
				}
			}
		}
		mysqli_close($con);
		
	?>  */