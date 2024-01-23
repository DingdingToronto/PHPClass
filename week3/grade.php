<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Student Grade</title>
</head>
<body>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate a new random score when the form is submitted
    $score = rand(0, 100);
} else {
    // Generate a random score initially
    $score = rand(0, 100);
}

// Determine the grade using an if statement
if ($score > 90) {
    $grade = 'A+';
} elseif ($score >= 85) {
    $grade = 'A';
} elseif ($score >= 80) {
    $grade = 'B';
} elseif ($score >= 75) {
    $grade = 'C';
} elseif ($score >= 70) {
    $grade = 'D';
} elseif ($score >= 65) {
    $grade = 'E';
} else {
    $grade = 'F';
}

// Display the result on the web page
echo "<h1>Random Student Grade</h1>";
echo "<form method='post'>";
echo "<p>Randomly Generated Score: $score</p>";
echo "<p>Grade: $grade</p>";
echo "<input type='submit' value='Refresh'>";
echo "</form>";
?>

</body>
</html>


