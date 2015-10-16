<?php
session_start();
//include_once 'userLoginVerify.php';// includes the login script
//include_once 'recruiterLoginVerify.php';//includes th session started which i have started manually....
/*if(isset($_COOKIE['auth_username']) && isset($_COOKIE['auth_password'])){
	header("location: user_profile.php");
//	echo "from the cookie index page";
}*/
if(isset($_SESSION['login_user'])){
	header("location: user_profile.php"); // make the homepage of the user and redirect this page to the user side...
//	echo "from the index with session";
	//make the user homepage; and redirect the user to his own homepage...
	//echo"workin!!!";
}
else if(isset($_SESSION['login_recruiter'])){
	header("location: recruiter_profile.php");
}
/*else{
	echo "not sended to the profile page";
}*/
?>
<?php 
	include_once './Development/commonfiles/header.php';
	//include_once './Development/commonfiles/header_login.php';
	include_once './Development/commonfiles/searchbar.php';
?>
	<title>Get Recruit Yourself</title>
<!--<form action="userLoginVerify.php" method="post">
	<input type="email" name="userEmailid" placeholder="enter the username" required=""/><br />
	<input type="password" name="userPassword" placeholder="enter the password" required=""/><br />
	<input type="submit" name="userLoginSubmit" value="Sign In" />
	<span> <?php echo $error; ?></span>
</form>-->
<!-- CArousel starts from here..... -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li class="" data-target="#myCarousel" data-slide-to="1"></li>
        <li class="" data-target="#myCarousel" data-slide-to="2"></li>
        <li class="" data-target="#myCarousel" data-slide-to="3"></li>
        <!--<li class="" data-target="#myCarousel" data-slide-to="4"></li>-->
        
     </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="Design/Images/carousel/image1-carousel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="header-style">We are first cloud based job portal covering all of your devices</h1>
              <!--<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            --></div>
          </div>
        </div>
        
        <div class="item">
          <img class="first-slide" src="Design/Images/carousel/carousel-image2.png" alt="First slide">
            <div class="carousel-caption">
            	<div class="container">
            		<div class="col-md-4"></div>
            		<div class="col-md-4">
		              <h1 class="header-style">Are You a Developer?</h1>
		              <p>Are you a developer waiting for a job? Don't worry we coverd you we have lots of jobs in programming languages, we are covering programmin lanuguages like:<code>JAVA,J2EE,C#,C++,PHP</code></p>
		              <p><a class="btn btn-lg btn-primary" href="userregister.php" role="button">Sign up today</a></p>
            		</div>
            		<div class="col-md-4"></div>
            </div>
          </div>
        </div>
        
        <div class="item">
          <img class="first-slide" src="Design/Images/carousel/carousel-image4.png" alt="First slide">
          <div class="container">
         <!--   <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
         </div> -->
          </div>
        </div>
        
        
        <div class="item">
          <img class="second-slide" src="Design/Images/carousel/carousel-image5.png" alt="Second slide">
            <div class="carousel-caption">
            	<div class="container">
            	<div class="col-md-5">
              <h1 class="header-style">Unemployed yet... Why?</h1>
              <p>We have Lakhs of Vacancy in all job types. waiting just for you, so why wait register below and Recruit Your Self.</p>
              <p>If you Register now you will Receive Special Benefits like: Resume Booster,Dyanmic Profile etc...</p>
              <p><a class="btn btn-lg btn-primary" href="userregister.php" role="button">Register</a></p>
            	</div>
            </div>
          </div>
        </div>
        <!--<div class="item">
          <img class="third-slide img-responsive" src="Design/Images/carousel/carousel-image7.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more for good measure.</h1>
              <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>-->
      </div>
      
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- .... carousel wii be end at here .... -->
    <!-- marketing strarts from here.... --->
    <div class="container">
    <div class="row" style="">
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" height="140" width="140">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        </div><!-- /.col-lg-4 -->
      </div>
      </div>
      <!--marketing ends here .... -->
      <!--Company profile starts from here ...  -->
      <div class="logo-showcase-out">
      			<h2>We are Recruiting</h2>
      <div class="container logo-showcase">
      	<div class="row company-logo-allignment">
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/IBM.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/Pearson.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/Remington.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/citysprint.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/cyberark.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/google.jpg" class="img-thumbnail"/></div>
      	</div>
      	<div class="row company-logo-allignment">
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/infosys.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/intel.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/raymond.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/staples.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/tcs-logo.gif" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/verizon.png" class="img-thumbnail"/></div>
      	</div>
      	<div class="row company-logo-allignment">
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/toyota.gif" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/knight-frank.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/ESSAR.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/Samsung.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/WA.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/ford.jpg" class="img-thumbnail"/></div>
      	</div>
      	<div class="row company-logo-allignment">
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/nordion.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/infinity.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/hp.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/hitachi.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/heinemann.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/godrej.gif" class="img-thumbnail"/></div>
      	</div>
      </div>
      </div>
      <!-- Company profiles ends here .... -->
<?php
	//include_once './Development/forms/register_user.php';
	include_once './Development/commonfiles/footer.php';
?>
