<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF ELSE (PHP)</title>
</head>
<body>

<h2>IF ELSE (PHP)</h2>

<?php

  // EX 1
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  }
  echo "<br>";

  // Ex 2
  $t = date("H");

  if ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }
  echo "<br>";
  
  // Ex 3
  $t = date("H");

  if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

?>

</body>
</html>