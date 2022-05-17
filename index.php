 <?php

include('config/db_connect.php')

$sql = 'SELECT name, surname FROM credentials';
$result = mysqli_query($conn, $sql);   
$names = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
<div class="container">
	<div class="row">
		<?php foreach ($names as $names){?>
			<div class="col s6 md3">
				<div class="card-content center">
					<h4><?php echo htmlspecialchars($names['name']);
					echo "&nbsp";	 
					echo htmlspecialchars($names['phone number']);?></h4>
				</div>
			</div>
		<?php } ?>
	</div>
</div>	
 
   
</body>
</html>
