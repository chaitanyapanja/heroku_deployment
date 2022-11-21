<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Post</title>
    <link rel="stylesheet" href="style.css"/>
    <header>
<div class="container">
  <nav>
        <ul>
        <li><a href="home.php">Home</a>&nbsp;&nbsp;</li>
        <li><a href="blank">Feedback</a>&nbsp;&nbsp;</li>
        <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>       
</div>
</header>
</head>
<body>
<?php
    require('db.php');
    include('auth.php');
    if (isset($_REQUEST['phnum'])) {
        $username = $_SESSION['username'];
        $phnum = stripslashes($_REQUEST['phnum']);
        //escapes special characters in a string
        $phnum = mysqli_real_escape_string($con, $phnum);
        $description    = stripslashes($_REQUEST['description']);
        $description    = mysqli_real_escape_string($con, $description);
        $query    = "INSERT into `posts` (name, phnum, description)
        VALUES ('$username', '$phnum', '$description')";
        $result   = mysqli_query($con, $query);
        if ($result) {
        echo "<div class='form'>
        <h3>Posted successfully.</h3><br/>
        <p class='link'>Click here to <a href='home_user.php'>Home</a></p>
        </div>";
        } else {
        echo "<div class='form'>
        <h3>Unable to Post your request</h3><br/>
        <p class='link'>Click here to <a href='posts.php'>Post</a> again.</p>
        </div>";}
    } else {

?>


<h1 style="font-size:30px;text-align:center;color:#000000">Find Your Technician</h1>
    <form class="form" action="" method="post">
    <form>
    <h1 class="login-title">Post</h1>
    <textarea name="description" placeholder="Write your post" rows="4" columns = "60" required /></textarea>
    <input type="text" class="login-input" name="phnum" placeholder="Mobile No" required />
    <input type="submit" name="submit" value="Post" class="login-button">
    </form>
<?php
    }
?>
</body>

</html>