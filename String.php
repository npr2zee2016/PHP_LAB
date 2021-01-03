<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String (PHP)</title>
</head>
<body>
<h2>String (PHP)</h2>

<?php

    // Ex 1
    echo strlen("Hello world!"); // outputs 12
    echo "<br>";

    // Ex 2
    echo str_word_count("Hello world!"); // outputs 2
    echo "<br>";

    // Ex 3
    echo strrev("Hello world!"); // outputs !dlrow olleH
    echo "<br>";

    // Ex 4
    echo strpos("Hello world!", "world"); // outputs 6
    echo "<br>";

    // Ex 5
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
    echo "<br>";

?>

</body>
</html>