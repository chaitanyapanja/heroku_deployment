<?php
    // Enter your host name, database username, password, and database name.
    //If you have not set database password on localhost then set empty.
    $db_host = "us-cdbr-east-06.cleardb.net";
    $db_user = "b25f67b2227c76";
    $db_pass = "1c6ab525";
  $db_name = "heroku_aa566d2ccabb3a6";
    $con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die("database connection error");
// Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    //$con = mysqli_connect("127.0.0.1","root","","findyourtechnician");
    // Check connection
    //if (mysqli_connect_errno()){
      //  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
