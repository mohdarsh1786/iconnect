<?php require('connection.php');
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
<div id="div1">
<a href="index.php"><img src="images/home.png" height="100" width="100"></a>
 
 </div>
  <div class="admin">
      
      
        
        <div id="admin">   
          
          <center><font color="white" size="10">Admin Login </font></center>
          
          <form action="admin_login.php" method="post">
          
            
            
            <input type="email" id="email_id" name="email_id" required autocomplete="off" placeholder="Email Address"/>
        
          
            <br>
			<br>
           
            <input type="password" id="password" name="password" required autocomplete="off" placeholder="Password"/>
                   <br>
				   <br>
          <button type="submit" name="login" id="login" class="button button-block" /><center>Log In</button>
		   
		   
		     <?php
						if(isset($_POST['login'])){
							$email_id=$_POST['email_id'];
							$password=$_POST['password'];
							$result=$conn->query("select email_id,password from admin");
							$row=$result->num_rows;
							
							if($row>0)
							{
								while($s=$result->fetch_array(MYSQLI_BOTH))
								{
						        	if($s['email_id']==$email_id && $s['password']==$password)
						        	{
							    	   $_SESSION['email_id'] = $email_id;
						     		   header('location:admin_dashboard.php');
									
							        }
								}
							}
							else{
								echo "<font size='5px' color='red'>Wrong...id!...</font>";
							
							}
						}
					
					?>
		  
		  
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
