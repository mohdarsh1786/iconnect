<?php 
   include('connection.php');
   session_start();
   if($_SESSION['flag']=='set')
   {
    header('location:user_dashboard.php');
   }
?>

<!DOCTYPE HTML>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>i-connect</title>
<meta name="description" content="">
<meta name="author" content="I-Connect">

<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<!-- Animation -->
<link rel="stylesheet" href="css/style-animate.css" />

<!--Slider CSS-->
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/drop_down.css">

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
                  <li class="active"><a href="#">Home</a></li>
                  <?php
                    echo '<li><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>          
                  <li><a href="about.php">About us</a></li>
				  
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="user_login.php">Sign in</a></li>
				  <li>
                </ul>
              </div>  
            
        </nav>
    </div>
</header>
<!--Top Header End-->

<!--Slider Start-->
<div class="slider_outer">
	<div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 500px; overflow: hidden;">
            <div>
                <img u="image" src="images/slides/firsty.jpg" />
                
                
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        <!--You’ll become more well-rounded in your mindset!!-->
                        <i>Share your ideas as a conversation , not as code!</i>
                </div>
            </div>
            <div>
                <img u="image" src="images/slides/sec.jpg" />
               
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                        <i>You’ll become more comfortable being known!!</i>
                </div>
            </div>
            <div>
                <img u="image" src="images/slides/third.jpg" />
                
                <div style="position: absolute; width: 480px; height: 120px; top: 300px; left: 30px; padding: 5px;
                    text-align: left; line-height: 36px; font-size: 30px;
                        color: #FFFFFF;">
                       <i> Share ideas and thoughts will introduce you to the world!!</i>
                </div>
            </div>
        </div>
                
        
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"></div>
        </div>
        
        
        <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
        </span>
        
        <span u="arrowright" class="jssora21r" style="top: 123px; right: 38px;">
        </span>
        
    </div>
</div>
<!--Slider end-->

<!--Main Body-->
<div class="container">
   <div class="row">
   <div class="col-lg-8">
    <div class="col-md-12">
	   
	<?php	
 $result=$conn->query("select view from index_view where value=1");
        $row2=$result->fetch_array(MYSQLI_BOTH);
		$view=$row2['view'];
		$flag=0;	
       if($view=="date")
	     {		
	       $sql="select * from post order by date desc";
	       $var=$conn->query($sql);
	      if($var->num_rows > 0)
	        {
	     
	         while($row=$var->fetch_assoc())
	             {
		echo "<h1>".$row['title']."</h1>";
		?>
         <div class="entry-meta table">
          <span>
            Written by
      <?php 
      $email_id = $row['email_id'];
      $user_name = $conn->query("select first_name, last_name from user where email_id = '$email_id'");
      $user_name_res = $user_name->fetch_array(MYSQLI_BOTH);
      echo '<a href="user_profile.php?user_id='.$row['email_id'].'"><font color="#179b77">'.$user_name_res['first_name']." ".$user_name_res['last_name']."</font></a>";
      ?>
            </span>
            <span> / </span>
            <span><?php echo $row['category'];?>  </span>
            <span> / </span>
            <span> <?php echo $row['date'];  ?></span>
        </div>
		<?php
		if($row== '.' || $row=='..') continue;
			{
			}
		 echo "<img  width='1000' height='400' class='img-responsive' src='media/".$row['url']. "'></br>";
		 echo " ".$row['content'];
		 echo  "<div class='read-more padding text-center'>";
		 echo '<a href="post_session.php?post='. $row['post_id']. ' ">Read More</a>' ;
         echo "</div>";
		 $flag=$flag+1;
		  if ($flag==3)
	       {                 		    
	          break;            
	       }
	    }
	
	   }
	 }
	
?>
<!-- View by date  startted-->
<?php	
       if($view=="like")
	     {		
	       $sql="select * from post order by likes desc";
	       $var=$conn->query($sql);
	      if($var->num_rows > 0)
	        {
	     
	         while($row=$var->fetch_assoc())
	             {
		echo "<h1>".$row['title']."</h1>";
		?>
         <div class="entry-meta table">
          <span>
            Written by
      <?php 
      $email_id = $row['email_id'];
      $user_name = $conn->query("select first_name, last_name from user where email_id = '$email_id'");
      $user_name_res = $user_name->fetch_array(MYSQLI_BOTH);
      echo '<a href="user_profile.php?user_id='.$row['email_id'].'"><font color="#179b77">'.$user_name_res['first_name']." ".$user_name_res['last_name']."</font></a>";
      ?>
            </span>
            <span> / </span>
            <span><?php echo $row['category'];?>  </span>
            <span> / </span>
            <span> <?php echo $row['date'];  ?></span>
        </div>
		<?php
		if($row== '.' || $row=='..') continue;
			{
			}
		 echo "<img  width='1000' height='400' class='img-responsive' src='media/".$row['url']. "'></br>";
		 echo " ".$row['content'];
		 echo  "<div class='read-more padding text-center'>";
		 echo '<a href="post_session.php?post='. $row['post_id']. ' ">Read More</a>' ;
         echo "</div>";
		 $flag=$flag+1;
		  if ($flag==3)
	       {                 		    
	          break;            
	       }
	    }
	
	   }
	 }
	
?>
<!-- Changed view END-->
 </div>
    </div>
    <!--Sidebar Start-->
    <div class="col-md-4 top3">
                <!-- Blog Categories Well -->
				<br><br><br>
                <div class="well">
                    <h4>List of Post Categories</h4>
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
<!--Link for the Second List of Post and Redirection -->
                              <?php 
                                $list=array("Politics","Philosophy","Health","Sports");
                                for($i=0; $i<4; $i=$i+1)
                                echo '<li><a href="post.php?post='.$list[$i].'"><font size="3px"color="#179b77">'.$list[$i].'</font></a></li>';
                                ?>                              
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Notifications and Updates </h4>
                    <p>Apply for Content Writer</p><h4>
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSdCvUKv6P90XxBD7A6DFVrrVV1K5xlxegAyZlkVI7egOEwAyA/viewform?usp=sf_link">
					Click to Apply....</a></h4>
				</div>
            </div>
     <!--Sidebar End-->
     
  </div>

<!--Pagniation End-->

<!--Footer Start--><br>
<footer>
	<center><font color="Maroon">Copy Right &copy; I-Connect</font></center>
</footer>
<!--Footer End-->
</div>
<!--Main Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
<script src="js/jssor.slider.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>
<script src="js/drop_down.js" type="text/javascript"></script>
</body>
</html>