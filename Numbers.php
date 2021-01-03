<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers (PHP)</title>
</head>
<body>

<h2>Numbers (PHP)</h2>

<?php

    // Ex 1
    $x = 5985;
    var_dump(is_int($x));
    echo "<br>";

    $x = 59.85;
    var_dump(is_int($x));
    echo "<br>";

    // Ex 2
    $x = 10.365;
    var_dump(is_float($x));
    echo "<br>";

    // Ex 3
    $x = 1.9e411;
    var_dump($x);
    echo "<br>";

    // Ex 4
    $x = acos(8);
    var_dump($x);
    echo "<br>";
    
    // Ex 5
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "5985";
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "59.85" + 100;
    var_dump(is_numeric($x));
    echo "<br>";

    $x = "Hello";
    var_dump(is_numeric($x));
    echo "<br>";
    
    // Ex 6
    $x = 23465.768;
    $int_cast = (int)$x;
    echo $int_cast;

    echo "<br>";

    // Cast String to Int
    $x = "23465.768";
    $int_cast = (int)$x;
    echo $int_cast;

?>
    
</body>
</html>