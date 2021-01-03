<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators (PHP)</title>
</head>
<body>

<h2>Operators (PHP)</h2>

<?php

    // Ex PHP Arithmetic Operators
    $x = 10;  
    $y = 6;

    echo $x + $y;
    echo "<br>";
    // Ex PHP Assignment Operators
    $x = 10;  
    echo $x;
    echo "<br>";
    // Ex PHP Comparison Operators
    $x = 100;  
    $y = "100";

    var_dump($x == $y);
    echo "<br>";
    // Ex PHP Logical Operators
    $x = 100;  
    $y = 50;

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
    echo "<br>";
    // Ex PHP String Operators
    $txt1 = "Hello";
    $txt2 = " world!";
    echo $txt1 . $txt2;
    echo "<br>";
    // Ex PHP Array Operators

    $x = array("a" => "red", "b" => "green");  
    $y = array("c" => "blue", "d" => "yellow");  

    print_r($x + $y);
    echo "<br>";
    // Ex PHP Conditional Assignment Operators

   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

?>  

</body>
</html>