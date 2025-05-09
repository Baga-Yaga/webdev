<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_GET['username'];
    $email = $_GET['email'];

    echo "<h3>Received Data:</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
} else {
    echo "Invalid request.";
}
?>
