<?php
  require('connection.php');
?>  
<html>
  <head>
   </head>
   <title>
   delete user 
   </title>
   <body bgcolor="white">
     <link href="css/dropdown.css" rel="stylesheet">
 <link href="css/admin.css" rel="stylesheet">
 
  <div id="fixheader">
   <center><font color="black">  Facilator Portal</font></center>
     
     <a href="admin_dashboard.php" ><font color="orange">Facilator Portal</font></a>&nbsp;&nbsp;&nbsp;
      <div class="w3-dropdown-hover">
      <font color="orange"><button class="w3-button">Delete</button></font>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="delete_user.php" class="w3-bar-item w3-button">Delete user</a>
        <a href="delete_post.php" class="w3-bar-item w3-button">Delete post</a>
        <a href="delete_comment.php" class="w3-bar-item w3-button">Delete comment</a> 
      </div>
    </div>
	    <a href="logout.php"><font color="orange">logout</font></a>&nbsp;&nbsp;&nbsp;
       
    </div>   
     
  <div id="form">
      <form action="delete_user.php" method="post" bgcolor="red">
	     <?php
            $sql=$conn->query("select email_id,first_name,last_name from user");
			$count=$sql->num_rows;
			if($count>0)
			{
				echo "<table><tr><td width='300'><font size='6px' color='red'>Email</td><td width='300'><font size='6px' color='red'>Name</td><td><font size='6px' color='red'>Action</td></tr>";
            while($row=$sql->fetch_array(MYSQLI_BOTH))
			{
            echo "<tr><td width='300'><font size='5px'>".$row['email_id']."</font>&nbsp;&nbsp;&nbsp;</td><td width='300px'><font size='5px'>".$row['first_name']."  ".$row['last_name'].'</td>
			   <td width="300px"><font size="6px">
      <a href="delete_user.php?email_id='. $row['email_id']. ' ">Delete</a><td></tr>';
			
			
			}
      echo "</table>";
			}
							if(isset($_GET['email_id'])){
							$delete = $_GET['email_id'];
				
				$sql=$conn->query("delete from user where email_id='$delete'");
			       
							}
		
		?>		 
	    
	  </form>
  </div>
  
  
  </body>
</html>
	  
  