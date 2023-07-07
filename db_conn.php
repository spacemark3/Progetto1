<?php 
$host = "localhost";
$username = "root";
$password = "";
$db_name = "test_db";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
}

return $conn;

?>
