<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $username = $_SESSION['username'];
} elseif (isset($_COOKIE['username'])) {
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_COOKIE['username'];
    $username = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit;
}

$session_timeout = 15 * 60; 
if (isset($_SESSION['login_time']) && (time() - $_SESSION['login_time']) > $session_timeout) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

$_SESSION['login_time'] = time();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome to the Dashboard</h2>
    <p>Hello, <?php echo $username; ?>! You are logged in.</p>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
