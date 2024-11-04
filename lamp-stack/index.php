<?php
require 'db.php';

// Fetch existing entries
$query = $pdo->query("SELECT * FROM entries ORDER BY created_at DESC");
$entries = $query->fetchAll(PDO::FETCH_ASSOC);

// Handle new entry form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO entries (name, message) VALUES (?, ?)");
    $stmt->execute([$name, $message]);

    // Refresh the page to show the new entry
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Notes App</title>
</head>
<body>
    <h1>Notes</h1>
    <form action="index.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <br><br>
        <button type="submit">Create Note</button>
    </form>

    <hr>

    <h2>Entries</h2>
    <?php foreach ($entries as $entry): ?>
        <p><strong><?= htmlspecialchars($entry['name']) ?>:</strong> <?= htmlspecialchars($entry['message']) ?></p>
        <small>Posted on <?= $entry['created_at'] ?></small>
        <hr>
    <?php endforeach; ?>
</body>
</html>
