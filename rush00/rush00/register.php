

<html>
		<link rel="stylesheet" type="text/css" href="Register.css">
	<head>
	</head>
	<body>

		<form action="signin.php" method = "POST">
  			<div class="container">
    			<h1>Register</h1>
				<p>Create New Account</p>
				<hr>
    			<label for="email"><b>Username</b></label>
				<input type="text" placeholder="Enter username" name="username" required>
				<br/>

    			<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="pwd" required>
				<br />

    			<label for="psw-repeat"><b>Email</b></label>
				<input type="text" placeholder="Repeat email" name="email" required>
				<br />
    			<button type="submit" class="registerbtn" name = "register">Register</button>
  			</div>
  
  			<div class="container signin">
    			<p>Already have an account? <a href="#">Sign in</a>.</p>
  			</div>
		</form>

	</body>
</html>