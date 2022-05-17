
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Hello, World!</title>
</head>
<body>
        <h1><?php echo 'Hello, World!'; ?></h1>
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
echo "<br>"
$res = mysqli_query($conn, 'SELECT name, surname FROM credentials');
$result = $conn->query($res);    
if ($result->num_rows > 0){
    while ($row = $result -> mysqli_fetch_assoc()){
        echo "Name: " . $row["name"]. " " . $row["surname"]. "<br>";
}
} else {
  echo "0 results";
}        

?>
</body>
</html>
