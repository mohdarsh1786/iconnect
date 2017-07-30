<?php
$servername = "localhost";
$user = "id2246876_iconnect";
$password = "iconnect";
$database = "id2246876_iconnect";
$conn = mysqli_connect($servername,$user,$password,$database);
if($conn)
 {
	//echo "successfully connected";
 }
 else
 {
	 echo "not connected";
 }
?>