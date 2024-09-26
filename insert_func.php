<?php



	$user = 'root';
	$password = '';
	$database = 'abhipswd';
	$servername='localhost:3306';
	$mysqli = new mysqli($servername, $user,
		$password, $database);

	// Checking for connections
	if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
	}

	// SQL query to select data from database
	$sql = " SELECT * FROM password ORDER BY SNo ASC ";
	$result = $mysqli->query($sql);
	$mysqli->close();
	?>
	<!-- HTML code to display data in tabular format -->

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Shine Resunga Development Bank</title>
		<script type="text/javascript" src="jquery-3.6.1.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">

		<!-- CSS FOR STYLING THE PAGE -->
		<style>
		.div-left{
			float: left; width: 40%; margin-left: 60px;
			padding-top: 10px; padding-bottom: 10px; }

		.div-right{
			float: right; width: 24%; padding-top: 10px;
			padding-bottom: 10px; }
		</style>
	</head>

	<body>
		<section>
			<div class="tag tag-left">
				 <h1><img src="logo.png" width="265px" height="50px" style="padding-top: 6px;">
				<img src="safe-box.png" width="34px" height="34px" style="padding-top: 6px; padding-left: 250px"> SRDBL</h1>
			</div>

			<div class="tag-right">
				<h3 class='welcome'><img src="user3.png"><br> <a href="logout.php">Log Out</a></h3>
				
			</div>

	<!--<h1>Password Vault</h1> -->
	<!-- SEARCH BAR  -->
		<div class="div-left">
			<form action="search_page.php" method="post">
				<div class="search"> <img src="search.png" width="22px" height="22px"><input id="search" name='search' type="text" placeholder="Software Name" style="border:none"> </div>
				<!--<input id="submit" type="submit" value="Search"> -->
			</form>
		</div>


	<?php
	if(isset($_GET['msg'])) {
	echo "<script>"."alert('Invalid SNo !!');"."</script>";
	/*echo "<h4 style='color:red; text-align:center; font-size:20px;'> Invalid SNo</h4>";*/
	}
	?>

	<!-- TABLE CONSTRUCTION -->
	<form action="insert.php" method="post">
		<table>
			<tr>
			
				<th>Software Name</th>
				<th>UserName</th>
				<th>Password</th>
				<th>Link</th>
			</tr>
			<?php
				while($rows=$result->fetch_assoc())
				{
			?>
		<tr>
			<td><?php echo $rows['Name'];?></td>
			<td><?php echo $rows['Username'];?></td>
			<td> <input type="password" value="<?php echo $rows['Kpswd'];?>" id="myInput"> <input type="checkbox" onclick="myshow()">Show</td>
			<td> <a href="<?php echo $rows['Link'];?>" target="_blank"><?php echo $rows['Link'];?> </a></td>
			<td><a href="del_handler.php?val=<?php echo $rows['SNo'];?>"> <img class="delete-row" src="delete.png" width="20px" height="20px" onclick="confirmAction()"> </a>	</td>
		</tr>
		<?php
			}
		?>
		</table>
	</form>
	</section>

	<script type="text/javascript">
		function myaddrow() {
			$(".add-row").click(function () {
			    addRow = "<tr id='mytable'> <td><input type='text' name='Name' required></td>   <td><input type='text' id='myInput' name='Username' required></td>   <td><input type='text' name='Kpswd' required></td> <td><input type='text' name='Link' required> <input type='submit' value='Insert/Add'> </td></tr>";
			    tableBody = $("table tbody");
			    tableBody.append(addRow);

			    var something = (myaddrow() {
			    var executed = false;
			    return myaddrow() {
			        if (!executed) {
			            executed = true;
			            // do something
					        }
					    };
					});
			});
		};

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
	<button class="add-row"> Add row </button>
	
</body></html>
