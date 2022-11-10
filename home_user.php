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
            <li><a href="posts.php">Post</a>&nbsp;&nbsp;</li>
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
    $query=mysqli_query($con, "SELECT * from `pending_technicians`");
    echo "<table border='1'> 
    <tr>
    <th>Name</th>
    <th>Phone Number</th>
    <th>Technician Type</th>
    <th> Work Exp</th>
    <th> Select </th>
    </tr>";
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phnum'] . "</td>";
    echo "<td>" . $row['technicianType'] . "</td>";
    echo "<td>" . $row['workexp']. "</td>";?>
    <td><a href="schedule.php?username=<?php echo $row['username']?>">Select</a></td>
    <?php
    
  
    
    echo "</tr>";
    }
    echo "</table>";
?>
</div>
</body>
</html>
