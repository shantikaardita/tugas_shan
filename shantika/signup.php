<?php
require_once 'app/init.php';
if(!empty($_POST)){
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$created = $auth->create([
		'email' => $email,
		'username' => $username,
		'password' => $password
	]);
	if($created){
		//header('Location: http://localhost/shantika/index.php');
		echo "<a href='index.php'>aaa</a>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="signup.php" method="post">
		<fieldset>
			<legend>Sign Up</legend>
			<label>
				Email
				<input type="email" name="email">
			</label>
			<label>
				Username
				<input type="text" name="username">
			</label>
			<label>
				Password
				<input type="password" name="password">
			</label>
		</fieldset>
		<input type="submit" value="Sign Up">
	</form>
</body>
</html>