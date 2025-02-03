<?php
$host = 'localhost'; // Database host
$username = 'Kevin_Andrea'; // Database username
$password = 'Kevin_Tampan'; // Database password
$dbname = 'MyDribble'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
