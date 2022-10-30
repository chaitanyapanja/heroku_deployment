<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $phnum = stripslashes($_REQUEST['phnum']);
        //escapes special characters in a string
        $phnum = mysqli_real_escape_string($con, $phnum);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con, $city);
        $zip = stripslashes($_REQUEST['zip']);
        $zip = mysqli_real_escape_string($con, $zip);
        $workexp = stripslashes($_REQUEST['workexp']);
        $workexp = mysqli_real_escape_string($con, $workexp);
        $technicianType = stripslashes($_REQUEST['technicianType']);
        $technicianType = mysqli_real_escape_string($con, $technicianType);

        $query    = "INSERT into `techncians` (name, phnum, email, username, password, city, zip, workexp, technicianType)
                     VALUES ('$name', '$phnum', '$email', '$username','$password', '$city', '$zip', '$workexp', '$technicianType')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='index.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Find Technician </h1>
    <form class="form" action="" method="post" name="registration">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="name" placeholder="Name" required />
        <input type="text" class="login-input" name="phnum" placeholder="Mobile No" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="password" class="login-input" name="password" placeholder="Password" required/>
        <input type="text" class="login-input" name="city" placeholder="City" required/>
        <input type="text" class="login-input" name="zip" placeholder="Zip" required/>
        <input type="text" class="login-input" name="workexp" placeholder="Years of Experience" required/>
        <select class="login-input" id="technicianType" name="technicianType" placeholder="Technician Type" required/>
<option value="" selected="selected">Select </option>
<option value="Plumber">Plumber</option>
<option value="Mechanic">Mechanic</option>
<option value="Carpenter">Carpenter</option>
<option value="Painter">Painter</option>
<option value="Plumber">Electrician</option>
</select>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link"><a href="index.php">Click to Login</a></p>
    </form>
<?php
    }
?>
</body>
</html>
