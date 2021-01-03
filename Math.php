<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math (PHP)</title>
</head>
<body>

<h2>Math (PHP)</h2>

<?php

    // Ex 1
    echo(pi()); // returns 3.1415926535898
    echo "<br>";

    // Ex 2
    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150
    echo "<br>";

    // Ex 3
    echo(abs(-6.7));  // returns 6.7
    echo "<br>";

    // Ex 4
    echo(sqrt(64));  // returns 8
    echo "<br>";

    // Ex 5
    echo(round(0.60));  // returns 1
    echo(round(0.49));  // returns 0
    echo "<br>";

    // Ex 6
    echo(rand());
    echo "<br>";
    
    // Ex 7
    echo(rand(10, 100));

?>

</body>
</html>