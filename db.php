<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $db_host = "us-cdbr-east-06.cleardb.net";
    $db_user = "b0d3b9ca392ecc";
    $db_pass = "4f4168c7";
    $db_name = "heroku_e53d23270615e73";
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");

?>
