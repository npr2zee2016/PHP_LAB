<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TYPE (PHP)</title>
</head>
<body>

<h2>DATA TYPE (PHP)</h2>

<?php

  // Ex 1
  $x = "Hello world!";
  $y = 'Hello world!';

  echo $x;
  echo "<br>";
  echo $y;
  echo "<br>";

  // Ex 2
  $x = 5985;
  var_dump($x);
  echo "<br>";

  // Ex 3
  $x = 10.365;
  var_dump($x);
  echo "<br>";

  // Ex 4
  $cars = array("Volvo","BMW","Toyota");
  var_dump($cars);
  echo "<br>";

  // Ex 5
  class Car {
      public $color;
      public $model;
      public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
      }
      public function message() {
        return "My car is a " . $this->color . " " . $this->model . "!";
      }
    }
    
    $myCar = new Car("black", "Volvo");
    echo $myCar -> message();
    echo "<br>";
    $myCar = new Car("red", "Toyota");
    echo $myCar -> message();
  
  // Ex 6
  $x = "Hello world!";
  $x = null;
  var_dump($x);

?>

</body>
</html>