<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL-6</title>
</head>
<body>
    <?php
        //date
        echo "Today is " . date("Y/m/d") . "<br>";
        echo "Today is " . date("Y.m.d") . "<br>";
        echo "Today is " . date("Y-m-d") . "<br>";
        echo "Today is " . date("l");

        //automatically copyright year
        &copy; 2010-<?php echo date("Y");?>

        //current time
        echo "The time is " . date("h:i:sa");

        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $d);

        
    ?>
</body>
</html>