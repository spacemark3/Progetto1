<?php 
$host = "localhost";
$username = "root";
$password = "123";
$db_name = "homestead";

$conn = new mysqli($host, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Failed to connect to MySQL: " . $conn->connect_error);
}

return $conn;

?>
