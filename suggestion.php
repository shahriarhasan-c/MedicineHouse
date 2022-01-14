<!DOCTYPE html>
<html>
<head>
	<title>Get Suggestion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="login_css.css">
</head>
<body>
<form action="suggestion_DATABASE.php" method="POST">
	<div class="box">
	<h2>Share Problem</h2>
	<form >
		<div class="inputBox">
						<input type="text" name="patient" required >
						<label>Enter Patient Name</label>
					</div>
					<div class="inputBox">
						<input type="text" name="age" required>
						<label>Age</label>
					</div>
					<div class="inputBox">
						<input type="text" name="email" required>
						<label>Email</label>
					</div>
					<div class="inputBox">
						<input type="text" name="disease" required>
						<label>Other Diseases?</label>
					</div>
					<div class="inputBox">
						<input type="text" name="description" required>
						<label>Describe Your Problem</label>
					</div>
		<input type="submit" name="sub" value="Submit">
		<a href="feedback_input2.html"><input style="background-color: green;" type="button" name="" value="Feedback"></a>
		<a href="shopping_cart.php"><input style="background-color: orange;" type="button" name="" value="Home"></a>
	</form>
</div>
</form>
</body>
</html>