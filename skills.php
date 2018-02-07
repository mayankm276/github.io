
<?php
    if (isset($_GET["id"])) {
    

$man1;
$man2;
$man3;

if($_GET["id"]=="design"){
    $man1="xyz";
    $man2="qwe";
    $man3="asd";  
    echo $man1."<br>";
    echo $man2."<br>";
    echo $man3."<br>";  
} 
elseif ($_GET["id"]=="finance") {
    $man1="xyz";
    $man2="qwe";
     echo $man1."<br>";
    echo $man2."<br>";
}
elseif ($_GET["id"]=="spons") {
    $man1="xyz";
    $man2="qwe";
     echo $man1."<br>";
    echo $man2."<br>";
}
elseif ($_GET["id"]=="webd") {
    $man1="xyz";
    $man2="qwe";
     echo $man1."<br>";
    echo $man2."<br>"; 
}

}

else{
?>

<?php
 

?>
        
<!DOCTYPE html>
<html>
<head>
	<title>Skills</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
</head>
<body>
	<div class="select-skill" >
        <div class="row2">   
            <div class="box" ><a href="http://localhost:4000"><img src="images/design.png" width="200px" height="200px"><p class="name" >design</p></a></div>    
            <div class="box" ><a href="http://localhost:4000"><img src="images/finance.jpg" width="200px" height="200px"><p class="name">finance</p></a></div>
        </div>
        <div class="row2">   
            <div class="box" ><a href="http://localhost:4000"><img src="images/spons.jpg" width="200px" height="200px"><p class="name">spons</p></a></div>
            <div class="box" ><a href="http://localhost:4000"><img src="images/webd.png" width="200px" height="200px"><p class="name">web-d</p></a></div>
        </div>
    </div>
</body>
</html>

<?php  } ?>

