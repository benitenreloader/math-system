</strong>
<?php
include 'db_connect.php';
	$action = isset( $_POST['action'] ) ? $_POST['action'] : "";
	if($action == "update"){
	$query = "update users set firstname = '".$mysqli->real_escape_string($_POST['firstname'])."',
								lastname = '".$mysqli->real_escape_string($_POST['lastname'])."',
								username = '".$mysqli->real_escape_string($_POST['username'])."',
								password  = '".$mysqli->real_escape_string($_POST['password'])."'
								where id='".$mysqli->real_escape_string($_REQUEST['id'])."'";
	if( $mysqli->query($query) ) {
		echo "User was updated.";
	}else{
		echo "Database Error: Unable to update record.";
	}
	}
	$query = "select id, firstname, lastname, username, password from users where id='".$mysqli->real_escape_string($_REQUEST['id'])."' limit 0,1";
	$result = $mysqli->query( $query );
	$row = $result->fetch_assoc();
	$id = $row['id'];
	$firstname = $row['firstname'];
	$lastname = $row['lastname'];
	$username = $row['username'];
	$password = $row['password'];
?>

<form action='#' method='post' border='0'>
<table>
<tr>
<td>Firstname</td>
<td><input type='text' name='firstname' value='<?php echo $firstname;  ?>' /></td>
</tr>
<tr>
<td>Lastname</td>
<td><input type='text' name='lastname' value='<?php echo $lastname;  ?>' /></td>
</tr>
<tr>
<td>Username</td>
<td><input type='text' name='username'  value='<?php echo $username;  ?>' /></td>
</tr>
<tr>
<td>Password</td>
<td><input type='password' name='password'  value='<?php echo $password;  ?>' /></td>
<tr>
<td></td>
<td>
<input type='hidden' name='id' value='<?php echo $id ?>' />
<input type='hidden' name='action' value='update' />
<input type='submit' value='Edit' />
<a href='display.php'>Back to display page</a>
</td>
</tr>
</table>
</form>
