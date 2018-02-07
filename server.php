<?php 
	
	session_start();

	//variable declaration
	$username="";
	$email="";
	$errors=array();

// connect to the database

$db=mysqli_connect('localhost', 'root', '', 'registration');


//if create button is clicked
if (isset($_POST['create'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	//ensure that form fields are filled properly

	if(empty($username)) {
		array_push($errors, "Username is empty");
	}
	if(empty($email)) {
		array_push($errors, "email is empty");
	}
	if(empty($password_1)) {
		array_push($errors, "password is empty");
	}
	if(empty($password_2)) {
		array_push($errors, "password is empty");
	}

	if($password_1!=$password_2){
		array_push($errors, "the two passwords do not match");
	}

	//if there are no errors, save user to database
	if(count($errors)==0){
		$password = md5($password_1);// encrypt password before storing in database(security)
		$sql="INSERT INTO users(username, email, password) 
				VALUES ('$username', '$email', '$password')";
		mysqli_query($db, $sql);
		
		$_SESSION['success'] = "You are now logged  in";
		$_SESSION['username'] = $username;
		
		header('location: user.php'); // redirect to home page
	}
}

// log user in from login page
if (isset($_POST['login'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	//ensure that form fields are filled properly

	if(empty($username)) {
		array_push($errors, "Username is required");
	}
	if(empty($password)) {
		array_push($errors, "Password is required");
	}

	if (count($errors)==0) {
		$password = md5($password);  //encrypt password before comparing with that from database
		$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		
		$result = mysqli_query($db, $query);
		if(mysqli_num_rows($result)==1){

			//log user in
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "you are now logged in";
			header('location: user.php'); // redirect to home page

		}else {
			array_push($errors, "wrong username/password combination ");
			header('location: login.php');
		}
	}
}

// logout
if (isset($_GET['logout'])) {
	unset($_SESSION['username']);
	session_destroy();
	header('location: login.php');
}


// for search box


$db2=mysqli_connect('localhost', 'root', '', 'abcd');

//if submit btn is clicked

if (isset($_GET['Submit'])) {
	$user=mysqli_escape_string($db2, $_GET['user']);
	$skill1=mysqli_escape_string ($db2, $_GET['skill1']);
	$skill2=mysqli_escape_string($db2, $_GET['skill2']);
	$skill3=mysqli_escape_string($db2, $_GET['skill3']);

	$user = strtolower($user);
	$skill1 = strtolower($skill1);
	$skill2 = strtolower($skill2);
	$skill3 = strtolower($skill3);

	//ensure that form fields are filled
	if (empty($user)) {
		array_push($errors, 'enter username');
	}
	if (empty($skill1)) {
		array_push($errors, 'input skill entry');
	}
	if (empty($skill2)) {
		array_push($errors, 'input skill entry');
	}
	if (empty($skill3)) {
		array_push($errors, 'input skill entry');
	}


	//if no error is there
	if (count($errors)==0) {
		$sql2 = "INSERT INTO skillsearch(user, skill1, skill2, skill3)
		 VALUES ('$user','$skill1','$skill2','$skill3')";

		mysqli_query($db2, $sql2);
		header('location:user.php');
	}
	else{
		array_push($errors, 'fill the complete form');
		header('location : addSkill.php');
	}

}


?>

 
