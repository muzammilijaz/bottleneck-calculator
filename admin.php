<?php
include 'database.php';

// Handle form submissions for adding options
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $name = $_POST['name'];
    mysqli_query($conn, "INSERT INTO $type (name) VALUES ('$name')");
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="admin-container">
        <h1>Admin Dashboard</h1>
        <form action="" method="POST">
            <label for="type">Select Type:</label>
            <select name="type" id="type" required>
                <option value="processors">Processor</option>
                <option value="graphic_cards">Graphic Card</option>
                <option value="resolutions">Screen Resolution</option>
                <option value="purposes">Purpose</option>
            </select>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>
