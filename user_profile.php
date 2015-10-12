<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
	include_once 'usercookie.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
?>
<head>
	<link rel="stylesheet" href="./Design/manual/css/userprofile.css" />
</head>
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
<div class="container">
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="Design/Images/dev.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="Design/Images/dev.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $login_session; ?></span>
        	<!--<span><a href="logout.php">LOG out</a></span>-->
        </div>
    </div>
 </div>
 <div class="row">
 	<div class="col-lg-12">
 		<h3 class="profile-heading">Personal Information</h3>
 		
 		<table class="table  table-hover" style="text-align: center;">
			<thead>
			</thead>
			<tr>
				<td>Name:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Resume Headline:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Job skill:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Functional Area:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Role Designation:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Date of Birth</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Email id:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Mobile Number:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Gender:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Address:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Pincode:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Home Town</td><td>devendra yadav</td>
			</tr>
		</table>	
 	</div>
 	<div class="col-lg-12">
 		<h3 class="profile-heading">Education Information</h3>
 		<table class="table table-hover">
		<thead>
			<tr>
			<th>Sr no</th>
			<th>Degree</th>
			<th>University</th>
			<th>Specialization</th>
			<th>Year of Passing</th>
			</tr>
		</thead>
		<tr><td>1</td><td>SSC</td><td></td><td></td><td></td></tr>
		<tr><td>2</td><td>HSC</td><td></td><td></td><td></td></tr>
		<tr><td>3</td><td>Basic Graduation</td><td></td><td></td><td></td></tr>
		<tr><td>4</td><td>Post Graduation</td><td></td><td></td><td></td></tr>
		<tr><td>5</td><td>Docotrate/Phd</td><td></td><td></td><td></td></tr>
		</table>	
 	</div>
 	<div class="col-lg-12">
 		<h3 class="profile-heading">Experience Information</h3>
 		<table class="table  table-hover" style="text-align: center;">
 			<tr>
				<td>Employer:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Company:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Experience:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Designation:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Job Description:</td><td>devendra yadav</td>
			</tr>
			
		</table>	
 	</div>
 	<div class="col-lg-12">
 		<h3 class="profile-heading">Project Information</h3>	
 		<table class="table  table-hover" style="text-align: center;">
 			<tr>
				<td>Client:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Project Title:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Duration:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Location:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Project Details:</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Role</td><td>devendra yadav</td>
			</tr>
			<tr>
				<td>Skill used:</td><td>devendra yadav</td>
			</tr>
		</table>
 	</div>
</div>
</div>
   <!-- <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Personal</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            	<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <div class="hidden-xs">Education</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
            	<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Experience</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab">
            	<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                <div class="hidden-xs">Project</div>
            </button>
        </div>
	</div>
</div>-->

 <!--  <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3>This is tab 1</h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      	<div class="tab-pane fade in" id="tab4">
          <h3>This is tab 4</h3>
        </div>
      </div>
    </div>
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
    ?>