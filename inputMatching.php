<?php  ?>

<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<form action="matching.php" method="GET">
			<h1 class="text-center">Please enter you requirements sort by importance</h1>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<select name="requirements3" id="inputRequirements" class="form-control" required="required">
										<option value="smoke3">Smoke - Alway</option>
										<option value="smoke2">Smoke - Sometime</option>
										<option value="smoke1">Smoke - Never</option>
										<option value="animal2">Animal - Yes</option>
										<option value="animal1">Animal - No</option>
										<option value="gender2">Gender - Male</option>
										<option value="gender1">Gender - Female</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<select name="requirements2" id="inputRequirements" class="form-control" required="required">
										<option value="smoke3">Smoke - Alway</option>
										<option value="smoke2">Smoke - Sometime</option>
										<option value="smoke1">Smoke - Never</option>
										<option value="animal2">Animal - Yes</option>
										<option value="animal1">Animal - No</option>
										<option value="gender2">Gender - Male</option>
										<option value="gender1">Gender - Female</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<select name="requirements1" id="inputRequirements" class="form-control" required="required">
										<option value="smoke3">Smoke - Alway</option>
										<option value="smoke2">Smoke - Sometime</option>
										<option value="smoke1">Smoke - Never</option>
										<option value="animal2">Animal - Yes</option>
										<option value="animal1">Animal - No</option>
										<option value="gender2">Gender - Male</option>
										<option value="gender1">Gender - Female</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
					<br><button type="submit" class="btn btn-primary">Submit</button>
			</div>	
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"></div>

		</form>
		
		

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>