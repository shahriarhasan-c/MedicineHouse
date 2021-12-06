<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="admin_panel_css.css">
  </head>
<body>
       <form action="admin_panel_database.php" method="POST">
  <div class="login-box">
  <h1>Admin Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Username" name="name">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Password" name="pass">
  </div>

  <input type="submit" class="btn" value="Sign in" name="submit">
  </div>
      </form>
</body>
</html>
