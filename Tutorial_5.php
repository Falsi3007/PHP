<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL-5</title>
</head>
<body>
    <?php

    // The PHP superglobal variables are:
    // $GLOBALS -> ARRAY that contains all global variables.
    // $_SERVER -> variable which holds information about headers, paths, and script locations.
    // $_REQUEST -> variable which contains submitted form data, and all cookie data. OR an ARRAY containing data from $_GET, $_POST, and $_COOKIE.
    // $_POST -> contains an ARRAY of variables received via the HTTP POST method.
    // $_GET -> contains an ARRAY of variables received via the HTTP GET method.
    // $_FILES
    // $_ENV
    // $_COOKIE
    // $_SESSION
    
    // -------------------------------------------------------------------------------------
    
    // you get nothing (or an error) when referring to a global variable without the $GLOBALS syntax
    // $x = 75;
    // function myfunction() {
    //     echo $GLOBALS['x'];
    //     // echo $x;
    // }
    // myfunction()
    
    // -------------------------------------------------------------------------------------
    
    // function myfunction() {
    //     $GLOBALS["x"] = 100;
    //   }
    //   myfunction();
    //   echo $GLOBALS["x"];
    //   echo $x;
    
    // -------------------------------------------------------------------------------------
    
    // $_SERVER ->
    // echo $_SERVER['PHP_SELF'];
    // echo $_SERVER['SERVER_NAME'];
    // echo $_SERVER['HTTP_HOST'];
    // echo $_SERVER['HTTP_REFERER'];
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo $_SERVER['SCRIPT_NAME'];
    
    // -------------------------------------------------------------------------------------
    
    /*
        $_SERVER['PHP_SELF']	Returns the filename of the currently executing script
        $_SERVER['GATEWAY_INTERFACE']	Returns the version of the Common Gateway Interface (CGI) the server is using
        $_SERVER['SERVER_ADDR']	Returns the IP address of the host server
        $_SERVER['SERVER_NAME']	Returns the name of the host server (such as www.w3schools.com)
        $_SERVER['SERVER_SOFTWARE']	Returns the server identification string (such as Apache/2.2.24)
        $_SERVER['SERVER_PROTOCOL']	Returns the name and revision of the information protocol (such as HTTP/1.1)
        $_SERVER['REQUEST_METHOD']	Returns the request method used to access the page (such as POST)
        $_SERVER['REQUEST_TIME']	Returns the timestamp of the start of the request (such as 1377687496)
        $_SERVER['QUERY_STRING']	Returns the query string if the page is accessed via a query string
        $_SERVER['HTTP_ACCEPT']	Returns the Accept header from the current request
        $_SERVER['HTTP_ACCEPT_CHARSET']	Returns the Accept_Charset header from the current request (such as utf-8,ISO-8859-1)
        $_SERVER['HTTP_HOST']	Returns the Host header from the current request
        $_SERVER['HTTP_REFERER']	Returns the complete URL of the current page (not reliable because not all user-agents support it)
        $_SERVER['HTTPS']	Is the script queried through a secure HTTP protocol
        $_SERVER['REMOTE_ADDR']	Returns the IP address from where the user is viewing the current page
        $_SERVER['REMOTE_HOST']	Returns the Host name from where the user is viewing the current page
        $_SERVER['REMOTE_PORT']	Returns the port being used on the user's machine to communicate with the web server
        $_SERVER['SCRIPT_FILENAME']	Returns the absolute pathname of the currently executing script
        $_SERVER['SERVER_ADMIN']	Returns the value given to the SERVER_ADMIN directive in the web server configuration file (if your script runs on a virtual host, it will be the value defined for that virtual host) (such as someone@w3schools.com)
        $_SERVER['SERVER_PORT']	Returns the port on the server machine being used by the web server for communication (such as 80)
        $_SERVER['SERVER_SIGNATURE']	Returns the server version and virtual host name which are added to server-generated pages
        $_SERVER['PATH_TRANSLATED']	Returns the file system based path to the current script
        $_SERVER['SCRIPT_NAME']	Returns the path of the current script
        $_SERVER['SCRIPT_URI']	Returns the URI of the current page
    */

    // -------------------------------------------------------------------------------------

    //form method


        //post method in HTML forms
        // <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <!-- // Name: <input type="text" name="fname"> -->
        <!-- // <input type="submit"> -->
        <!-- // </form> -->

        <!-- // <?php -->
        // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //     // collect value of input field
        //     $name = htmlspecialchars($_REQUEST['fname']);
        //     if (empty($name)) {
        //         echo "Name is empty";
        //     } else {
        //         echo $name;
        //     }
        // }
        // ?>
        


        //get method

        // echo "Study " . $_REQUEST['subject'] . " at " . $_REQUEST['web'];


        //post method in js http request

        // <html>
        // <script>
        // function myfunction() {
        // const xhttp = new XMLHttpRequest();
        // xhttp.open("POST", "demo_ajax.php");
        // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        // xhttp.onload = function() {
        //     document.getElementById("demo").innerHTML = this.responseText;
        // }
        // xhttp.send("fname=Mary");
        // }
        // </script>
        // <body>
        // <button onclick="myfunction()">Click me!</button>
        // <h1 id="demo"></h1>
        // </body>


        //get method
        // <form action="welcome_get.php" method="get">
        // Name: <input type="text" name="name"><br>
        // E-mail: <input type="text" name="email"><br>
        // <input type="submit">
        // </form>


//-------------------------------------------------------------------------------------------------

            //regex
             // "/" is the delimiter, "w3schools" is the pattern that is being searched for, and "i" is a modifier that makes the search case-insensitive.
            // $str = "Visit W3Schools";
            // $pattern = "/w3schools/i";
            // echo preg_match($pattern, $str);

            // echo "<br>";
            
            // $str = "The rain in SPAIN falls mainly on the plains.";
            // $pattern = "/ain/i";
            // echo preg_match_all($pattern, $str);
            
            // echo "<br>";

            // $str = "Visit Microsoft!";
            // $pattern = "/microsoft/i";
            // echo preg_replace($pattern, "W3Schools", $str);


    ?>
</body>
</html>