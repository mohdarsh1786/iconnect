<!DOCTYPE HTML>
<?php
include('connection.php');
session_start();
?>

<html lang="en-gb" class="no-js">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>POST</title>
<meta name="description" content="">
<meta name="author" content="I-Connect">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background-color: #eaf5ef">
  <div class="container">
      <nav class="navbar navbar-inverse" role="navigation">
          <div class="navbar-header">
              <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="index.php" class="navbar-brand scroll-top logo animated bounceInLeft rollIn"><b><i class="fa fa-html5"><img src="images/logo.png" height="45px" width="175px"></i></b></a></div>       
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li><a href="index.php">Home</a></li>
                  <?php
                    echo '<li><a href="post.php?post='."Educational".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?>
          <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
          <li><a href="user_login.php">Login</a></li>
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
            <li><a href="index.php">Home</a></li>
             <?php
                   echo '<li><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a>';
                  ?></li>
        </ul>
    </div>
    </div>    
<!--Main Body-->
<div class="container">
   <div class="row">
   <div class="col-lg-8">
    <div class="col-md-12">
      <h1>
    <?php
      $post_id = $_SESSION['post_id'];
      $single_post = $conn->query("select * from post where post_id = '$post_id'");
      while($single_post_res = $single_post->fetch_array(MYSQLI_BOTH))
      {
      echo $single_post_res['title']."</h1>"; 

      ?>
    
        <div class="entry-meta table">
          <span>
            Written by
      <?php 
      $email_id = $single_post_res['email_id'];
      $user_name = $conn->query("select first_name, last_name from user where email_id = '$email_id'");
      $user_name_res = $user_name->fetch_array(MYSQLI_BOTH);
      echo "<font color='#179b77'>".$user_name_res['first_name']." ".$user_name_res['last_name']."</font>";
      ?>
            </span>
            <span> / </span>
            <span><?php echo $single_post_res['category'];?>  </span>
            <span> / </span>
            <span> <?php echo $single_post_res['date'];  ?></span>
        </div>
        <div><?php 
        if($single_post_res== '.' || $single_post_res=='..') continue;
        {
        }
        echo "<img  width='650' height='400' src='media/".$single_post_res['url']."'>";
      ?>
      
        </div>
        <div class="media">
      <?php echo $single_post_res['content'];
      }
      ?>
          </div>
<!-- PHP code for printing the total likes and comments -->
      <div style="float:left; ">
      <?php
          $count_comment = $conn->query("SELECT count(*) as total_comment from comment where post_id='$post_id'");
          $count_comment_res = $count_comment->fetch_array(MYSQLI_BOTH);
          $count_likes = $conn->query("SELECT count(*) as total_likes from like_tb where post_id='$post_id'");
          $count_likes_res = $count_likes->fetch_array(MYSQLI_BOTH);
          echo "<br><font size='5px'> Likes|</font><font color='#179b77' size='5px'>".$count_likes_res['total_likes']."</font>";
          echo "&nbsp;&nbsp;<font size='5px'>Comments|"."  "."</font><font color='#179b77' size='5px'>".$count_comment_res['total_comment']."</font>";
      ?> 
     </div>
<!-- End likes and comment printing -->
       
    </div>
    
    
    </div>
    
    <!--Sidebar Start-->
    <div class="col-md-4 top3">

                <!-- Blog Search Well -->
                <div class="well">
                    <h3>Register here..</h3>
                    <div class="input-group">
                        Register to our portal for writing your own post.You can also write comment on others post.
                        So why to wait <a href="user_login.php">Click here</a> to join us.
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
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
                    <p>Put some notification and messages.</p>
                </div>

            </div>
     <!--Sidebar End-->
<?php 
    $post_id = $_SESSION['post_id'];
    $comment = $conn->query("select * from comment where post_id = '$post_id' order by date desc");
?>  
     <!--Comment-->
 <div class="container">
  <div class="row">
    <div class="col-md-8">
      <h2 class="page-header">Comments</h2>
          <?php
          while($comment_res = $comment->fetch_array(MYSQLI_BOTH))
                    {
                      ?>
        <section class="comment-list">
          <!-- First Comment -->

          <div class="row">
            <div class="col-md-2 col-sm-2 hidden-xs">
              <figure class="thumbnail">
<!-- PHP code for printing the image of the commenter -->
                <?php 
                      $cr_id = $comment_res['commenter_id'];
                      $c_user = $conn->query("select first_name, last_name,profile_pic from user where email_id = '$cr_id' ");
                      $c_user_res = $c_user->fetch_array(MYSQLI_BOTH);
                      if($c_user_res== '.' || $c_user_res=='..') continue;
                      {
                      }
                      echo "<img  width='70px' height='40px' src='media/".$c_user_res['profile_pic']."'>";
                ?>
                <figcaption class="text-center">
<!-- PHP code for printing username- First time -->
                    <?php
                      echo "<font color=' #0b5345'>".$c_user_res['first_name']." ".$c_user_res['last_name']."</font>";?>

                </figcaption>
              </figure>
            </div>
            <div class="col-md-10 col-sm-10">
              <div class="panel panel-default arrow left">
                <div class="panel-body">
                  <header class="text-left">
                    <div class="comment-user"><i class="fa fa-user"></i> 
<!-- PHP code for printing username- second time -->
                      <?php 
                      echo "<font color='#0b5345'>". $c_user_res['first_name']." ".$c_user_res['last_name']."</font>";?>

                    </div>
                    <time class="comment-date" datetime="16-12-2014 01:05"><i class="fa fa-clock-o"></i> 
<!-- PHP code for printing the date -->
                    <?php echo "<font color=' #34495e'>".$comment_res['date']."</font>"; ?> 

                    </time>
                  </header>
                  <div class="comment-post">
                    <p>
<!-- Content of the comment -->
                      <?php  echo $comment_res['comment']; 
                ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </section><hr>
    </div>
  </div>
  </div>
</div></div>
  <!--Comment End-->
<!--Footer Start -->
<footer>
  <div class="row" style="margin-left:75px">
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
                <center><h2>Like Us</h2>
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
</footer><!--Footer End-->
</div>
<!--Main Body End-->

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
<script src="js/drop_down.js" type="text/javascript"></script>
</body>
</html>