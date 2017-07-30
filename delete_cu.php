<?php
include('connection.php');
if($_GET['comment_delete'])
{
      $comment_id=$_GET['comment_delete']; 
      $comment = $conn->query("delete from comment where comment_id='$comment_id'");
      if($comment)
      {
      	echo "Your comment has been deleted";
      	header("location:single_post.php");
      }
 }
 ?>