<?php 
session_start();
include "connectDB.php";
$msg=null;
$error=null;
function login($username,$password){
	if (isset($username)&&isset($password)) {
		if ($username=="kaw"&&$password=="kaw") {
			$dest= "Location: page2.php";
			return $dest;
		}
	}
}

function loginSession($username,$password){
	if (isset($username)&&isset($password)) {
		if ($username=="kaw"&&$password=="kaw") {
			$dest= "Location: show.php";
			setcookie("connected",$password);
			$_SESSION['msg'] = "pass";
			return $dest;
		}else{
			$_SESSION['msg'] = "fail";
			return "Failllllllll";
		}
	}
}

function register($fname,$lname){
	if (isset($fname)&&isset($lname)) {
		$first = $fname;
		$last = $lname;

		$host="localhost";
		$username="kaw";
		$password="kaw";
		$db="loginfb";
		$link=mysqli_connect($host,$username,$password,$db) or die("Can not connect to database!!");
		$sql = "INSERT INTO test(id,fname,lname) VALUES('','$first','$last')";
		$doIT = mysqli_query($link,$sql);
		return header("location: index.php");
	}else{
		return header("location: page2.php");;
	}
}



 ?>