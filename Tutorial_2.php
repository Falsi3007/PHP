<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL-2</title>
</head>
<body>
    <?php

    //Change Data Type - php casting

    //1. Cast to String 
    // $a = 5;       // Integer
    // $b = 5.34;    // Float
    // $c = "hello"; // String
    // $d = true;    // Boolean - in boolean not store true it's store as 1
    // $e = NULL;    // NULL

    // $a = (string) $a;
    // $b = (string) $b;
    // $c = (string) $c;
    // $d = (string) $d;
    // $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    // var_dump($a);
    // var_dump($b);
    // var_dump($c);
    // var_dump($d);
    // var_dump($e);

        // as per that all datatypes have same kind of structure to change that v=but two or three rule change for some special case

    //objects to array
    // class Car {
    //     public $color;
    //     public $model;
    //     public function __construct($color, $model) {
    //       $this->color = $color;
    //       $this->model = $model;
    //     }
    //     public function message() {
    //       return "My car is a " . $this->color . " " . $this->model . "!";
    //     }
    //   }
      
    //   $myCar = new Car("red", "Volvo");
      
    //   $myCar = (array) $myCar;
    //   var_dump($myCar);


//------------------------------------------------------------------------------------

//math

    // echo(pi());

    // echo(min(0, 150, 30, 20, -8, -200) . "<br>");
    // echo(max(0, 150, 30, 20, -8, -200));

    // echo(abs(-6.7));

    // echo(sqrt(64));

    // echo(round(0.50) . "<br>");
    // echo(round(0.49) . "<br>");
    // echo(round(-4.40) . "<br>");
    // echo(round(-4.60));

    // echo(rand());
    // echo(rand(10, 100));      // in this particular range is fix


//--------------------------------------------------------------------------------

    //constants
    define(name, value, case-insensitive);  //syntax : case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false. Note: Defining case-insensitive constants was deprecated in PHP 7.3. PHP 8.0 accepts only false, the value true will produce a warning.

    define("GREETING", "Welcome to falsi.com!");   //case sensitive
    echo GREETING;

    define("GREETING", "Welcome to W3Schools.com!", true);   //case insensitive
    echo greeting;

    define("cars", [
        "Alfa Romeo",
        "BMW",
        "Toyota"
      ]);
      echo cars[0];

    ?>
</body>
</html>