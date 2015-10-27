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
	header("location: recruiterhomepage.php");
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
        
     </ol>
      <div class="carousel-inner" role="listbox">
        
        <div class="item active">
          <img class="first-slide" src="Design/Images/carousel/image1-carousel.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 class="header-style">We are first cloud based job portal covering all of your devices</h1>
              </div>
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
    <div class="marketing">
    <div class="container">
    <div class="row" style="">
        <div class="col-lg-4">
        	<div class="inside-marketing">
          <img class="img-circle img-thumbnail" src="Design/Images/indexdetail/job.jpg" alt="Generic placeholder image" height="140" width="140">
          <h2>Local Jobs</h2>
          <p>The right job, close to home or across the country. Simply Hired makes it easy for you to find the job that fits your life. Browse by town, zip code, or explore by state.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        	--></div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        	<div class="inside-marketing">
          <img class="img-circle img-thumbnail" src="Design/Images/indexdetail/comany.jpg" height="140" width="140">
          <h2>Company Directory</h2>
          <p>With thousands of hiring companies in our database, Simply Hired is the best place on the web to find the right company that matches your skills, needs, and goals.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        --></div>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="inside-marketing">
          <img class="img-circle img-thumbnail" src="Design/Images/indexdetail/employers.jpg" alt="Generic placeholder image" height="140" width="140">
          <h2>For Employers</h2>
          <p>Connects over 30 million unique job seekers with millions of jobs each month. Sponsoring jobs gives you a cost-effective solution for reaching qualified candidates.</p>
          <!--<p><a class="btn btn-default" href="#" role="button">View details »</a></p>
        --></div><!-- /.col-lg-4 -->
      	</div>
      </div>
      </div>
      </div>
      <!--marketing ends here .... -->
      <!--Company profile starts from here ...  -->
      <div class="logo-showcase-out">
      <div class="container logo-showcase">
      	<h3>We are Recruiting</h3>
      			<hr>
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
      	<hr>
      	<!--<div class="row company-logo-allignment">
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/nordion.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/infinity.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/hp.jpg" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/hitachi.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/heinemann.png" class="img-thumbnail"/></div>
      		<div class="col-sm-2"><img src="Design/Images/companylogoes/godrej.gif" class="img-thumbnail"/></div>
      	</div>-->
      </div>
      </div>
      <!-- Company profiles ends here .... -->
<div class="testimonial-content">
<div class="container content">
    <div class="row">
        <div class="col-md-4">
            <div class="testimonials">
            	<div class="active item">
                  <blockquote><p>"I appreciate all the work you put into finding legitimate work from home positions, because I worked for months doing the same thing before I found Job Portal. After I joined Job Portal, I got a job and have been working with the company for almost a year now. I recently got a promotion too! Job Portal is wonderful and thanks for everything! :)"</p></blockquote>
                  <div class="carousel-info">
                    <img alt="" src="Design/Images/indexdetail/test1.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="testimonials-name"><b>Andrea Maneval</b></span>
                      <span class="testimonials-post">Commercial Director</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonials">
                <div class="active item">
                  <blockquote><p>"I love Job Portal. It only took me two weeks to find a job to provide supplemental income. I wanted the job to be interesting too! This job as a Local Editor for OurTown will be perfect. I found out about your site from an AOL story that said, 'according to Job Portal ....', so I looked for your site, and the rest is history. I would suggest it to anyone!"</p></blockquote>
                  <div class="carousel-info">
                    <img alt="" src="Design/Images/indexdetail/test2.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="testimonials-name"><b>Kim Lemrick</b></span>
                      <span class="testimonials-post">Senior Designer</span>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="testimonials">
                <div class="active item">
                  <blockquote><p>"I just wanted to say thanks for having such a great website. It is so worth the money. I found a part-time job after only two weeks. It is in freelance writing, which is a field I had never thought about before. I love it. I am able to work as little or as much as I want on my own schedule. I never would have found this opportunity on my own. Kudos!"</p></blockquote>
                  <div class="carousel-info">
                    <img alt="" src="Design/Images/indexdetail/test3.jpg" class="pull-left">
                    <div class="pull-left">
                      <span class="testimonials-name"><b>Bill Lehman</b></span>
                      <span class="testimonials-post">Project Manager</span>
                    </div>
                  </div>
                </div>
            </div>
            </div>
    </div>
</div>
</div>
<?php
	include_once './Development/commonfiles/footer.php';
?>
