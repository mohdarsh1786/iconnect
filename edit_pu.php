<?php
if(isset($_POST['post_edit']))
{
      $post_id=$_GET['post_edit']; 
      $content = $_POST['new_content']
      $post_res = $conn->query("update post set content="$content"where post_id='$post_id'");
      if($post_res)
      {
      	echo "Your post has been deleted";
      }
 }
 ?>