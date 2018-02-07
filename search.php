<?php

include('skillinput.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<title>search-box</title>
</head>
<body style="background-image: url(images/meeting-talents.jpg);" >
	<a href="index.php" id="home">HOME</a>
	<div class="search-box">
		<p class="search-head" >Search here...</p>
		<form method="GET" class="search" >
			<input type="text" class="s" name="s" placeholder="search...." >
			<br>
			<input  class="go" type="submit"  value="Go" >
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