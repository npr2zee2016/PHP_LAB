<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constants (PHP)</title>
</head>
<body>

<h2>Constants (PHP)</h2>

<?php

  // Ex 1
  define("GREETING", "Welcome to W3Schools.com!");
  echo GREETING;
  echo "<br>";

  // Ex 2
  define("GREETING", "Welcome to W3Schools.com!", true);
  echo greeting;
  echo "<br>";
  
  // Ex 3
  define("cars", [
      "Alfa Romeo",
      "BMW",
      "Toyota"
  ]);
  echo cars[0];
  echo "<br>";

?>

</body>
</html>