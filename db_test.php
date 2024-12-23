<?php
$host = 'databaseone.c7gmk6ywo6rb.us-east-1.rds.amazonaws.com';
$user = 'admin';
$password = 'Ox4qfGyFfqBDPVQ8vWGu';
$dbname = '-';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>
