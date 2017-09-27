<?php
require_once 'app/init.php';
//var_dump($database->query('select * from users'));
$auth->build();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
</head>
<body>
		<p>You are signed in. <a href="signout.php">Sign Out</a></p>
		<p>You are not signed in! <a href="signup.php">Sign Up</a> or <a href="signin.php">Sign In</a></p>
</body>
</html>