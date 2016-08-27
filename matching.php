<?php 
	$level="";

	$im3 = $_GET['requirements3'];
	$im2 = $_GET['requirements2'];
	$im1 = $_GET['requirements1'];
/*
	if (isset($im3)&&isset($im2)&&isset($im1)) {
		echo $im3."__".$im2."__".$im1;
	}
*/

	$host="localhost";
	$username="kaw";
	$password="kaw";
	$db="mytest";

	$link=mysqli_connect($host,$username,$password,$db) or die("Can not connect to database!!");

	$sql = "SELECT * FROM search where smoke = '{$im3}' and gender ='{$im2}' and animal = '{$im1}'";
	$sql = "SELECT * FROM search where smoke ";
	$result = mysqli_query($link,$sql);
	//$showResult = mysqli_fetch_array($result);
/*
	while ($showResult) {
		echo $showResult['0'].$showResult['1'].$showResult['2'].$showResult['3']."____";
	}
*/

	

 ?>

 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<?php 
 	
 		echo "<table>";
 		while ($showResult = mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>{$showResult['0']}</td>";
			echo "<td>{$showResult['1']}</td>";
			echo "<td>{$showResult['2']}</td>";
			echo "<td>{$showResult['3']}</td>";
			echo "<td>{$showResult['4']}</td>";
			echo "</tr>";
		}echo "</table>";

/*
		while ($showResult = mysqli_fetch_array($result)) {
			echo $showResult['0'];
			echo $showResult['1'];
			echo $showResult['2'];
			echo $showResult['3'];
			echo $showResult['4'];
		}
*/
 	 ?>
 </body>
 </html>