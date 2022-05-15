<?php session_start(); ?>

<?php
if(!isset($_SESSION['id'])) {
	header('Location: login.php');
}
?>

<html>
<head>
	<title>Add Users</title>
</head>

<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>

	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>

	<?php

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile']; 
		$users_id = $_SESSION['id'];

		?>

		<?php
		include("../path.php");
		include(ROOT_PATH . "/app/database/connect.php"); ?>

		<?php
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO datas(name,email,mobile,users_id) VALUES('$name','$email','$mobile','$users_id')");

		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
		header('Location: index.php');
		}
	?>
</body>
</html>