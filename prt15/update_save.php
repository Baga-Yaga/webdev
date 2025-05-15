<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name=?, email=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $name, $email, $id);

if ($stmt->execute()) {
    header("Location: index.php");
} else {
    echo "Update failed!";
}
?>
