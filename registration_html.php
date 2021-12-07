<!DOCTYPE html>
<html>
<head>
	<title>Registration creation</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="registration_css.css">
</head>
<body>
<form action="registration_DATABASE.php" method="POST">
	<div class="box">
	<h2>Create a new account</h2>
	<form>
		<div class="inputBox">
			<input type="text" name="name" required>
			<label>Name</label>
		</div>
		<div class="inputBox">
			<input type="text" name="email" required>
			<label>Email</label>
		</div>
		<div class="inputBox">
			<input type="Password" name="pass" required>
			<label>Password</label>
		</div>
		<div class="inputBox">
			<input type="Password" name="cpass" required>
			<label>Confirm Password</label>
		</div>
		<div class="inputBox">
			<input type="text" name="contact" required>
			<label>Enter Phone Number</label>
		</div>
		<input type="submit" name="reg" value="Sign Up">
		<a href="logIn_html.php"><input type="button" name="" value="Log In"></a>
	</form>
</div>
</form>
</body>
</html>