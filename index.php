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
printf("Reading data from table: \n");
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
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
    <?php print_r($names);?>
   
</body>
</html>
