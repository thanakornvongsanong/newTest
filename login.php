<?php  
	session_start();
	ob_start();
	$_SESSION['login']="Login";

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="GET" action="controller.php">
		<h1 class="text-center">Login</h1>
		Username: <input type="text" name="username">
		Password: <input type="password" name="password">
		<button type="submit" class="btn btn-primary">Submit</button>	
	</form>
	
</body>
<?php ob_end_flush() ?>
</html>