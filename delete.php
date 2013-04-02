<html>
<head>
<title>CRUD</title>
</head>
<body>
<?php
	include 'db_connect.php';
	if($_GET['id']){
		$query = "UPDATE users set is_deleted='1' WHERE id = ".$mysqli->real_escape_string($_GET['id'])."";
	if( $mysqli->query($query) ){
		header('Location:display.php');
	}else{
		echo "Database Error: Unable to delete record.";
	}
	}
</script>
</body>
</html>
