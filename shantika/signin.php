<?php
require_once 'app/init.php';
if(!empty($_POST)){
	$username = $_POST['username'];
	$password = $_POST['password'];

	$signin = $auth->signin([
'username' => $username,
'password' => $password
	]);
	if($signin){
		header('Location: http://localhost/shantika/index.php');
	 
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<meta charset="utf-8">
</head>
<body>
<form action="signin.php" method="post">
	<fieldset>
		<legend>Sign In</legend>
		<label>
			Username
			<input type="text" name="username">
		</label>
		<label>
			Password
			<input type="password" name="password">
		</label>
	</fieldset>
	<input type="submit" value="Sign In">
	
</form>

</body>
</html>