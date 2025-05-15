<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id = $id");
$row = $result->fetch_assoc();
?>
<form method="POST" action="update_save.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br>
    Email: <input type="email" name="email" value="<?= $row['email'] ?>"><br>
    <input type="submit" value="Update">
</form>
