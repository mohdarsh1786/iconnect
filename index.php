<?php
	include('connection.php');
	session_start();
	$_SESSION['flag']='unset';
	header('location:home.php');
?>