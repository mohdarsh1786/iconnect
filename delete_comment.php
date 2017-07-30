<?php
  require('connection.php');
?>  
<html>
  <head>
  <link href="css/admin.css" rel="stylesheet">
   </head>
   <title>
   delete comment 
   </title>
   <body >
     <link href="css/dropdown.css" rel="stylesheet">
 
      <div id="fixheader">
   <center><font color="black">  Facilator PORTAL</font></center>
     
     <a href="admin_dashboard.php" ><font color="orange">Facilator Portal</font></a>&nbsp;&nbsp;&nbsp;
      <div class="w3-dropdown-hover">
      <font color="orange"><button class="w3-button">Delete</button></font>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="delete_user.php" class="w3-bar-item w3-button">Delete user</a>
        <a href="delete_post.php" class="w3-bar-item w3-button">Delete post</a>
        <a href="delete_comment.php" class="w3-bar-item w3-button">Delete comment</a> 
      </div>
    </div>
	    <a href="logout.php"><font color="orange">Logout</font></a>&nbsp;&nbsp;&nbsp;
    </div>   
  <div id="form">
      <form action="delete_comment.php" method="post" bgcolor="red">
	     <?php
            $sql=$conn->query("select post_id,comment_id,first_name,last_name from comment as c,user as u where c.commenter_id=u.email_id");
			$count=$sql->num_rows;
			if($count>0)
			{
			echo "<table><tr><td width='300'><font size='6px' color='red'>Post id</td><td width='300'><font size='6px' color='red'>Cid</td><td width='300'><font size='6px' color='red'>Name</td><td width='300'><font size='6px' color='red'>Action</td></tr>";
            while($row=$sql->fetch_array(MYSQLI_BOTH))
			{
            echo "<tr><td width='300'><font size='5px' color='black'>".$row['post_id']."&nbsp;&nbsp;&nbsp;</td><td width='300'><font size='5px' color='black'>".$row['comment_id']."</td><td width='300'><font size='5px' color='black'>"
			   .$row['first_name'].''.$row['last_name'].'</td><td width="300px"><font size="6px">
			<a href="delete_comment.php?comment_id='. $row['comment_id']. ' ">Delete</a><td></tr>';
			
			
			}
        echo "</table>";
			}
							if(isset($_GET['comment_id'])){
							$delete = $_GET['comment_id'];
				
				$sql=$conn->query("delete from comment where comment_id='$delete'");
			       
							}
		
		?>		 
	    
	  </form>
  </div>
  
  
  </body>
</html>

