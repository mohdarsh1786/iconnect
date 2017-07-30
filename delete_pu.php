<?php
include('connection.php');
if($_GET['post_delete'])
{
      $post = $_GET['post_delete']; 
      $post_res = $conn->query("DELETE from post where post_id ='$post'");
      if($post_res)
      {
      	echo "Your comment has been deleted";
      	header('location:single_post.php');
      }
 }
?>
