<!-- //session start -->
<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

</head>
<body>
    <?php
    echo"fav color is" .$_SESSION["favcolor"].".<br>";
    echo"fav animal is" .$_SESSION["favanimal"].".";
    ?>
</body>
</html>


<!-- destroy php session -->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();
?>

</body>
</html>
