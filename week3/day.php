<!DOCTYPE html>
<html>
<head>
    <title>PHP Random Day Switch</title>
</head>
<body>

    <h1>PHP Random Day Switch</h1>

    <?php
    // Array of days
    $daysOfWeek = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    // Generate a random index to select a day from the array
    $randomIndex = rand(0, count($daysOfWeek) - 1);

    // Get the randomly selected day
    $randomDay = $daysOfWeek[$randomIndex];

    echo '<p>Today is ' . $randomDay . '!</p>';

    switch ($randomDay) {
        case "Monday":
            echo "Sounds like someone has a case of the Mondays!";
            break;
        case "Tuesday":
            echo "It's Taco Tuesday!";
            break;
        case "Wednesday":
            echo "Hump day!";
            break;
        case "Thursday":
            echo "Almost there!";
            break;
        case "Friday":
            echo "TFIG!";
            break;
        case "Saturday":
            echo "Weekend vibes!";
            break;
        case "Sunday":
            echo "Lazy Sunday!";
            break;
        default:
            echo "Have a great day!";
            break;
    }
    ?>

</body>
</html>
