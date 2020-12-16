<?php
session_start();
if(!isset($_SESSION["email"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>the page to redirected to after login</p>
<script type="text/javascript" src="js/taskjs.js"></script>
</html>
