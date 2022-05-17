<?php
$host = 'mysqlserverale.mysql.database.azure.com';
$username = 'ale@mysqlserverale';
$password = 'Test12345!';
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
?>