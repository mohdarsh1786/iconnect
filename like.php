<?php
include('connection.php');
session_start();
if(isset($_POST['like_btn']))
  {
    $email = $_SESSION['email_id'];
    $post_id = $_SESSION['post_id'];
    $like_q1 = $conn->query("INSERT into like_tb(post_id,email_id)values('$post_id','$email')");
    if($like_q1){
    $like_q2 = $conn->query("UPDATE post set likes =likes+1 where post_id='$post_id'");
    }
    if($like_q1 and $like_q2)
    {
    	header('location:single_post.php');
    }
    else
    {
      echo "Wrong result";
    }
  }
?>