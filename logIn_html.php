<!DOCTYPE html>
<html>
<head>
	<title>login creation</title>
	<link rel="stylesheet" type="text/css" href="logIn_css.css">
	<meta charset="utf-8">
</head>
<body>
<form action="login_DATABASE.php" method="POST">
	<form>
	<div class="box">
	<h2>Log in</h2>
	<form>
		<div class="inputBox">
			<input type="text" name="email" required >
			<label>Enter Email</label>
		</div>
		<div class="inputBox">
			<input type="Password" name="pass" required>
			<label>Enter Password</label>
		</div>
		<input type="submit" name="submit" value="submit">
		<a href="registration_html.php"><input type="button" name="" value="Create a new account"></a>
		<a href="admin_panel.php"><input type="button" name="" value="Admin Login"></a>
	</form>
</form>
</div>
</form>
</body>
</html>