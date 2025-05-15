<?php
session_start();

$username = "user";
$password = "password"; 

if (isset($_POST['username']) && isset($_POST['password'])) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username === $username && $input_password === $password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $input_username;
        $_SESSION['login_time'] = time();  

        setcookie('username', $input_username, time() + (86400 * 30), "/"); // 30 days

        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password!";
    }
} else {
    echo "Please enter both username and password!";
}
?>
