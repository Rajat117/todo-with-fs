<?php
$servername = "localhost";
$username = "root";
$password = "goldtree9";
$dbname = "todo"; 

$conn = new mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>