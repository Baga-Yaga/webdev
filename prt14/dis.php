<?php
session_start();

$name_session = $_SESSION['name'] ?? 'Not set';
$email_session = $_SESSION['email'] ?? 'Not set';

$name_cookie = $_COOKIE['name'] ?? 'Not set';
$email_cookie = $_COOKIE['email'] ?? 'Not set';
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Stored Info</title>
</head>
<body>
    
    <h2>Stored Info from Session</h2>
    <p>Name: <?php echo htmlspecialchars($name_session); ?></p>
    <p>Email: <?php echo htmlspecialchars($email_session); ?></p>

    
</body>
</html>
