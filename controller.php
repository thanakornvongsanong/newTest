<?php 
	include "model.php";
	$username=$_GET['username'];
	$password=$_GET['password'];
	
	header(loginSession($username,$password));
 ?>