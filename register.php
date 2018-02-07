<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="boxed reg" id="register">
	<form method="post">
		<div class="logo"><img src="images/logo_white.png" height="100px"></div>
		<div><input type="text" name="fname" placeholder="First name"></div>
		<div><input type="text" name="lname" placeholder="Last name"></div>
		<div><input type="text" name="username" placeholder="Username"></div>
		<div><input type="text" name="email" placeholder="Email id"></div>
		<div><input type="password" name="pwd1" placeholder="Enter Password"></div>
		<div><input type="password" name="pwd2" placeholder="Re-enter Password"></div>
		<div><input class ="sub" type="submit" value="Create a new account"></div>
		<div><a href="login.php">Back to Login</a></div>
	</form>
</div>
</body>
</html>