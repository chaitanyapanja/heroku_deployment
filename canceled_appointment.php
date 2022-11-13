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
            <li><a href="blank">Post</a>&nbsp;&nbsp;</li>
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
    $username = $_SESSION['username'];
    $query=mysqli_query($con, "SELECT * from `appointments` where user_username='$username' and status='rejected'");
    $rows_count = mysqli_num_rows($query);
    echo $rows_count;
    if ($rows_count>=1){
    echo "<p> Technician has too many appointments.The following
    schedule has been canceled. Book another appoitment.</p>";
    echo "<table border='1'> 
    <tr>
    <th>Customer Name</th>
    <th>Customer Phone Number</th>
    <th>Appointment Date</th>
    <th>Appointment Time</th>
    </tr>";
    while($row = mysqli_fetch_array($query))
    {
    echo "<tr>";
    echo "<td>" . $row['technician_name'] . "</td>";
    echo "<td>" . $row['technician_phnum'] . "</td>";
    echo "<td>" . $row['appointment_date'] . "</td>";
    echo "<td>" . $row['appointment_time']. "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "<h3> You don't have any appointments</h3>";
}
?>
<p class="link"><a href="home_user.php">To schedule a new appoitment</a></p>
</div>
</body>
</html>
