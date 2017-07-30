<?php
include('connection.php');
session_start();

if($_SESSION['flag']=='unset')
{
$post_id=$_GET['post']; 
$_SESSION['post_id'] = $post_id;
header('location:visitor.php');
}
else if($_SESSION['flag']=='set')
{
$_SESSION['post_id'] = $_GET['post'];
header('location:single_post.php');
}
?>