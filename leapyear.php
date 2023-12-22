<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>year</title>
</head>
<body>
<!-- <form action="">
  <label for="fname">year name:</label>
  <input type="text" id="fname" name="fname"><br><br>
  <input type="submit" value="Submit">
</form> -->
<?php

function is_leap_year($year) {
    return ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0));
}

$year = readline("Enter a year: ");

if (is_leap_year($year)) {
    echo "$year is a leap year.";
} else {
    echo "$year is not a leap year.";
}
?>

</body>
</html>