<?php 
include('connection.php');
session_start();
?>

<!DOCTYPE HTML>
<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>I-Connect</title>
<meta name="description" content="i-connect">
<meta name="author" content="i-connect">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background-color: #eaf5ef;">
  <div class="container" >
      <nav class="navbar navbar-inverse" role="navigation" >
          <div class="navbar-header" >
              <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.php" class="navbar-brand scroll-top logo animated bounceInLeft rollIn"><b><i class="fa fa-html5"><img src="images/logo.png" height="45px" width="175px" style="margin-top: -5px;"></i></b></a></div>        
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li class="index.html"><a href="index.php">Home</a></li>
                  <?php
                    echo '<li class="active"><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>  
            
        </nav>
    </div>
</header>
<!--Top Header End-->

    <!--Breadcrumbs-->
        <div class="col-lg-12 top2" >
         <div class="container">
    
            <ul class="breadcrumb">
        
                <li><a href="index.php">Home</a></li>
        
                <li class="active">Post</li>
        
            </ul>
    
        </div>
      </div>
    <!--Breadcrumbs-->

<!--Post Body-->
<div class="container">
  <div class="row">
    
    <div class="col-md-8">  
      <div class="panel">
        <div class="panel-body">
<!-- PHP script for printing all the Post according to category -->

<?php

// Searching post according to category
      if(isset($_POST['search_post']))
      {
        $category = $_POST['category'];
      }
      else{
        $category=$_GET['post'];
      }
$total = $conn->query("select * from post where category='$category' order by date desc");
if($total->num_rows>0){
while($total_post = $total->fetch_array(MYSQLI_BOTH))
{ 
      $email_id = $total_post['email_id'];
      $user_name = $conn->query("SELECT first_name, last_name from user where email_id = '$email_id'");
      $user_name_res = $user_name->fetch_array(MYSQLI_BOTH);
      $post_id = $total_post['post_id'];
      $count_comment = $conn->query("SELECT count(*) as total_comment from comment where post_id='$post_id'");
      $count_comment_res = $count_comment->fetch_array(MYSQLI_BOTH);
      ?>     
      <div class="row posts">    
            <br>
            <div class="col-md-2 col-sm-3 text-center">

<!-- PHP code for printing the image -->

<?php
if($total_post== '.' || $total_post=='..') continue;
        {
        }
        if($total_post['url']){
           echo "<img  width='650' height='400' src='media/".$total_post['url']."'style='width:100px;height:100px' class='img-circle'><br>";}
?>
            </div>
            <div class="col-md-10 col-sm-9">
              <h3>

<!-- PHP code for printing the title,author and date -->

               <?php
                    echo $total_post['title']."</h3>"; 
                    echo "written by"." "."<font color='#179b77'>".$user_name_res['first_name']." ".$user_name_res['last_name']."</font>"." ";
                    echo "on"." ". $total_post['date'];
               ?>  
              <div class="row">
                <div class="col-xs-9">
                  <p>
<!-- PHP code for printing the content of the post -->

<?php
                  echo "<br>".$total_post['content']."</p>";
                  echo '<a href="post_session.php?post='. $total_post['post_id']. ' "><button class="btn btn-default btn-hover">Read More</button></a>' ;
?>
                  
                  <ul class="list-inline"><li>Likes|

<!-- PHP code for printing the total likes and comments -->
                  <?php
                    echo "  "."<font color='#179b77'>".$total_post['likes']."</font>";
                    echo "</li><li>Comments|"."  "."<font color='#179b77'>".$count_comment_res['total_comment']."</font></li></ul>";
                  ?>

                  </div>
                <div class="col-xs-3"></div>
              </div>
              <br>
            </div>
          </div>

<!-- END the while loop -->

          <?php 
          }
      }
          else
          	echo "<font color=' #f08227' size='5px'>No Result Found</font>";

          	?>  
        </div>
      </div>                                        
    </div>
    <!--/col-8-->
     <!--Sidebar Start-->
    <div class="col-md-4">

                <!-- Post Search Well -->
                <div class="well">
                    <h4>Search Post</h4>
                    <div class="input-group">
                    <form action="post.php" method="post">
                        <input type="text" placeholder="Enter category" name="category" class="form-control">
                        
                        <input type="submit" name="search_post" value="Search" style="height:30px;width:80px;">
                        </form>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Post Categories Well -->
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
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Notification</h4>
                    <p>Add some Notification overhere</p>
                </div>

            </div>
     <!--Sidebar End-->
  </div>
  <!--Footer Start-->
<footer>
  <div class="row">
                <div class="col-lg-4">
                  <h2>Popular Posts</h2>
                    <ul class="list-unstyled">

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
                  </ul>
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
                  <ul class="list-unstyled">

<!-- PHP Code for priting the Popular post value --> 
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
<!-- END of PHP Code for priting the Popular post value --> 
                  
                    </ul>
                </div>
    </div>
     <div class="col-lg-12 top2 bottom2">
      <div class="text-center"><font color="Maroon">Copy Right &copy; I-Connect</font> </div>
    </div>
</footer>
<!--Footer End-->
</div>

<!--Blog Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
<script src="js/jssor.slider.js" type="text/javascript"></script>
<script src="js/slider.js" type="text/javascript"></script>
</body>
</html>