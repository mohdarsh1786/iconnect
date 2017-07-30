<?php 
include('connection.php');
?>

<!DOCTYPE HTML>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>i-connect| Contact</title>
<meta name="description" content="">
<meta name="author" content="I-Connect">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background-color: #eaf5ef;">
	<div class="container" >
    	<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header" >
            	<button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.php" class="navbar-brand scroll-top logo animated bounceInLeft rollIn"><b><i class="fa fa-html5"><img src="images/logo.png" height="45px" width="175px" style="margin-top: -5px;"></i></b></a></div>				
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li><a href="index.php">Home</a></li>
                  <?php
                    echo '<li><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>
                  <li><a href="about.php">About Us</a></li>
                  <li class="active"><a href="#">Contact Us</a></li>
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
    
            <li><a href="#">Home</a></li>
    
            <li class="active">Contact</li>
    
        </ul>
    
    </div>
    </div>
    <!--Breadcrumbs-->
    
<!--Main Body-->
<div class="container">
   <div class="row">
       <div class="col-lg-8">

<!-- First Admin details -->

          <div class="row posts">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="images/yogi.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3><font color=" #285593">Yogendra Maurya</font></h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>
                      Email:&nbsp; steptostep93@gmail.com<br>
                      Contact:&nbsp; 8756599838<br>
                      Lives in:&nbsp; Calicut<br>
                      Works as:&nbsp; Student<br>
                  </p>
                  </div>
                <div class="col-xs-3"></div>
              </div>
              <br><br>
            </div>
          </div>
          
<!-- Second admin details -->
<div class="row posts">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="images/arsh.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3><font color=" #285593">Mohammad Arsh</font></h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>
                      Email:&nbsp; 0786mohdarsh@gmail.com<br>
                      Contact:&nbsp; 8714365122<br>
                      Lives in:&nbsp; Calicut<br>
                      Works as:&nbsp; Student<br>
                  </p>
                  </div>
                <div class="col-xs-3"></div>
              </div>
              <br><br>
            </div>
          </div>
<!-- Third admin details -->  
<div class="row posts">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">
              <a class="story-img" href="#"><img src="images/avnish.jpg" style="width:100px;height:100px" class="img-circle"></a>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3><font color=" #285593">Avnish Agrahari</font></h3>
              <div class="row">
                <div class="col-xs-9">
                  <p>
                      Email:&nbsp; avnishagr@gmail.com<br>
                      Contact:&nbsp; 8756598386<br>
                      Lives in:&nbsp; Calicut<br>
                      Works as:&nbsp; Student<br>
                  </p>
                  </div>
                <div class="col-xs-3"></div>
              </div>
              <br><br>
            </div>
          </div>
<!-- Admin Details Ends-->        
       </div>
    <!--Sidebar Start-->
    <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4><font color=" #285593">Locate Us here:</font></h4>
                    <div class="input-group">
                        <p>
                        National Institute of Technology<br>
                        Calicut, Kerala<br>
                        India -673601
                        <p>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4 ><font color=" #285593">List of Post Categories</font></h4>
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

                <!-- Write a Feedback -->
                <div class="well">
                    <h4><font color=" #285593">Write a Feedback</font></h4>
                    <p>Your feedback will help us to improve our portal.We always look for your feedback and comment.</p>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSc7EH4Z31wYyRu1g_ZyCMIskFggA4SaOnuob-q7QBvsnPk1Xw/viewform?usp=sf_link"><button>Write a feedback</button></a>

                </div>

            </div>
     <!--Sidebar End-->
  </div>
<!--Footer Start-->
<footer>
	<div class="row">
                <div class="col-lg-4">
                	<h2>Popular Posts</h2>
<!-- PHP Code for priting the Popular post value --> 
          <?php
              $popular_post = $conn->query("select title,category from post order by likes desc");
              $count=0;                 
           while($popular_post_res = $popular_post->fetch_array(MYSQLI_BOTH) and $count < 4)
            {
                echo " <li>".$popular_post_res['title']."  ";
                echo "|"." "."<font color='#179b77'>".$popular_post_res['category']."</font></li>";
                $count=$count+1;
            }
          ?>
<!-- END of PHP Code of the Popular post value -->  
                </div>
                <div class="col-lg-4">
                <center><h2>Like Us</h2></center>
                    <div class="text-center">
                         <a href="https://www.facebook.com/"><img src="images/facebook-btn.png" width="40px" height="40px"></a>
                        <a href="https://twitter.com/"><img src="images/twitter-btn.png" width="40px" height="40px"></a>
                        <a href="https://https://plus.google.com/"><img src="images/google-btn.png" width="40px"  height="40px"></a>
                    </div>
                </div>
                <div class="col-lg-4">
                	<h2>Recent Posts</h2>
<!-- PHP Code for priting the Recent post value --> 
          <?php
              $popular_post = $conn->query("select title,category from post order by date desc");
              $count=0;                 
           while($popular_post_res = $popular_post->fetch_array(MYSQLI_BOTH) and $count < 4)
            {
                echo " <li>".$popular_post_res['title']." ";
                echo "|"." "."<font color='#179b77'>".$popular_post_res['category']."</font></li>";
                $count=$count+1;
            }
          ?>
<!-- END of PHP Code for priting the Recent post value -->
                </div>
    </div>
     <div class="col-lg-12 top2 bottom2">
    	<div class="text-center"><font color="Maroon">Copy Right &copy; I-Connect</font> </div>
    </div>
</footer>
<!--Footer End-->
</div>
<!--Main Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 

</body>
</html>