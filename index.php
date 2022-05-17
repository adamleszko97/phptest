<?php
include('config/db_connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database search</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h1>Database search</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Department</th>
	</tr>
	<?php

	$sql = "SELECT * FROM information_schema.employees1 WHERE CONSTRAINT_NAME = 'ID'";
	$result = mysqli_query($conn, $sql);   
	if ($result-> num_rows >0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["department"] . "</td></tr>";

		}
	echo "</table>";
	}
	else{echo "No Results";}
	?>






   
</body>
</html>
