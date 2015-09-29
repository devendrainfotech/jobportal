<!DOCTYPE html>
<html lang="en"><head>
    <link rel="shortcut icon" href="design/images/favicon.png">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link type="text/css" href="Design/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
		<link type="text/css" href="Design/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/style.css" rel="stylesheet"/>
		
		<script type="text/javascript" src="Design/Jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="Design/bootstrap/js/bootstrap.js"></script>
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
          <a class="navbar-brand" href="index.php">
			<img src="design/images/favicon.png"/>
			Job Portal
		  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
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
function showUserData(){
	echo '  				
		<li>
			<div class="btn-group">
				<a href="#"><img class="img-circle" src="Design/Images/' . $_COOKIE["UserId"] . '.jpg"/></a>
				<a href="#"><img class="img-circle" src="Design/Images/notification.jpg"/><b><sup>2</sup></b></a>
				<a href="#"><img class="img-circle" src="Design/Images/loading.gif"/><b><sup>2</sup></b></a>
			</div>
		</li>
	</ul>
		';
}

	if( isset($showSignIn) ){
		if( $showSignIn == true ){
	echo '  
		<ul class="nav navbar-nav navbar-right setting-the-navbar-right">
		';
		if( isset($_COOKIE["UserId"]) ){
			//header("location:UserProfile.php");
			showUserData();
		}
		else{
		
		echo '
            <!-- Login Button Coding Start Here -->
            <li>
            	<div class="btn-group">
			  	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Sign In <span class="caret"></span>
			  	</button>
			  	<ul class="dropdown-menu">
			  		<div>
			  	<form class="setting-the-dropdown-menu-margin" Method="POST" action="CheckLogIn.php">
    				<div class="form-group">
				    <input type="email" class="form-control" id="exampleInputEmail1" name="txtEmailId" placeholder="Enter the Email id">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="exampleInputPassword1" name="txtPassword" placeholder="Password">
				  </div>
				  <div class="radio-group">
					<input type="radio" name="rbGender" checked="checked"/><label>Jobseeker</label>
					<input type="radio" name="rbGender"/><label>Recruiter</label>
				  </div>
				  <div>
				    <label>
				      <a href="#">Forgot your password ?</a></center>
				    </label>
				  </div>				  
				  <li role="separator" class="divider"></li>
				  <center><input type="submit" class="btn btn-success" value="Submit"/></center>
				</div>
    			</form>
  				</ul>
			    <!-- 
				  </form>-->
			  
				</div>
				</li>
				<li>
				<div class="btn-group">
				<a href="RegistrationForm.php" class="btn btn-warning">Register</a>
				</div>
				</li>
				<!-- Login Button Coding ends Here -->
				<!--<li><a href="../navbar/">Default</a></li>
				<li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
				<li><a href="../navbar-fixed-top/">Fixed top</a></li>-->
		  ';
		  }
		}
	else if ( $showSignIn == false ){
	echo '  
		<ul class="nav navbar-nav navbar-right setting-the-navbar-right">
		';
		if( isset($_COOKIE["UserId"]) ){
			//header("location:UserProfile.php");
			showUserData();
		}
	}
	}
	else{
	echo '  
		<ul class="nav navbar-nav navbar-right setting-the-navbar-right">
		';
		if( isset($_COOKIE["UserId"]) ){
			showUserData();
		}
	}
	?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>