<?php // conessione al database per gli utenti
$dbhost="localhost";
$username="root";
$password="";

$db_name="test_db";

$conn=mysqli_connect($dbhost,$username,$password,$db_name);

if (!$conn) {
    echo "Connection failed!";
}