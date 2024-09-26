<?php 

	$con = mysqli_connect("localhost", "root", "", "abhipswd");
			$newname = $_POST['name'];
			$newusername = $_POST['username'];
			$str = $_POST['kpswd'];
			$newlink = $_POST['link'];
			$salt = '`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+`!~,+,`+`~+==+~,+,`+`~+';

			$key = trim($data,$salt);
       		$hash = $salt.$str.$salt;
			
				//$query = "UPDATE password SET Kpswd = $newpswd WHERE Name = 'mail';";
				//$query = "UPDATE password SET Kpswd = '$newpswd' WHERE Name = '$Name' "; 


			$query = "UPDATE password SET Username='$newusername', Kpswd='$hash', Link='$newlink' WHERE Name='$newname'";
				if(mysqli_query($con, $query)) {
					header('Location: dashboard.php');
				}
				else {
					echo "Mysqli Error";
				}
			
		mysqli_close($con);
		
	?>  */