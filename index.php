<?php

require "vendor/autoload.php";

session_start();
session_destroy();

try{
	if(isset($_POST['fullname'])){
		$_SESSION['user_complete name']= $POST['user_complete name'];
		$_SESSION['user_email']= $POST['email'];
		$_SESSION['user_birthdate']= $POST['birthdate'];

		header('Location: quiz.php');
		exit;
		} else {
			throw new Exception('Missing the basic information.');
	}
}catch (Exception $e){
	echo '<h1>An error occurred:</h1>';
	echo '<p> . $e->getMessage() . '</p>';
}

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
</head>
<body>

	<h1>Analogy Exam Registration</h1>
	<h3>Kindly register your basic information before starting the exam.</h3>

	<form method="POST" action="register.php">
		Enter your full name:<br />
		<input type="text" name="fullname" placeholder="Full Name" required />
		<br />
		Gender:<br />
		<input type="radio" name="gender" value="male" />Male<br />
		<input type="radio" name="gender" value="femail" />Female<br />
		<input type="submit">
	</form>

</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
var_dump($_SESSION);
?>
</pre>