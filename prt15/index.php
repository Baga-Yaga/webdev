<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head><title>User List</title></head>
<body>
    <h2>Add User</h2>
    <form action="insert.php" method="POST">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        <input type="submit" value="Add User">
    </form>

    <h2>User List</h2>
    <table border="1">
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>
        <?php
        $result = $conn->query("SELECT * FROM users");
        while($row = $result->fetch_assoc()):
        ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td>
                <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
