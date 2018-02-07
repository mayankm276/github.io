<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>



<!DOCTYPE html>
<html>
<head>
	<title>Connect home</title>
	<link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="homestyle.css">
  
  <script type="text/javascript" src="login.js"></script>
  <meta charset="utf-8" >
  <meta name="viewport" content="width=device-width">
</head>
<body>
	

  <div class="wrapper">
    <nav>
      <ul>
        <li class="home" ><a href="index.php">Home</a></li>
        <li><a href="addSkill.php" data-scroll="true" data-id="#connect">Add Skills</a></li>
        <li><a href="#About" data-scroll="true" data-id="#user-about" >About</a></li>
        <li><a href="#Contact" data-scroll="true" data-id="#contact">Contact</a></li>
        <li></li>
      </ul>
      <ul class="social">
       <li class="username" ><?php echo $_SESSION['username'] ?></li>

       <div class="dropdown" >
          <li class="dropbtn"><a class="user-img" href="#user-image" ><img class="ui" src="images/user-image.png" style="margin:3px;" width="50px" height="60px"></a></li>
            <div class="dropdown-content" >
              <a href="user.php?logout=1" style="color:red;">Logout</a>
              <a href="login.php" style="color: black;" >Login</a>
              
            </div>
        </div>
        

      </ul>
    </nav>
  </div>


<div class="profile" >
  <div class="col-md-3 " >
    <div class="profile-info" >
      <img class="profile-user-image" src="images/user-image.png" width="200px" height="200px" >
      <p class="profile-info-username" ><?php echo $_SESSION['username'] ?></p>
    </div>  
  </div>

  <div class="col-md-6  " >
    <div class="welcome-box" >
        <p class="head" >
          <div class="content">

              <!-- notification message -->
              <?php 
              
              if (isset($_SESSION['success'])) :?>
                <div class="error success">
                    <h3>
                      <?php
                        echo $_SESSION['success']." ";
                        unset($_SESSION['success']);
                        echo $_SESSION['username'];
                      ?>
                    </h3>
                </div>

                <div class="welcome">
                    <?php endif ?>
                    <!-- logged in user information -->
                    <?php if (isset($_SESSION['username'])): ?> 
                    <p class="welcome-content" >Welcome <strong><?php echo $_SESSION['username'] ?></strong></p>
                    <?php  endif ?>
                </div>
                <div class="welcome-about" >
                  welcome <strong><?php echo $_SESSION['username'] ?></strong> Connect provides you immense oppurtunities to make new connections and learn and explore new things and skills. So what are you waiting for, lets connect!!!!
                  
                </div>
                <hr>
                <div class="search-mode" >

             <div class="search-individual" >
              <a class="i-connect" href="search.php"><img src="images/letsconnect.jpg" height="160px" ></a>
    
             </div>
          </div>
          </div>
          
        </p>
    </div>
  </div>

</div>
</body>
</html>


 