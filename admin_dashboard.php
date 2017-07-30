<?php
   include('connection.php');
    session_start();
?>
<html>
<head>
         <link href="css/dropdown.css" rel="stylesheet">
       <link href="css/admin.css" rel="stylesheet">
</head>
  <title>
  admin page
  </title>

 <body >
    <div id="fixheader">

   <center><font color="black">ADMIN PORTAL</font></center>

    <a href="admin_dashboard.php" ><font color="orange">Admin Portal</font></a>&nbsp;&nbsp;&nbsp;
      <div class="w3-dropdown-hover">
      <font color="orange"><button class="w3-button">Delete</button></font>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="delete_user.php" class="w3-bar-item w3-button">Delete user</a>
        <a href="delete_post.php" class="w3-bar-item w3-button">Delete post</a>
        <a href="delete_comment.php" class="w3-bar-item w3-button">Delete comment</a> 
      </div>
    </div>
	    <a href="logout.php"><font color="orange">logout</a>&nbsp;&nbsp;&nbsp;
  </div>   
     
	     <form action="admin_dashboard.php" method="post">
	     <div id="view">	
         <label for="required"><font color="green">change view:</font> </label>
			     <select name="view" tabindex="4" required="required">   
					  <option >select</option>
			         <option >change by like</option>
			          <option >change by date</option>
			       
			      </select>
		  </div>
			<div id="button">
			&nbsp;<input type="submit" name="submit" value="submit">
                </div> </br>
            <center> <h1><font color="red">!!!Our Admins!!!</font></h1></center>
           <div id="photo">

	     <table><tr><td width="300"><img src="images/yogi.jpg" width="230" height="220"></td>
	   <td width="300"> <img src="images/arsh.jpg" width="230" height="220"></td>
	    <td width="300"> <img src="images/avnish.jpg" width="230" height="220"></td></tr>
	     <tr><td><font color="green" size="6">Yogendra</font></td>
	          <td><font color="green" size="6" >Mohd. Arsh</font></td>
	           <td><font color="green" size="6">Avnish</font></td></tr></table> 
           </div>
	     <div id="footer">
	     </div>

				</form>
  </body>
  </html>
  <?php
      if(isset($_POST['submit']))
	  {
		  $view=$_POST['view'];
		
		  if($view=='change by date')
		  {
			   $sql1=$conn->query("update index_view set value='1' where view='date'");
			   $sql2=$conn->query("update index_view set value='0' where view='like'");
		  }
		  else
		  {
			  $sql1=$conn->query("update index_view set value='0' where view='date'");
			  $sql2=$conn->query("update index_view set value='1' where view='like'");
		  }
		
		 
	  }
?>	  
		  
	  
  