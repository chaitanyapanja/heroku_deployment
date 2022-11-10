<?php
require('db.php');
$username=$_REQUEST['username'];
echo $username;
$query = mysqli_query($con,"SELECT * from `techncians` WHERE username='$username'");
$row = mysqli_fetch_array($query);
$name = $row['name'];
//escapes special characters in a string
$name = mysqli_real_escape_string($con, $name);
$phnum = $row['phnum'];
//escapes special characters in a string
$phnum = mysqli_real_escape_string($con, $phnum);
$email    = $row['email'];
$email    = mysqli_real_escape_string($con, $email);
//escapes special characters in a string
$username = mysqli_real_escape_string($con, $username);
$password = $row['password'];
$password = mysqli_real_escape_string($con, $password);
$city = $row['city'];
$city = mysqli_real_escape_string($con, $city);
$zip = $row['zip'];
$zip = mysqli_real_escape_string($con, $zip);
$workexp = $row['workexp'];
$workexp = mysqli_real_escape_string($con, $workexp);
$technicianType = $row['technicianType'];
$technicianType = mysqli_real_escape_string($con, $technicianType);
$query1   = "INSERT into `pending_technicians` (name, phnum, email, username, password, city, zip, workexp, technicianType)
VALUES ('$name', '$phnum', '$email', '$username','$password', '$city', '$zip', '$workexp', '$technicianType')";
$result1  = mysqli_query($con, $query1);
$query2 = "DELETE FROM `techncians` WHERE username='$username'"; 
$result2 = mysqli_query($con,$query2) or die ( mysqli_error());
header("Location: home_admin.php"); 
?>