<html>
		<link rel="stylesheet" type="text/css" href="login.css">
<head>
</head>
<body>
<h2>Login Form</h2>
<div class="container">
  <form action="login.php" method="POST">
    <div class="row">
      <div class="vl">
      </div>
      <div class="col">
        <div class="hide-md-lg">
        </div>
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login" name="login">
      </div>
      
    </div>
  </form>
</div>
<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="/rush00/register.php" style="color:white" class="btn">Sign up</a>
    </div>
    <div class="col">
      <a href="#" style="color:white" class="btn">Forgot password?</a>
    </div>
  </div>
</div>
</body>
</html>