<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL-3</title>
</head>
<body>
    <?php

    //If 
    // $a = 200;
    // $b = 33;
    // $c = 500;
    // if ($a > $b && $a < $c ) {
    // echo "Both conditions are true";
    // }


    // $t = date("H");
    // if ($t < "10") {
    // echo "Have a good morning!";
    // } elseif ($t < "20") {
    // echo "Have a good day!";
    // } else {
    // echo "Have a good night!";
    // }

    // $a = 13;
    // $b = $a < 10 ? "Hello" : "Good Bye";
    // echo $b;


    //loops
    //1.while
    $i = 1;
    while ($i < 6) {
    echo $i;
    $i++;
    }   

    //2.do while
    $i = 8;
    do {
    echo $i;
    $i++;
    } while ($i < 6);

    //3.for
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    //4.foreach
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $x) {
    echo "$x <br>";
    }


    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
      }
    $myCar = new Car("red", "Volvo");
      

    foreach ($myCar as $x => $y) {
        echo "$x: $y <br>";
    }
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as &$x) {
    if ($x == "blue") $x = "pink";
    }
    var_dump($colors);
    

//---------------------------------------------------------------------------------------------------

    //function
    function familyName($fname) {
        echo "$fname Ref.<br>";
      }
      familyName("Jani");
      familyName("Hege");
      familyName("Stale");
      familyName("Kai Jim");
      familyName("Borge");
      
    
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }
      echo "5 + 10 = " . sum(5, 10) . "<br>";
      echo "7 + 13 = " . sum(7, 13) . "<br>";
      echo "2 + 4 = " . sum(2, 4);


      //Use a pass-by-reference argument to update a variable
      function add_five(&$value) {
        $value += 5;
      }
      $num = 2;
      add_five($num);
      echo $num;


      //using the variable number of arguments
      function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a;


      //prove the php is loosely typed lang
      function addNumbers(int $a, int $b) {
        return $a + $b;
      }
      echo addNumbers(5, "5 days");
      // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
    
      
    <?php declare(strict_types=1); // strict requirement
    function addNumbers(int $a, int $b) {
    return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // since strict is enabled and "5 days" is not an integer, an error will be thrown
    ?>

    ?>
</body>
</html>