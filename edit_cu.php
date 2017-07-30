<?php
if($_GET['comment_edit'])
{
      $comment_id=$_GET['comment_edit']; 
      $comment = $conn->query("update comment set comment='$new_comment where comment_id='$comment_id'");
      if($comment)
      {
      	echo "Your comment has been updated";
      }
 }
 ?>
