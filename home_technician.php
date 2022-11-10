<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
<header>
<div class="container">
    <nav>
        <ul>
            <li><a href="blank">Upcoming Schedules</a>&nbsp;&nbsp;</li>
            <li><a href="blank">Feedback</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<div class="form">
<?php
    require('db.php');
    include('auth.php');
    $query=mysqli_query($con, "SELECT * from `posts`");
    echo "<table border='1'> 
    <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Description</th>
    </tr>";
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phnum'] . "</td>";
    echo "<td>" . $row['description']."</td>";
  
    
    echo "</tr>";
    }
    echo "</table>";
?>
</div>
</body>
</html>
