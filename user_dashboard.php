<?php require('connection.php');
session_start();
require_once('user_auth.php');
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Post</title>
  	<link href=""  rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background:#eaf5ef;">
	<div class="container">
    	<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
            	<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <img src="images/logo.png" height="50px" width="150px"></i></b></div>				
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li class="active"><a href="user_dashboard.php">Home</a></li>
                  	<?php
                    echo '<li><a href="post.php?post='."Educational".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>
                        <li><a href="contact.php">Contact Us</a></li>       
                  	<li><a href="about.php">About Us</a></li>
				  <li><a href="logout.php">Logout</a></li>          
                </ul>
              </div>  
        </nav>
    </div>
</header>
</body>
</html>