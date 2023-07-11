<?php
// HERE add your data for connecting to MySQ database
$host = 'localhost'; // MySQL server address
$user = 'u_connection_log'; // User name
$pass = 'sqlgop90_'; // User`s password
$dbname = 'mysql'; // Database name

// connect to the MySQL server
$mysqli = new mysqli($host, $user, $pass, $dbname);

$result = $mysqli->query("SELECT COUNT(DISTINCT IP) AS visitor_count FROM connection_log;");

$number = 0;

if ($result->num_rows > 0) {
  // output data of each row
  	$row = $result->fetch_assoc();
	$number = $row["visitor_count"];
} else {
  $number = "0 results";
}

$end = substr("$number", -1);
$classifier = "th";

if ($end == '1') {
	$classifier = "st";
} else if ($end == '2') {
	$classifier = "nd";
}

echo "You are the ".$number.$classifier." visitor.";


// check connection
if (mysqli_connect_errno()) exit('Connect failed: '. mysqli_connect_error());


$mysqli->close();
?>
