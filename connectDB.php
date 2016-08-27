<?php 
	$host="localhost";
	$username="kaw";
	$password="kaw";
	$db="loginfb";

	//$link=mysqli_connect($host,$username,$password,$db) or die("Can not connect to database!!");
	$link=mysqli_connect($host,$username,$password,$db) or die("Can not connect to database!!");

	$sql = "SELECT * FROM test";
	$result = mysqli_query($link,$sql);
	$showResult = mysqli_fetch_array($result);

	$sqlin = "INSERT INTO test VALUES('','LLL','LLL')";
	$RE= mysqli_query($link,$sqlin);
	/*
	while ($showResult) {
		echo $showResult['0'].$showResult['1'].$showResult['2'];
	}*/
 ?>

 