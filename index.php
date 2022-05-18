<?php
include('config/db_connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
 	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Database search</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<center>
<h1>Database search</h1>

<table>
<form action="index.php" method="post">
<tr>	

<td><input type="text" placeholder="ID.." name="id_search"></td>
<td><input type="text" placeholder="Name.." name="name_search"></td>
<td><input type="text" placeholder="Phone number.." name="pn_search"></td>
<td><input type="text" placeholder="Department.." name="dept_search"></td>

</tr>	
<tr>
<th style="border: none; padding: 8px 0;" colspan="5"><input style="width:100%" type="submit" value="Search" ></th>
</tr>
</form>	  

		
	<tr class="border">
		<th>ID</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Department</th>
	</tr>
		
	<?php

	$id_search = $_POST['id_search'];
	$name_search = $_POST['name_search'];
	$pn_search = $_POST['pn_search'];
	$dept_search = $_POST['dept_search'];

	if($id_search !== "" || $name_search !== "" || $pn_search !== "" || $dept_search !== ""){
	if(isset($id_search) || isset($name_search) || isset($pn_search) || isset($dept_search)){

		$sql = "SELECT id, name, department, phone_number FROM employees1 WHERE id like '%{$id_search}%' and name like '%{$name_search}%' and phone_number like '%{$pn_search}%' and department like '%{$dept_search}%'" ;
		$result = mysqli_query($conn, $sql);   
		if ($result-> num_rows >0){
			while ($row = $result-> fetch_assoc()){
				echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["phone_number"] . "</td><td>" . $row["department"] . "</td></tr>";
	
			}
		echo "</table>";
		}
		else{echo "</table><h1>No Results</h1>";}



	}
}

	?>
</center>




   
</body>
</html>
