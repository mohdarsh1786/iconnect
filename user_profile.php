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
<title>Blog</title>
<meta name="description" content="I-Connect">
<meta name="author" content="Blog-nitc">
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/user_profile.css" />
</head>
<body>
<!--Top Header-->
<header class="header" style="background-color: #eaf5ef;">
  <div class="container" >
      <nav class="navbar navbar-inverse" role="navigation" >
          <div class="navbar-header" >
              <button type="button" id="nav-toggle" class="navbar-toggle"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <a href="home.php"><b><i class="fa fa-html5"><img src="images/logo.png" height="45px" width="175px" style="margin-top:5px;"></i></b></a></div>        
              <div id="main-nav" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" id="mainNav">
                  <li><a href="home.php">Home</a></li>
                  <li><?php
                   echo '<li><a href="post.php?post='."Education".'"><font size="3px" >'."Post".'</font></a></li>';
                  ?></li>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="contact.php">Contact Us</a></li>
                </ul>
              </div>  
            
        </nav>
    </div>
</header>
<!--Top Header End-->
<div class="profile_main_section">
  <div class="left_section"><center>
    <div>
<!-- PHP Code for left section -->
  <?php 
          $user_id = $_GET['user_id'];
          $s_user = $conn->query("select * from user where email_id = '$user_id' ");
          $s_user_res = $s_user->fetch_array(MYSQLI_BOTH);
              if($s_user_res== '.' || $s_user_res=='..') continue;
                {
                }
                echo "<center><img  width='170px' height='150px' src='media/".$s_user_res['profile_pic']."'style='border:5px solid white'></center>";
                echo "<h2>".$s_user_res['first_name']." ".$s_user_res['last_name']."</h2>";
                ?>
<!-- End of PHP Code of the left section -->
  </div></center>
  <div class="left-section-menu">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Post</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Send Message</a></li>
  </ul>
  </div>
  </div>
  <div class="center_section">
    <div class="image-display">
<!-- PHP Code for center section -->
  <?php
      echo "<center><img  style='width:100%;' src='media/".$s_user_res['cover_pic']."'></center>";
  ?>
  <!-- End of PHP Code of the center section -->
  <a href="#">First link</a><a href="#">First link</a><br><a href="#">First link</a>
    </div>
    <div class="text-section">
      Post<hr>
<!-- ###################################### -->
<?php 
      $sql="select * from post where email_id='$user_id' order by date";
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
     echo "<img  style='width:100%;height:300px;' class='img-responsive' src='media/".$row['url']. "'></br>";
     echo " ".$row['content'];
     echo  "<div class='read-more padding text-center'>";
     echo '<a href="post_session.php?post='. $row['post_id']. ' ">Read More</a>' ;
         echo "</div>";
      }
  
     }
  
?>
<!-- ######################################-->
    </div>
  </div>
  <div class="right_section">
  <hr>
  Posts
  <!-- End of PHP Code of the left section -->
  <!-- End of PHP Code of the center section -->
  </div>
  </div>
  <!--Footer Start-->
  <div  style="margin-left:60px">
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
<!-- END of PHP Code for the Popular post value -->          
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

<!-- PHP Code for priting the recent post value --> 
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
<!-- END of PHP Code for priting the recent post value --> 
                  
                    </ul>
                </div>
    </div>
     <div class="col-lg-12 top2 bottom2">
      <div class="text-center"><font color="Maroon">Copy Right &copy; I-Connect</font> </div>
    </div>

<script src="js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jssor.js" type="text/javascript"></script>
</body>
</html>