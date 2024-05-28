

<!-- --------------------MySQLi Procedural---------------------------------------------------- -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn="";

try{
$conn = mysqli_connect($servername, 
                        $username, 
                        $password,
                        );

}
catch(mysqli_sql_exception){
    echo "could not connected! ";
}

if($conn){
    echo "db is connected!";
}


?>



