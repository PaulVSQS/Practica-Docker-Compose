<?php
$host = 'mysql';
$user = 'root';
$password = getenv('MYSQL_ROOT_PASSWORD');
$database = 'test_db';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully";
$conn->close();
?>
