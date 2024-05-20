<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    //variable
    $txt = "MS Dhoni";
    echo "I love $txt!";  
   
    $x = 5;
    $y = 4;
    echo $x + $y;

    //Assign multiple var
    $x = $y = $z = "Fruit";
    echo $x;
    echo $y;
    echo $z;


//-----------------------------------------------------------------------------

    //PHP supports the following data types:
    // String
    // Integer
    // Float (floating point numbers - also called double)
    // Boolean
    // Array
    // Object
    // NULL
    // Resource


//-----------------------------------------------------------------------------

    //The var_dump() function returns the data type and the value:
    var_dump(5);
    var_dump("John");
    var_dump(3.14);
    var_dump(true);
    var_dump([2, 3, 56]);
    var_dump(NULL);


//-----------------------------------------------------------------------------

    //variable scope
    //1.global
        $x = 5; // global scope
    
    function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    } 
    myTest();

    echo "<p>Variable x outside function is: $x</p>";


    //2.local
    function myTest() {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
      } 
      myTest();
      
      // using x outside the function will generate an error
      echo "<p>Variable x outside function is: $x</p>";


//-----------------------------------------------------------------------------

    // The global keyword is used to access a global variable from within a function.
    // $x = 5;
    // $y = 10;
    // function myTest()
    // {
    //     global $x, $y;
    //     $y = $x + $y;
    // }
    // myTest();
    // echo $y; // outputs 15
    
    // We can also access as an Array of Global Variables where index is the name of variables
    // $x = 5;
    // $y = 10;
    // function myTest()
    // {
    //     $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    // }
    // myTest();
    // echo $y; // outputs 15


//------------------------------------------------------------------------------

// local variable NOT to be deleted -> static variable is used
    // If we remove static then it will print "000"
    // function myTest()
    // {
    //     static $x = 0;
    //     echo $x;
    //     $x++;
    // }
    // myTest(); //0
    // myTest(); //1
    // myTest(); //2


//------------------------------------------------------------------------------------

//The differences are small: 
    //echo has no return value while print has a return value of 1 so it can be used in expressions.
    //echo can take multiple parameters (although such usage is rare) while print can take one argument. 
    //echo is marginally faster than print.

        // echo "I'm about to learn PHP!<br>";
    // echo "This ", "string ", "was ", "made ", "with multiple parameters.";
    
    // // The print statement can be used with or without parentheses: print or print()
    // print "<h2>PHP is Fun!</h2>";
    // print "Hello world!<br>";
    // print "I'm about to learn PHP!";


//----------------------------------------------------------------------------------------------

    // Array : 
    // $cars = array("Volvo", "BMW", "Toyota");
    // echo($cars[0]. "<br>");
    // var_dump($cars);
    
    // -------------------------------------------------------------------------------------
    
    // Classes and Objects and functions
    // class Car
    // {
    //   public $color;
    //   public $model;
    //   public function __construct($color, $model)
    //   {
    //     $this->color = $color;
    //     $this->model = $model;
    //   }
    //   public function message()
    //   {
    //     return "My car is a " . $this->color . " " . $this->model . "!<br>";
    //   }
    // }
    
    // $myCar = new Car("red", "Volvo");
    // echo $myCar->message();
    // var_dump($myCar);
    
    // -------------------------------------------------------------------------------------
    
    // Type casting
    // $x = 5;
    // var_dump($x);
    // $x = (string) $x;
    // var_dump($x);
    // $x = (int) $x;
    // var_dump($x);
    
    // -------------------------------------------------------------------------------------
    
    // Strings :  
    $x = "John Abraham";
    echo 'Hello $x <br>';
    echo "Hello $x <br>";

    echo strlen($x);
    echo "<br>";
    echo str_word_count($x);
    echo "<br>";
    echo strpos("Hello world!", "world");//Search for the text "world" in the string "Hello world!" and returns starting index - 1
    echo "<br>";
    echo strtoupper($x);
    echo "<br>";
    echo strtolower($x);
    echo "<br>";
    echo str_replace("Abraham", "Dolly", $x);
    echo "<br>";
    echo strrev($x);
    echo "<br>";
    echo trim($x);//The trim() removes any whitespace from the beginning or the end
    echo "<br>";
    $y = explode(" ", $x);//Split the string into an array. Use the space character as separator
    print_r($y);//Use the print_r() function to display the result
    echo "<br>";
    echo substr($x, 5, 7);//starts with 5th index and take 7 chars from there
    echo "<br>";
    $x = "We are the so-called \"Vikings\" from the north.";
    echo($x);

    ?>
</body>
</html>