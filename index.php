<?php
include 'database.php';

// Fetch options from the database
$processors = mysqli_query($conn, "SELECT * FROM processors");
$graphicCards = mysqli_query($conn, "SELECT * FROM graphic_cards");
$resolutions = mysqli_query($conn, "SELECT * FROM resolutions");
$purposes = mysqli_query($conn, "SELECT * FROM purposes");

// Initialize result variable
$result = null;

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $processor = $_POST['processor'];
    $graphicCard = $_POST['graphic_card'];
    $resolution = $_POST['resolution'];
    $purpose = $_POST['purpose'];

    // Dummy bottleneck calculation logic (replace with actual logic)
    $result = rand(0, 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PC Bottleneck Calculator - Calculate your PC bottleneck with ease.">
    <link rel="stylesheet" href="style.css">
    <title>PC Bottleneck Calculator</title>
</head>
<body>
    <div class="calculator-container">
        <h1>PC Bottleneck Calculator</h1>
        <form action="" method="POST">
            <label for="processor">Processor:</label>
            <select name="processor" id="processor" required>
                <?php while ($row = mysqli_fetch_assoc($processors)) { ?>
                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                <?php } ?>
            </select>

            <label for="graphic_card">Graphic Card:</label>
            <select name="graphic_card" id="graphic_card" required>
                <?php while ($row = mysqli_fetch_assoc($graphicCards)) { ?>
                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                <?php } ?>
            </select>

            <label for="resolution">Screen Resolution:</label>
            <select name="resolution" id="resolution" required>
                <?php while ($row = mysqli_fetch_assoc($resolutions)) { ?>
                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                <?php } ?>
            </select>

            <label for="purpose">Purpose:</label>
            <select name="purpose" id="purpose" required>
                <?php while ($row = mysqli_fetch_assoc($purposes)) { ?>
                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                <?php } ?>
            </select>

            <button type="submit">Calculate</button>
        </form>

        <?php if ($result !== null) { ?>
            <div class="result">
                <h2>Result:</h2>
                <div class="progress-container">
                    <div class="progress-bar" style="width: <?= $result; ?>%;"></div>
                </div>
                <p>The bottleneck for your selected configuration is <strong><?= $result; ?>%</strong>.</p>
                <?php if ($result > 75) { ?>
                    <p class="message warning">High bottleneck detected! Consider upgrading your hardware.</p>
                <?php } elseif ($result > 40) { ?>
                    <p class="message moderate">Moderate bottleneck detected. Your setup is decent but can be optimized.</p>
                <?php } else { ?>
                    <p class="message success">Low bottleneck! Your hardware configuration is optimal.</p>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
