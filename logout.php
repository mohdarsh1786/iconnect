<?php
include('connection.php');
session_start();
unset($_SESSION['flag']);
//Destroy entire session
session_destroy();
//Redirect to homepage
header("Location:index.php");
?>