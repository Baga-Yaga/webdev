<?php
$host = 'localhost';
$user = 'root';
$pass = 'root'; // replace with your actual password
$dbname = 'userdb';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
