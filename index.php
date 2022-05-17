 <?php
$host = 'mysqlserverale.mysql.database.azure.com';
$username = 'ale@mysqlserverale';
$password = 'Tornado97.';
$db_name = 'test';

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
  
    
    //Run the Select query

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
<body>
<h1>Database search</h1>
<div class="container">
	<div class="row">
		<?php foreach ($names as $names){?>
			<div class="col s6 md3">
				<div class="card-content center">
					<h4><?php echo htmlspecialchars($names['name']);
					echo htmlspecialchars($names['surname']);?></h4>
				</div>
			</div>
		<?php } ?>
	</div>
</div>	
 
   
</body>
</html>
