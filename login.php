<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
	<a href="index.php" id="home">HOME</a>
<div class="boxed log" id="login">
	<form method="post" action="">
		<?php include ('errors.php'); ?>
		<div class="logo"><img src="images/logo_white.png" height="100px"></div>
		<div><input type="text" name="username" placeholder="Username"></div>
		<div><input type="password" name="password" placeholder="Password"></div>
		<div><input class="sub" type="submit" name="login" value="Login"></div>
		<div><input class="sub" type="button" value="Register Individual" onclick="myFunctionRegister()"></input></div>
		<div><input class="sub" type="button" value="Create Group" onclick="myFunctionRegisterTeam()"></input></div>
	</form>
</div>
<div class="boxed reg" id="register">
	<form method="post" action="">
		<?php include ('errors.php'); ?>
		<div class="logo"><img src="images/logo_white.png" height="100px"></div>
		<div><input type="text" name="fname" placeholder="First name"></div>
		<div><input type="text" name="lname" placeholder="Last name"></div>
		<div><input type="text" name="username" placeholder="Username"></div>
		<div><input type="text" name="email" placeholder="Email id"></div>
		<div><input type="password" name="password_1" placeholder="Enter Password"></div>
		<div><input type="password" name="password_2" placeholder="Re-enter Password"></div>
		<div><input class="sub" type="submit" name="create" value="Create a new account"></div>
		<div><input class="sub" type="button" value="Back to Login" onclick="myFunctionLogin()"></input></div>
		<div><input class="sub" type="button" value="Create Group" onclick="myFunctionRegisterTeam()"></input></div>
	</form>
</div>
<div class="boxed reg" id="registerTeam">
	<form method="post" action="">
		<?php include ('errors.php'); ?>
		<div class="logo"><img src="images/logo_white.png" height="100px"></div>
		<div><input type="text" name="gname" placeholder="Group name"></div>
		<div><input type="text" name="username1" placeholder="Username"></div>
		<div><input type="text" name="username2" placeholder="Username"></div>
		<div><input type="text" name="username3" placeholder="Username"></div>
		<div><input type="password" name="pwd1" placeholder="Enter Password"></div>
		<div><input type="password" name="pwd2" placeholder="Re-enter Password"></div>
		<div><input class="sub" type="submit" value="Create a new Group"></div>
		<div><input class="sub" type="button" value="Register Individual" onclick="myFunctionRegister()"></input></div>
		<div><input class="sub" type="button" value="Back to Login" onclick="myFunctionLogin()"></input></div>
	</form>
</div>
<script>
function myFunctionRegister() {
    document.getElementById("register").style.zIndex = "1";
    document.getElementById("register").style.display = "block";
    document.getElementById("registerTeam").style.zIndex = "-1";
    document.getElementById("registerTeam").style.display = "none";
    document.getElementById("login").style.zIndex = "-1";
    document.getElementById("login").style.display = "none";
}
function myFunctionRegisterTeam() {
    document.getElementById("register").style.zIndex = "-1";
    document.getElementById("register").style.display = "none";
    document.getElementById("registerTeam").style.zIndex = "1";
    document.getElementById("registerTeam").style.display = "block";
    document.getElementById("login").style.zIndex = "-1";
    document.getElementById("login").style.display = "none";
}
function myFunctionLogin() {
    document.getElementById("register").style.zIndex = "-1";
    document.getElementById("register").style.display = "none";
    document.getElementById("registerTeam").style.zIndex = "-1";
    document.getElementById("registerTeam").style.display = "none";
    document.getElementById("login").style.zIndex = "1";
    document.getElementById("login").style.display = "block";
}
</script>
</body>
</html>