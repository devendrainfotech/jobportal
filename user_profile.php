<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
	include_once 'usercookie.php';
    include_once 'Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
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

   <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
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

  <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">  
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"      href="#collapseOne">
                            Personal Information</a>
                        </H3>
                    </div>

                    
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                            
           <table class="table table-striped table-hover table-bordered" style="width: inherit" id="editable-sample"><thead>
			</thead>
  
        <th style="width: 200px">Full Name</th>
                    <td style="width: 600px"><?php echo jobseekerinfo($conn,'firstname') . " " . jobseekerinfo($conn,'lastname')  ?></td>
			<tr>
				<td>Resume Headline</td>
                <td><?php echo jobseekerinfo($conn,'resume_headline')?></td>
			</tr>
			<tr>
				<td>Job Skill</td>
                <td><?php echo jobseekerinfo($conn,'key_skill')?></td>
                
			</tr>
			<tr>
				<td>Functional Area</td>
                <!-- define above getlist function who gives you list information  -->
                <td><?php echo getlist($conn,jobseekerinfo($conn,'functional_area')) ?></td> 
			</tr>
			<tr>
				<td>Designation / Role </td>
                <td><?php echo getlist($conn,jobseekerinfo($conn,'role')) ?></td>
			</tr>
			<tr>
				<td>Date of Birth</td>
                  <td><?php echo date_format(date_create(jobseekerinfo($conn,'dateofbirth')),'d/m/Y') ?></td>
			</tr>
			<tr>
				<td>Email id</td>
                <td><?php echo jobseekerinfo($conn,'emailid') ?></td>
			</tr>
			<tr>
				<td>Mobile Number</td>
                <td><?php echo jobseekerinfo($conn,'Mobileno') ?></td>
			</tr>
			<tr>
				<td>Gender</td>
                <td><?php if (jobseekerinfo($conn,'Gender')=='M') echo 'Male'; else echo 'Female';  ?></td>
			</tr>
			<tr>
				<td>Address:</td>
             <!--   // define above getContactinfo function who gives you Contact information -->
                <td><?php echo getContactinfo($conn,jobseekerinfo($conn,'contact_id'),'address')?></td>
			</tr>
			<tr>
				<td>Pincode:</td>
                <td><?php echo getContactinfo($conn,jobseekerinfo($conn,'contact_id'),'pincode')?></td>
			</tr>
			<tr>
				<td>Home Town / city</td>
                <td><?php echo getCityinfo($conn,jobseekerinfo($conn,'cityid'))?></td>
			</tr>
             <tr>
            <td colspan="2" align="center">
            <a class="edit btn btn-primary form-control" style="width: 100px" href="user_edit_profile.php?mode=E">Edit</a>
            </td>
            </tr>
               </tbody>
             
		</table>

                

                        
                    </div>                
                </div>  
            </div>
        </div>        
    </div>
                
        <div class="tab-pane fade in" id="tab2">
          
 		<table class="table table-hover">
		<thead>
			<tr>
			<th>Degree</th>
			<th>University</th>
			<th>Specialization</th>
			<th>Year of Passing</th>
			</tr>
		</thead>
		<tr><td>SSC</td><td></td><td></td><td></td></tr>
		<tr><td>HSC</td><td></td><td></td><td></td></tr>
		<tr><td>Basic Graduation</td><td></td><td></td><td></td></tr>
		<tr><td>Post Graduation</td><td></td><td></td><td></td></tr>
		<tr><td>Docotrate/Phd</td><td></td><td></td><td></td></tr>
		</table>
        </div>
        <div class="tab-pane fade in" id="tab3">
          
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
      	<div class="tab-pane fade in" id="tab4">
          	
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
    </div>
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
	include_once 'user_profile_data_fetch.php';
    ?>