<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"/>
    <header>
<?php
require('db.php'); 
include('auth.php')
?>
<div class="container">
    <nav>
        <ul>
            <li><a href="search_technicians.php">Search Technician</a>&nbsp;&nbsp;</li>
            <li><a href="posts.php">Post</a>&nbsp;&nbsp;</li>
            <li><a href="blank">Feedback</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Find Technician</h1>
</body>
</html>
