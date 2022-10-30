<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Post</title>
    <link rel="stylesheet" href="style.css"/>

<?php
    require('db.php');
    include('auth.php');
    // When form submitted, insert values into the database.

?>
<header>
<div class="container">
  <nav>
        <ul>
        <li><a href="search_technicians.php">Search Technician</a>&nbsp;&nbsp;</li>
    
            <li><a href="blank">Feedback</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>       
</div>
</header>
</head>
<body>

<h1 style="font-size:30px;text-align:center;color:#000000">Find Your Technician</h1>
    <form class="form" action="" method="post">
    <form>
    <h1 class="login-title">Post</h1>
    <textarea name="city" placeholder="Write your post" rows="4" columns = "60" required /></textarea>
    <input type="text" class="login-input" name="phnum" placeholder="Mobile No" required />
    <input type="submit" name="submit" value="Post" class="login-button">
    </form>

</body>

</html>