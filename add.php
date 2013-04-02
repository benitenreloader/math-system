</strong>
<html>
<head>
<title>CRUD</title>
</head>
<body>
	<?php
	$action = isset($_POST['action']) ? $_POST['action'] : "";
		if($action=='create'){ 
		include 'db_connect.php';
		$query = "insert into users set firstname = '".$mysqli->real_escape_string($_POST['firstname'])."',
										lastname = '".$mysqli->real_escape_string($_POST['lastname'])."',
										username = '".$mysqli->real_escape_string($_POST['username'])."',
										password  = '".$mysqli->real_escape_string($_POST['password'])."'";

		if( $mysqli->query($query) ) {
			echo "User was created.";
		}else{
			echo "Database Error: Unable to create record.";
		}
		$mysqli->close();
}
?>

<form action='#' method='post' border='0'>
<table>
<tr>
<td>Firstname</td>
<td><input type='text' name='firstname' /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type='text' name='lastname' /></td>
</tr>
<tr>
<td>Username</td>
<td><input type='text' name='username' /></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='password' /></td>
<tr>
<td></td>
<td>
<input type='hidden' name='action' value='create' />
<input type='submit' value='Save' />
<a href='display.php'>Back to index</a>
</td>
</tr>
</table>
</form>
</body>
</html>
