<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
	<a href="2nd.php" id="home">HOME</a>
	<div class="bar">
		<div class="button"><input id="skills" type="button" value="Search via skills"></input></div>
	</div>
	<div class="logo"><img src="images/logo_white.png" height="200px"></div>
	<div class="container">
		<form method="get" action="">
			<input class="search" type="text" name="search" placeholder="Search...">
			<input class="submit" type="submit">
		</form>
	</div>
	<div class="output" >
	<?php 

if(isset($_GET["s"])){
	$search = $_GET["s"];
	$search = strtolower($search);
}

if(!empty($search)){
   
  $sql_search = "SELECT * FROM skillsearch 
  WHERE skill1 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		
		echo "<a href='http://localhost:4000'>".$row['user']."</a>";
		
	}
}


}

echo "<br>";


if(isset($_GET["s"])){
	$search = $_GET["s"];
}

if(!empty($search)){
   
  $sql_search = "SELECT id, user, skill1, skill2, skill3 FROM skillsearch 
  WHERE skill2 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		echo "<a href='http://localhost:4000'>".$row['user']."</a>";
		
	}
}


}


echo "<br>";

if(isset($_GET["s"])){
	$search = $_GET["s"];
}

if(!empty($search)){
   
  $sql_search = "SELECT id, user, skill1, skill2, skill3 FROM skillsearch 
  WHERE skill3 LIKE '%".$search."%'";

$result_search = $connec->query($sql_search);

if($result_search->num_rows > 0){

	while ($row = $result_search->fetch_assoc()) {
		echo "<a href='http://localhost:4000'>".$row['user']."</a>";
	}
}


}


?>
</div>
</body>
</html>