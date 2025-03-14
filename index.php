<?php
include 'db.php';
$result = $conn->query("SELECT * FROM inquiry");
?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Inquiry Records</h2>
        <a href="create.php" class="button">Add New Record</a>
        <table>
            <tr><th>First Name</th><th>Last Name</th><th>Email</th><th>Comment</th><th>Actions</th></tr>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['firstName']) ?></td>
                    <td><?= htmlspecialchars($row['lastName']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['comment']) ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] }">Edit</a>
                        <a href="delete.php?id=<?= $row['id'] }" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>