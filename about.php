<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background-color: #eaf5ef;">
	<div class="container">
    	<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
            	<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <img src="images/logo.png" height="45px" width="175px" style="margin-top:0px;"></i></b></div>					
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li><a href="index.php">Home</a></li>
                  <?php
                    echo '<li><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>
                  <li class="active"><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>  
            
        </nav>
    </div>
</header>
<!--Top Header End-->

    <!--Breadcrumbs-->
        <div class="col-lg-12 top2">
        <div class="container">
    
            <ul class="breadcrumb">
        
                <li><a href="index.html">Home</a></li>
        
                <li class="active">About</li>
        
            </ul>
        
        </div>
        </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8 top3">
                <br><br>
            <p><font size="4px">i-connect is a web portal that can be continually updated with new posts.It is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries ("posts"). Here we show the posts in two different order, so that the most <br>recent post appears first or the most popular post.</font>
			</p> 
		<hr>
		<h1 class="top1">Our Mission</h1>
        <h3> "<font color='#179b77'>Opinion Always Matters"</font></h3>
        <p><font size="4px">Our mission is to reach the more and more people and connect each other.We provides the platform to write their own view and share idea.Ideas and opinion of one person can change the life of others.</font> </p><br>
        <marquee behavior="alternate">
            <img src="images/a2.jpg" width="400px" height="300px">
            <img src="images/a4.jpg" width="400px" height="300px">
            <img src="images/a1.jpg" width="400px" height="300px">
            <img src="images/a3.jpg" width="400px" height="300px">
        </marquee>
       </div>
    <!--Sidebar Start-->
    <div class="col-md-4 top3">
                <!-- Post Categories Well -->
                <div class="well">
                    <h4>Post Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul >
<!--Link for the First List of Post and Redirection -->
                              <?php 
                                $list=array("Education","Technology","Social","Business");
                                for($i=0; $i<4; $i=$i+1)
                                echo '<li><a href="post.php?post='.$list[$i].'"><font size="3px" color="#179b77">'.$list[$i].'</font></a></li>';
                                ?>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul >
<!--Link for the Second List of Blogs and Redirection -->
                              <?php 
                                $list=array("Politics","Philosophy","Health","Sports");
                                for($i=0; $i<4; $i=$i+1)
                                echo '<li><a href="post.php?post='.$list[$i].'"><font size="3px"color="#179b77">'.$list[$i].'</font></a></li>';
                                ?>                              
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Find us here</h4>
                    <hr>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15649.02687162161!2d75.930912!3d11.315937250000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba642fd50000001%3A0xbe8a77db953bda6c!2sNational+Institute+of+Technology%2C+Calicut!5e0!3m2!1sen!2sin!4v1491122065631" width="330" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

            </div>
     <!--Sidebar End-->
  </div>
<!--Footer Start-->
<footer>
<center><font color="Maroon">Copy Right &copy; I-Connect</font></center>
</footer>
<!--Footer End-->
</div>
<!--Main Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
</body>
</html>
