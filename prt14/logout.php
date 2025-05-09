<?php
session_start();

session_unset();
session_destroy();

if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, '/'); // Delete cookie
}

header("Location: login.php");
exit;
?>
