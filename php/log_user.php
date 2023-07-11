<?php
// HERE add your data for connecting to MySQ database
$host = 'localhost'; // MySQL server address
$user = 'u_connection_log'; // User name
$pass = 'sqlgop90_'; // User`s password
$dbname = 'mysql'; // Database name

// connect to the MySQL server
$mysqli = new mysqli($host, $user, $pass, $dbname);

// prepare statement
$statement_p = $mysqli->prepare("INSERT INTO mysql.connection_log(IP) VALUES (?)");
$statement_p->bind_param("s", $_SERVER['REMOTE_ADDR']);

// check connection
if (mysqli_connect_errno()) exit('Connect failed: '. mysqli_connect_error());

// Performs the $sql query on the server to create the table
if (!$statement_p->execute()) echo('Error: '. $mysqli->error);

$mysqli->close();
?>
