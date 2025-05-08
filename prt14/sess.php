<?php
session_start();

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

$_SESSION['name'] = $name;
$_SESSION['email'] = $email;

setcookie('name', $name, time() + 3600);
setcookie('email', $email, time() + 3600);

echo "<p>✅ Info saved in session and cookies!</p>";
echo "<p><a href='dis.php'>View Stored Data</a></p>";
?>
