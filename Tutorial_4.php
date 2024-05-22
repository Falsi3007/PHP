<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL-4</title>
</head>
<body>
    <?php
        //In PHP, there are three types of arrays:
        // Indexed arrays - Arrays with a numeric index
        // Associative arrays - Arrays with named keys
        // Multidimensional arrays - Arrays containing one or more arrays

        // function myFunction() {
        //     echo "This text comes from a function";
        //   }
        //   // create array:
        //   $myArr = array("Volvo", 15, ["apples", "bananas"], myFunction);
        //   // calling the function from the array item:
        //   $myArr[3]();

    
    //Indexed array - in this there are many methods
    // $cars[0] = "Volvo";
    // $cars[1] = "BMW";
    // $cars[2] = "Toyota";
    // array_push($cars, "Ford");
    // var_dump($cars);


    //associatite array
    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    var_dump($car);

    $car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
    foreach ($car as $x => $y) {
    echo "$x: $y <br>";

    $myArr = [];
    $myArr[0] = "apples";
    $myArr[1] = "bananas";
    $myArr["fruit"] = "cherries";
    var_dump($myArr);


    //excecute as fun item
    function myFunction() {
        echo "I come from a function!";
      }
      $myArr = array("Volvo", 15, myFunction);
      $myArr[2]();
    }


    //change all 
    $cars = array("Volvo", "BMW", "Toyota");
    foreach ($cars as &$x) {
    $x = "Ford";
    }
    unset($x);
    var_dump($cars);


    // unset example
    // $cars = array("Volvo", "BMW", "Toyota");
    // foreach ($cars as &$x) {
    //     $x = "Ford";
    // }
    // unset($x);
    // var_dump($cars);
    // Note: Remember to add the unset() function after the loop.
    // Without the unset($x) function, the $x variable will remain as a reference to the last array item.

    // $fruits = array("Apple", "Banana", "Cherry");
    // var_dump($fruits);
    // $fruits[] = "Orange";
    // var_dump($fruits);
    
    // $cars = array("brand" => "Ford", "model" => "Mustang");
    // $cars["color"] = "Red";
    // var_dump($cars);
    
    // $cars = array("brand" => "Ford", "model" => "Mustang");
    // $cars += ["color" => "red", "year" => 1964];
    // var_dump($cars);
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // array_splice($cars, 1, 1); //specify the index (where to start) and how many items you want to delete.
    // var_dump($cars);

    // $cars = array("Volvo", "BMW", "Toyota");
    // unset($cars[0], $cars[1]);

    //function to remove items from an associative array.
    // $cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964); //The array_diff() function takes values as parameters, and not keys.
    // $newarray = array_diff($cars, ["Mustang", 1964]);
    
    // $cars = array("Volvo", "BMW", "Toyota");
    // array_pop($cars);//removes the last item of an array.
    // array_shift($cars);//removes the first item of an array.


    //SORT
    // In this chapter, we will go through the following PHP array sort functions:
    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key


    //multi dimention array
    // $cars = array(
    //     array("Volvo", 22, 18),
    //     array("BMW", 15, 13),
    //     array("Saab", 5, 2),
    //     array("Land Rover", 17, 15)
    // );

    // echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
    // echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
    // echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
    // echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";

    // for ($row = 0; $row < 4; $row++) {
    //     echo "<p><b>Row number $row</b></p>";
    //     echo "<ul>";
    //     for ($col = 0; $col < 3; $col++) {
    //         echo "<li>" . $cars[$row][$col] . "</li>";
    //     }
    //     echo "</ul>";
    // }

    




    ?>
</body>
</html>