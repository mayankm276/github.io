<?php
$servername = "localhost";
$username = "root";
// Enter your root, password
$password = "";
$db = "abcd";	
	$connec = new mysqli($servername, $username, $password, $db);//for connection to databse via php
	//conn is object And ,mysqli is class
if($connec->connect_error) {
	die("Connection failed :".$connec->connect_error);
}
?>