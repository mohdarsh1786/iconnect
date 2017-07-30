<?php
  require('connection.php');
?>  
<html>
  <head>
   </head>
   <title>
   delete post 
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
    <div id="form" >
      <form action="delete_post.php" method="post" bgcolor="red">
	     <?php
            $sql=$conn->query("select category,post_id,first_name,last_name from post as p,user as u where p.email_id=u.email_id");
            $count=$sql->num_rows;
         if($count>0)
			{
		       echo "<table><tr><td width='300'><font size='6' color='red'>Category</td><td width='300'><font size='6' color='red'>Post id</td>
		       <td width='300'><font size='6' color='red'>Name</td>
		       <td width='300'><font size='6' color='red'>Action</td></tr>";		
            while($row=$sql->fetch_array(MYSQLI_BOTH))
			{
            echo "<tr><td width='300'><font size='5' color='black'>".$row['category']."&nbsp;&nbsp;&nbsp;</td><td width='300'><font size='5' color='black'>".$row['post_id']."</td><td width='300'><font size='5' color='black'>"
			   .$row['first_name'].''.$row['last_name'].'</td><td width="300px"><font size="6px">
			<a href="delete_post.php?post_id='. $row['post_id']. ' ">Delete</a><td></tr>';
			
			}
      echo "</table>";
		  }
							if(isset($_GET['post_id'])){
							$delete = $_GET['post_id'];
				
				$sql=$conn->query("delete from post where post_id='$delete'");
			       
							}
		
		?>		 
	    
	  </form>
  </div>
  </body>
</html>