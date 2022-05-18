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
<center>
<h1>Database search</h1>

<table>
<form action="index.php" method="post">
<tr>	

<td><input size="4" type="text" placeholder="ID.." name="id_search"></td>
<td><input type="text" placeholder="Name.." name="search"></td>
<td><input type="text" placeholder="Phone number.." name="search"></td>
<td><input type="text" placeholder="Department.." name="search"></td>

</tr>	
<tr>
<th colspan="5"><input style="width:100%" type="submit" value="Search"></th>
</tr>
</form>	  

		
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Department</th>
	</tr>
		
	<?php

	$search = $_POST['id_search'];
	if($search !== ""){
	if(isset($search)){

		$sql = "SELECT id, name, department, phone_number FROM employees1 WHERE name like '%{$search}%'" ;
		$result = mysqli_query($conn, $sql);   
		if ($result-> num_rows >0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["department"] . "</td></tr>";
	
			}
		echo "</table>";
		}
		else{echo "No Results";}



	}
}

	?>
</center>




   
</body>
</html>
