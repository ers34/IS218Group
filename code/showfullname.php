<?php
$email = $_POST['email'];
$query = "SELECT * FROM users WHERE email='$email'"
$row = mysql_fetch_array($query);
$username = $row['username'];

echo $username;
?>