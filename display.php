</strong>
<html>
<head>
<title>CRUD</title>
</head>
<body>
<?php
include 'db_connect.php';
?>
	<form action="search.php" method="get" >
	Please search here:
    <input type="text" name="query" id="text"  />
	<input type="submit" name="submit" id="search" value="Search" />
</form>
<?php
		$query = "select * from users where is_deleted='0'";
		$result = $mysqli->query( $query );
		$num_results = $result->num_rows;
			echo "<div><a href='add.php'>Create New Record</a></div>";
		if( $num_results > 0){ 
			echo "<table border='1'>";
			echo "<tr>";
			echo "<th>Firstname</th>";
			echo "<th>Lastname</th>";
			echo "<th>Username</th>";
			echo "<th>Action</th>";
			echo "</tr>";
		while( $row = $result->fetch_assoc() ){
		extract($row);
			echo "<tr>";
			echo "<td>{$firstname}</td>";
			echo "<td>{$lastname}</td>";
			echo "<td>{$username}</td>";
			echo "<td>";
			echo "<a href='edit.php?id={$id}'>Edit</a>";
			echo " / ";
			echo "<a href='delete.php?id={$id}'>Delete</a>";
			echo "</td>";
			echo "</tr>";
		}
			echo "</table>";//end table
		}else{
			echo "No records found.";
}
$result->free();
$mysqli->close();
?>
</body>
</html>
