<?php

$conn = new mysqli('localhost','root','','sparks_bank');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
}


?>