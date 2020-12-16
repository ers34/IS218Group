<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['email'])){
        // removes backslashes
	$fname = stripslashes($_REQUEST['fname']);
	$fname = mysqli_real_escape_string($con,$fname);
    $lname = stripslashes($_REQUEST['lname']);
    $lname = mysqli_real_escape_string($con,$lname);
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
    $college = stripslashes($_REQUEST['college']);
    $college = mysqli_real_escape_string($con,$college);
    $major = stripslashes($_REQUEST['major']);
    $major = mysqli_real_escape_string($con,$major);
    $query = "INSERT into `projectAccounts` (fname, lname, email, password, college, major)
VALUES ('$fname', '$lname', '$email', '".md5($password)."', '$college', '$major')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
    }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="fname" placeholder="First Name" required />
<input type="text" name="lname" placeholder="Last Name" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="text" name="college" placeholder="college" required />
<input type="text" name="major" placeholder="major" required />
<input type="submit" name="submit" value="Register" />
<script type="text/javascript" src="js/signuptest.js"></script>
</form>
</div>
<?php } ?>
</body>
</html>
