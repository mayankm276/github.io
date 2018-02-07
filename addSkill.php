
<?php include('server.php') ?> 
<!DOCTYPE html>
<html>
<head>
	<title>add Skills</title>
	<link rel="stylesheet" type="text/css" href="homestyle.css">
	<meta charset="utf-8">
</head>
<body>
	<div class="skill-form" >
		<form method="get" >
			<input type="text" name="user" value="<?php echo $_SESSION['username'] ?>" id="e">
			<input type="text" name="skill1" placeholder="input skill name" id="a" >
			<input type="text" name="skill2" placeholder="input skill name" id="b">
			<input type="text" name="skill3" placeholder="input skill name" id="c">
			<br>
			<br>
			<input class="submit" type="submit" name="Submit" value="Submit" id="d">
		</form>
	</div>
	<br>
	<br>
	<div class="grid" >
		<div class="row3" >
			<div class="field"><img src="images/design.png" class="image" name=design"" width="200px" height="200px" ><p style="text-align:center;">design</p></div>
			<div class="field"><img src="images/finance.jpg" class="image" name="finance" width="200px" height="200px" ><p style="text-align:center;">finance</p></div>
			<div class="field"><img src="images/spons.jpg" class="image" name="spons" width="200px" height="200px" ><p style="text-align:center;">spons</p></div>
			<div class="field"><img src="images/webd.png" class="image" name="web-d" width="200px" height="200px" ><p>web-development</p style="text-align:center;"></div>
		</div>

		<div class="row3" >
			<div class="field"><img src="images/photoshop.jpg" class="image" name="photoshop"  width="200px" height="200px"><p style="text-align:center;">photoshop</p></div>
			<div class="field"><img src="images/software-development.png" class="image" name="software-development" width="200px" height="200px" ><p style="text-align:center;">software-dev</p></div>
			<div class="field"><img src="images/editor.png" class="image" name="editor" width="200px" height="200px" ><p style="text-align:center;">editorial</p></div>
			<div class="field"><img src="images/dance.jpeg" class="image" name="dance" width="200px" height="200px" ><p style="text-align:center;">dance</p></div>
		</div>

		<div class="row3" >
			<div class="field"><img src="images/music.jpg" class="image" name="music" width="200px" height="200px" ><p style="text-align:center;">music</p></div>
			<div class="field"><img src="images/dramatics.gif" class="image" name="dramatics" width="200px" height="200px" ><p style="text-align:center;">dramatics</p></div>
			<div class="field"><img src="images/rubics-cube.jpg" class="image" name="rubics-cube"  width=200pxx" height=200pxx"><p style="text-align:center;">rubics-cube</p></div>
			<div class="field"><img src="images/debating.png" class="image" name="debating" width="200px" height="200px" ><p style="text-align:center;">debating</p></div>
		</div>
	</div> 


</body>
</html>
