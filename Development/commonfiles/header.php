<!DOCTYPE html>
<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="icon" href="Design/Images/icons/tabicon.png" />
		<!-- All the css files are including here.... -->
		<link type="text/css" href="Design/manual/css/jquery-ui.min.css" rel="stylesheet"/>
		<!--<link type="text/css" href="Design/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
		<link type="text/css" href="Design/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/footer-distri.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/style.css" rel="stylesheet"/>
		<!-- -->
		<link type="text/css" href="]extra/formvalidation-master/dist/css/formValidation.min.css" rel="stylesheet"/>
		
		<!-- -->
		<!-- All the css files are including ABOVE.... -->
		<!-- All the JAVASCRIPT files are including BELOW -->		
		<script type="text/javascript" src="Design/Jquery/jquery-min.js"></script>
		<script type="text/javascript" src="Design/Jquery/jquery-ui.min.js"></script>
		<script type="text/javascript" src="Design/bootstrap/js/bootstrap.js"></script>
		<!-- All the JAVASCRIPT files are including ABOVE-->
		<!-- -->
		<script type="text/javascript" src="Design/bootstrap/js/npm.js"></script>
		
		
		<script type="text/javascript" src="]extra/formvalidation-master/dist/js/formValidation.min.js"></script>
		<script type="text/javascript" src="]extra/formvalidation-master/dist/js/language/en_US.js"></script>
		<script type="text/javascript" src="]extra/formvalidation-master/dist/js/framework/bootstrap.min.js"></script>
		
		<!-- -->
	<!--<script>
	// i gonna add later this code in separate file as soon as works :)
	// script for the header bar for the highlighted links....
	// i havve aready debug the follwing script i think there are some issue with the click event we have to try some other event....
	// take care of that when you add click ebent in jquery click should not open new page or all the thing will be ruined.... :) 
	$(document).ready(function(){
		$(".nav .default").click(function(){
			$(".active").removeClass("active").addClass("default");
			$(this).removeClass("default").addClass("active");
		});
	});
	// script for the header bar for the highlighted links....
</script>-->
	
	</head>
	<body>

<nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Job Portal</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!--<li class="active"><a href="index.php">Home</a></li>-->
            <li class="default"><a href="aboutus.php">About</a></li>
            <li class="default"><a href="recruiter_registration.php">Recruiter</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Diff. Forms<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><a href="user_profile.php">User_Profile page</a></a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          
			  	<?php
			  	if(!empty($_SESSION['login_user'])){
			  		include_once 'header_right_with_login.php';
			  	}else if(!empty($_SESSION['login_recruiter'])){
					include_once 'recruiter_header_right.php';		
				}
				else{
					include_once 'header_right_without_login.php';
				}
			  	?>
			  	
        </div><!--/.nav-collapse -->
      </div>
    </nav>