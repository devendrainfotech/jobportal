<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Get Recruit Yourself</title>
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link type="text/css" href="Design/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
		<link type="text/css" href="Design/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/style.css" rel="stylesheet"/>
		
		<script type="text/javascript" src="Design/Jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="Design/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<?php 
		if( isset($_COOKIE["UserId"]) ){
			header("location:UserProfile.php");
		}
		else{
			include_once './Development/commonfiles/header.php';
			include_once './Development/commonfiles/searchbar.php';
		}
	?>
	<form method="post" action="CheckRegistration.php">
		<h2>Create a new account ?</h2>
			<input type="text" placeholder="First Name" class="form-control" />
			<input type="text" placeholder="Middle Name" class="form-control" />
			<input type="text" placeholder="Last Name" class="form-control" />
			<input type="email" placeholder="Email Id" class="form-control" />
			<input type="password" placeholder="Password" class="form-control" />
			<input type="text" placeholder="Mobile No" class="form-control" />
			<input type="text" placeholder="Question" class="form-control" />
			<input type="text" placeholder="Answer" class="form-control" />

			<input type="submit" class="btn btn-warning" />
			<input type="Reset" class="btn btn-info" />
	</form>
<?php
	include_once './Development/commonfiles/footer.php';
?>
 </body>
</html>