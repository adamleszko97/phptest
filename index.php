<?php

include('config/db_connect.php');


$result = mysqli_query($conn, "SELECT ID, department FROM employees'");   
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
<?php echo htmlspecialchars($result['ID']);
					echo "&nbsp";	 
					echo htmlspecialchars($result['department']);?>
   
</body>
</html>
