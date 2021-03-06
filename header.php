<!--Styling for Website-->
<!-- database connection is being established -->
<?php
include_once 'classes/dbconnect.php';
session_start(); 
 
include_once 'api/config.php';
include_once 'scoring.php';
?>
<!DOCTYPE html>
<html lang="en">

<!--head-->
<head>

  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#555">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="bs/css/bootstrap.css">
  <link rel="stylesheet" type="style/css" href="bs/css/bootstrap-theme.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   

   <!-- custom icons via FontAwesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <!--favicon-->
  <link rel="icon" href="https://teamprojectgroupi-elmobai.c9users.io/images/logo.png" type="image/png" sizes="16x16 32x32">
  
  <!--Page Title-->  
  <title>Archer's Logbook</title>

</head>

<body>

<header>
  <!--navbar-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      <a class="navbar-brand" href="index.php"><strong>Archer's Logbook</strong></a>
        <!--<a class="navbar-brand" href="https://teamprojectgroupi-elmobai.c9users.io/index.php">
          <span class="mdl-layout-title">
            <img src="https://teamprojectgroupi-elmobai.c9users.io/images/header/logo2.png" alt="logo" style="width:15%;height:90%;"/>
            Archer's Logbook
          </span>
        </a>-->
        
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <!--
          <li class="active"><a href="#">Home</a></li>
          <li><a>Shoot for the Stars!</a></li>
          -->
        </ul>
        <ul class="nav navbar-nav navbar-right">
          
          <!-- Show 'sign in' and 'sign up' if user is not loggged in -->
          <?php 
            if(isset($_SESSION['user'])==""){
              ?>
            <li>
             <!-- <a href="https://teamprojectgroupi-elmobai.c9users.io/login.php"><span class="glyphicon glyphicon-log-in"></span> Sign In</a>-->
             <a href="https://teamprojectgroupi-elmobai.c9users.io/login.php"><button class="btn btn-success" name="btn-login">Sign In</button></a>
              <!-- <a><button class="btn btn-success" name="btn-login" id="login">Sign In</button></a> -->
            </li>
            
            <li><a href="https://teamprojectgroupi-elmobai.c9users.io/register.php"><button class="btn btn-primary" name="btn-login">Sign Up</button></a></li>
            <!-- <li><a><button class="btn btn-primary" name="btn-login" id="reg">Sign Up</button></a></li> -->

          <?php } ?>
          
          <!-- Show 'sign out' if user is loggged in -->
          <!--change == to != -->
          <?php 
          if(isset($_SESSION['user'])!=""){ 
            ?>
            <li><a href="https://teamprojectgroupi-elmobai.c9users.io/score.php"><button class="btn btn-warning" name="btn-login">
              <?php if(isset($_SESSION['user'])=="")
                	{
                	 echo "<script>alert('You must log in first to continue!');</script>";
                	 echo "<script>window.location = 'https://teamprojectgroupi-elmobai.c9users.io/login.php';</script>";
                	}
                	$db2 = Connect();
                	$user = $_SESSION['user'];
                	$sql44 = "SELECT firstname FROM registered WHERE email = '".$user."' ";
                 if ($result23 = $db2->query($sql44)){
                    if($row3 = $result23->fetch_assoc()){
                        $firstname2 = $row3['firstname']; //fetch ("$row ")
                    	echo $firstname2;
                    }
                ?>'s Profile</font></strong></button></a> </li>
             <li><a href="https://teamprojectgroupi-elmobai.c9users.io/logout.php"><button class="btn btn-danger" name="btn-login">Log Out</button></a></li>
          <?php }} ?>
          
        </ul>
      </div>
    </div>
  </nav>
</header>

<!--old header-->
<div class="jumbotron text-center">
    <!--
    <h1>Archer's Logbook</h1>
    <h1><small>Shoot for the stars!</small></h1>
    
    
    <a href="https://teamprojectgroupi-elmobai.c9users.io/index.php">
      <img src="https://teamprojectgroupi-elmobai.c9users.io/images/logo.jpg" alt="Archer's Logbook" border="0">
    </a>-->
    
    <div>
    <p></p>
    
    <!--dropdown button
    <div class="dropdown">
      <button class="dropbtn">Profile</button>
      <div class="dropdown-content">
        <a href="https://teamprojectgroupi-elmobai.c9users.io/login.php">Login</a>
        <a href="https://teamprojectgroupi-elmobai.c9users.io/registerform.php">Register</a>
      </div>
      </p>
    </div>
    -->
  </div>

<!-- check if this removes the gap just above the footer - won't save/reload right now -->
</body>
</html>