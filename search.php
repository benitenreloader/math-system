<html>
<head>
<title></title>
</head>
<body>
<?php
 mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("crud") or die(mysql_error());
    $query = $_GET['query']; 
  if(strlen($query))
  { 
        $query = htmlspecialchars($query); 
        $query = mysql_real_escape_string($query);  
  echo "<table border='1'>";
  echo "<tr align='center'>
		<td><b>Firstname</b></td>
		<td><b>Lastname</b></td>
		<td><b>Username</b></td>
		<td><b>Action</b></td>
		</tr>";     
        $result = mysql_query("SELECT * FROM users WHERE is_deleted='0' AND (`lastname` LIKE '%".$query."%') OR (`firstname` LIKE '%".$query."%') OR (`username` LIKE '%".$query."%')") or die(mysql_error()); 
        if(mysql_num_rows($result) > 0)
  {
            while($results = mysql_fetch_array($result))
   { 
                echo "<tr align='center'>
						<td>".$results['firstname']."</td> 
						<td>".$results['lastname']."</td>
						<td>".$results['username']."</td>
						<td><a href='edit.php?id={$results['id']}'>Edit/</a>
						<a href='delete.php?id={$results['id']}'>Delete</a></td>
						</tr>";
            }      
        }
        else{ 
            echo "<tr align='center'><td colspan='2' height='25px'>Sorry..No results for $query</td><tr>"; 
   echo "</table>";  
        }   
    }
    else{ 
        echo "No records found!";
    }
?>
</body>
</html>