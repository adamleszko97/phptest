<?php

include('config/db_connect.php');

$sql = 'SELECT id, name, department, phone number FROM employees';
$result = mysqli_query($conn, $sql);   

echo "<br>";


mysqli_free_result($result);

mysqli_close($conn);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database search</title>
</head>
<body style="background-color:lightgray;">
<h1>Database search</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Department</th>
	</tr>
	<?php
		if ($result-> num_rows >0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone number"] . "</td><td>" . $row["department"] . "</td></tr>";

			}
echo "</table>"
	}
else{
	echo "No Results";
}
	?>

 
   
</body>
</html>
