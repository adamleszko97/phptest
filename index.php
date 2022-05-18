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

		
		<form>
  		<input type="text" placeholder="Search.." name="search_value">
  		<imput type="text" name="search" value="Search">
<table>			
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Phone number</th>
		<th>Department</th>
	</tr>
</table>
	
</center>




   
</body>
</html>
