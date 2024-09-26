<?php
session_start();
?>

<!-- PHP code to establish connection with the localserver -->
<?php

if(isset($_SESSION['username'])) {

	$name = $_SESSION['name'];
	
// Username is root
$user = 'root';
$password = '';
$database = 'abhipswd';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

	
$search = $_POST['search'];

// SQL query to select data from database
//$sql = "SELECT * FROM password WHERE Name LIKE '%".$search."%'";
$sql = "SELECT * FROM password WHERE Name = 'mail' ";
$result = $mysqli->query($sql);
$mysqli->close();


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Password Management System | SRDB</title>
	<script type="text/javascript" src="jquery-3.6.1.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<section>
		<h1>PMS</h1>

		<!-- TABLE CONSTRUCTION -->
			<form action="edit.php" method="post">
				<table>
					<tr>
						<th>Software Name</th>
						<th>UserName</th>
						<th>Password</th>
						<th>Link</th>
					</tr>

				<!-- PHP CODE TO FETCH DATA FROM ROWS -->
				<?php
					while($rows=$result->fetch_assoc())
					{
				?>
				<tr>
					<td><input type="text" value="<?php echo $rows['Name'];?> name="anem"></td>
					<td><input type="text" value="<?php echo $rows['Username'];?>"></td>
					<td> <input type="password" value="editable" id="myInput" onclick="myshow()" name="edit"> </td>
					<td><input type="text" value="<?php echo $rows['Link'];?>"></td>
					<td> <a href="<?php echo $rows['Link'];?>" target="_blank"> <?php echo $rows['Link'];?> </a></td>
					<td><a href="del_handler.php?val=<?php echo $rows['SNo'];?>"> <img class="delete-row" src="delete.png" width="20px" height="20px" onclick="confirmAction()"> </a>	</td>
					<td><input type="submit" name="update"></td>
				</tr>
				<?php
					}
				?>
			</table>
	</form>
	</section>

	<script type="text/javascript">
		function confirmAction() {
			alert("Deleted Sucessfully!");
		}


		function myshow() {
			var x = document.getElementById("myInput");
			if (x.type ==="password") {
				x.type = "text";
			} else {
				x.type = "password";
			}
		}	
	</script>

<?php  
	}

	else {
		echo "<h1 style='margin-left:550px'> Session Expired<h1>";	
		echo "<h3><a style='color:grey; text-decoration:none; margin-left:622px' href='index.php'>Login</a></h3>";
		}	
	?>

</body>

</html>
