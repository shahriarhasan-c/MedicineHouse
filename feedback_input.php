<!DOCTYPE html>
<html>
<head>
	<title>Feedback Input</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login_css.css">
</head>
<body>
<form action="see_feedback.php" method="POST">
	<div class="box">
	<h2>Fill up the form</h2>
	<form >
		<div class="inputBox">
						<input type="text" name="email" required>
						<label>Email</label>
					</div>
		<input style="background-color: green;" type="submit" name="sub" value="Submit">
		<a href="suggestion.php"><input style="background-color: orange;" type="button" name="" value="Return"></a>
	</form>
</div>
</form>
</body>
</html>