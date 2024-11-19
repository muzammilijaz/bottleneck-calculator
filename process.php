<?php
include 'database.php';

// Fetch selected options
$processor = $_POST['processor'];
$graphicCard = $_POST['graphic_card'];
$resolution = $_POST['resolution'];
$purpose = $_POST['purpose'];

// Dummy calculation (replace with real logic)
$bottleneckPercentage = rand(0, 100);

echo "<h1>Your Bottleneck Result</h1>";
echo "<p>The bottleneck for your selected configuration is $bottleneckPercentage%.</p>";
echo "<a href='index.php'>Go Back</a>";
?>
