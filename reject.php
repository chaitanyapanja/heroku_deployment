<?php
require('db.php');
$username=$_REQUEST['username'];
echo $username;
$query = "DELETE FROM `techncians` WHERE username='$username'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: home_admin.php"); 
?>