<?php 
require('connection.php');
session_start();
?>
<html >
<head>
  <meta charset="UTF-8">
  <title>Blog</title>
  <link href=""  rel='stylesheet' type='text/css'>
  <link rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  </head>
<body>
	<center><div style="margin-top:40px;margin-bottom: 50px;">
	<a href="index.php"><img src="images/logo.png" height="80" width="200"></a></center></div>
	<br><br><br><br>
  <div class="form">
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      <div class="tab-content">
        <div id="login">  
<!-- HTML CODE FOR LOGIN FORM --> 
            <form action="user_login.php" method="post">
	            <input type="email" id="email_id" name="email_id" required autocomplete="off" placeholder="Email Address"/><br><br>
	                 <input type="password" id="password" name="password" required autocomplete="off" placeholder="Password"/><br><br>       
	            <button type="submit" id="login" name="login" class="button button-block"/>Log In</button>
            </form>
<!-- PHP CODE FOR USER LOGIN AUTHENTICATION -->
		    		<!-- END OF PHP CODE -->
        </div>
         <div id="signup">
<!-- HTML CODE FOR SIGNUP FORM -->
           <form action="user_login.php" method="post">         
              <input type="text"  class="name_box" name="first_name"  placeholder="First Name" /><br>
          		 <input type="text" class="name_box" name="last_name" required autocomplete="off" placeholder="Last Name" /><br>
			     	 <input type="option" name="gender" placeholder="Gender"><br>		
            	 <input type="email" name="email_id" required autocomplete="off" placeholder="Email Address"/><br>
			  <input type="password" name="password" required autocomplete="off" placeholder="password"/><br>
          	<button type="submit" name="sign_up" class="button button-block" />Sign Up</button>
          </form>
         </div>
    </div>
    </div> <!-- /form -->	

<!-- PHP CODE FOR SIGNUP OF NEW USER -->
		<?php
         if(isset($_POST['sign_up']))
		 {
	    	 $first_name=$_POST['first_name'];
			 $last_name=$_POST['last_name'];
			 $gender=$_POST['gender'];
			 $email_id=$_POST['email_id'];
			 $password=$_POST['password'];		  
		     $sql="insert into user(first_name,last_name,gender,email_id,password) values('$first_name',
			 '$last_name','$gender','$email_id','$password')";
			 if(mysqli_query($conn,$sql))
			 {
				 echo "<font color='#283747' size='5px'>Registration Successfull<a href='user_login.php'>....Click to login</a></font>";
			 }
			 else
			 {
				 echo "<font color='#8e3d21' size='5px'>Sorry!..We are already having one account with this id... </font>";
			 }
		 }
   ?>
<!-- PHP CODE END -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>
</body>
</html>