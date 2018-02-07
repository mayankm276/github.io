<?php

	session_start();

	$username = "";
	$email = "";
	$password = "";

// making connection

	$db = mysqli_connect('localhost', 'root', 'gauraviitr', 'search');


//if create btn is clicked
	if (isset('create')) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_escape_string($db, $_POST['password_2']);
	}

	// ensure no field is empty

	if (empty($username)) {
		array_push($errors, 'username is empty');
	}
	if (empty($email)) {
		array_push($errors, 'email is empty');
	}
	if (empty($password_1)) {
		array_push($errors, 'password is empty');
	if (empty($password_2)) {
		array_push($errors, 'retype the password to confirm');
	}

	if($password_1!=$password_2){
		array_push($errors, 'the two passwords do not match');
	}

	// if there are no error then register the user

	if(count($errors)==0){
		$password = md5($password_1)
		$sql = " INSERT INTO users(username, email, password)
				VALUES ('$username', '$email', '$password' )  ";
		mysqli_query($db, $sql);

		$_SESSION['success'] = 'you are now logged in';
		$_SESSION['username'] = $username;


		//redirecting user to home page
		header('location:user.php')
	}

	// log user in from login page

	$username = mysqli_escape_string($db, $_POST['username']);
	$password = mysqli_escape_string($db, $_POST['password']);

	if(empty($username)){
		array_push($errors, 'username is required');
	}
	if (empty($password)) {
		array_push($errors, 'password is required');
	}

	if (count($errors)==0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE usrname = '$uername' AND password = '$password' ";
		if ((mysql_query($db, $query))==1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = 'you are now logged in';
			header('location : user.php');
		}
		else{
			array_push($errors, 'wrong username/password combination');
			header('location : login.php');
		}
	}

	// logout
	if (isset($_GET('logout'))) {
		unset($_SESSION['$username']);
		sessionn_destroy();
		header(' location : login.php');
	}