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
</div>
<!--=================tab2 coding starts from here ...... ==============-->
   <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
		 <form class="form-horizontal" method="post" action="userEditProfileVerify.php">
			 <div class="form-group"> 
				<label class="col-xs-12 control-label" ><br/></label>  
				<label class="col-md-3 control-label" for="txtFirstName"  text="First Name">Name</label>  
				<div class="col-md-3">
					<input id="txtFirstName" type="text" name="userFirstName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="First Name" class="form-control" required="" >  
				</div>
			  <!--<label class="col-md-2" for="txtLastName">Last Name</label>  -->
				<div class="col-md-3">
					<input id="txtLastName" type="text" name="userLastName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="Last Name" class="form-control" required="" >  
				</div>
			</div>
			
						
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtResumeHeadline">Resume Headline</label>  
			  <div class="col-md-6">
			  <textarea class="form-control" id="txtHeadline" name="userResumeHeadline" placeholder="Entire Description about job. ">Your Resume Headline is the first thing Recruiter will see.</textarea>
			  </div>
			</div>
			
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtSkill">Job Skill/Keyword</label>  
			  <div class="col-md-6">
			  <input id="txtskill" name="userJobSkill" placeholder="Skill required for job.Like:- Asp.net,C,C++, JAVA"  class="form-control input-md" required="" type="text">
			  </div>
			</div>

						
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpIndustry">Function Area / Industry</label>
			  <div class="col-sm-6">
				<select id="drpIndustry" name="userFunctionalArea" class="form-control">
				  <option value="IT-Software Development & Services">IT-Software Development & Services </option>
				  <option value="IT-Hardware & Networking">IT-Hardware & Networking</option>
				  <option value="Banking Sector/Financial Services/Broking">Banking Sector/Financial Services/Broking</option>
				  <option value="Hotel/Restaurants/Airlines/Travel">Hotel/Restaurants/Airlines/Travel</option>
				  <option value="Medical/Health Care/Hospital">Medical/Health Care/Hospital</option>
				  
				</select>
				</div>	
			</div>	
			
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpRole">Role / Designation</label>
			  <div class="col-sm-6">
				<select id="drpRole" name="userRole" class="form-control">
				  <option value="Software Developer">Software Developer</option>
				  <option value="Database Administrator">Database Administrator</option>
				  <option value="Software Analyst">Software Analyst</option>
				  <option value="Department Head /Team Lead/Tech Lead">Department Head /Team Lead/Tech Lead</option>
				  <option value="QA">QA</option>
				</select>
				</div>	
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label" for="txtDob"  text="First Name">Date of Birth</label>  
				<div class="col-sm-2">
					<input id="txtDob" type="date" name="userDateofBirth"  min="1960-01-01" max="2000-01-01" pattern="^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$" placeholder="Date of Birth" class="form-control" required="" hint="DD/MM/YYYY">  
					
				</div>
				<label class="col-md-1 control-label" for="txtEmail" text="First Name">Email Id</label>  
				<div class="col-md-3">
					<input id="txtEmail" type="text" name="userEmailId" pattern="*\@*\.(a-z-A-Z)$" placeholder="Email Address	" class="form-control" required="" >  
				</div>
			</div>
			
			<div class="form-group">
			  <label class="col-md-3 control-label" for="prependedtext">Mobile Number</label>
				<div class="col-md-3">
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					 <input id="prependedtext" name="userMobileNumber" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text">
					</div>
				</div>
					<div class="col-md-4 ">
				    <label class="label_radio col-md-3" for="radio-01">Gender</label>
                    <label class="label_radio col-md-3" for="radio-01">
                      <input type="radio" name="userGenderMale" value="M" group="Gender" checked /> Male
                    </label>
                    <label class="label_radio col-md-3" for="radio-02">
                       <input type="radio" name="userGenderFemale" value="F" group="Gender" /> Female
                    </label></label>
                </div>
			</div>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtAddress">Address</label>  
				  <div class="col-md-3">
				  <textarea class="form-control" id="txtHeadline" name="userAddress"  placeholder="">Present address</textarea>
				  </div>
				 <div>
				 <label class="col-md-1 control-label" for="txtPinCode" text="First Name">Pin Code</label>  
				 <div class="col-md-2">
					<input id="txtPinCode" type="text" name="userPincode" placeholder="Pin Code	" class="form-control" required="" >  
				</div>
				 
				 <br><br><label class="col-md-1 control-label" for="selectbasic">Home Town/City</label>
					<div class="col-md-2">
					<select id="selectbasic" name="userCity" class="form-control">
					  <option value="">Mumbai</option>
						<option value="Bangalore">Bangalore</option>
						<option value="Hyderabad">Hyderabad</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Chennai">Chennai</option>
						<option value="Kolkata">Kolkata</option>
						<option value="Surat">Surat</option>
						<option value="Pune">Pune</option>
					</select>
					</div>
					</div>
			</div>
			  
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="btnsave"></label>
			  <div class="col-md-5">
				<center>
				<button id="btnsave" name="userBasicSaveButton" type="submit"	class="btn btn-primary">Save</button>
				<button id="btnclear" name="userClearButton" type="reset"	 herf="#tab2" class="btn btn-primary">Reset</button>
			  	</center>
			  </div>
			</div>
		  </form>
        </div>
<!-- ================ tab 2 starts from here.. =====================  -->
        <div class="tab-pane fade in" id="tab2">
          <form class="form-horizontal" method="post" action="userEditProfileVerify.php">
		 	
			<div class="form-group">
				<label class="col-xs-12 control-label" ><br></label>  
			  <label class="col-md-3 control-label" for="drpDegree">Degree Name</label>
			  <div class="col-md-6">
				<select id="drpDegree" name="userDegree" class="form-control">
				  <option value="0">SSC</option>
				  <option value="1">HSC</option>
				  <option value="2">Basic Graduation</option>
				  <option value="3">Post Graduation</option>
				  <option value="4">Docatrate/Phd</option>
				</select>
				</div>	
			</div>	
			
			<div class="form-group">
			  	<label class="col-sm-3 control-label" for="txtSpecialization">Specialization</label>
			  <div class="col-sm-6">
				<input id="txtSpecialization" type="text" name="userSpecialization" placeholder="Enter Specialization" class="form-control" required="" >  
				</div>
			  	
			</div>	
			
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="txtUniversity">University Name</label>
			  <div class="col-sm-2">
				<input id="txtUniversity" type="text" name="userUniversity" placeholder="Enter University / Institute Name	" class="form-control" required="" >  
				</div>
			  
			  <label class="col-sm-1 control-label" for="txtUniversity">Year of Passing</label>
			  <div class="col-sm-3">
				<select id="drpDegree" name="userPassingYear" class="form-control">
				  <option value="2005">2005</option>
				  <option value="2004">2004</option>
				  <option value="2003">2003</option>
				  <option value="2002">2002</option>
				  <option value="2001">2001</option>
				  <option value="2000">2000</option>
				  <option value="1999">1999</option>
				  <option value="1998">1998</option>
				  <option value="1997">1997</option>
				  <option value="1996">1996</option>
				  <option value="1995">1995</option>
				</select>
				</div>	
			 </div>
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnsave1"></label>
			  <div class="col-md-8">
				<button id="btnsave1" name="userEducationSaveButton" type="submit"	class="btn btn-primary">Save</button>
				<button id="btnclear1" name="btnNext1" type="reset"	 herf="#tab3" class="btn btn-primary">Reset</button>
			  </div>
			</div>
			</form>
        </div>
        <div class="tab-pane fade in" id="tab3">
<form class="form-horizontal" method="post" action="userEditProfileVerify.php">
<!-- Form Name -->
<legend style="text-align: center;">Experience Details</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Employer</label>  
  <div class="col-md-6">
  <input id="textinput" name="userEmployer" placeholder="Enter Employer name" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Company</label>  
  <div class="col-md-6">
  <input id="textinput" name="userCompany" placeholder="Enter Company Name" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Experience</label>
  <div class="col-md-6">
    <select id="selectbasic" name="userExperience" class="form-control">
      <option value="One Year">One Year</option>
      <option value="Two Year">Two Year</option>
      <option value="Three Year">Three Year</option>
      <option value="More than 3 Year">More than 3 Year</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Designation</label>  
  <div class="col-md-6">
  <input id="textinput" name="userDesignation" placeholder="Enter Your Designation" class="form-control input-md" required="" type="text">  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Job Description</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="textarea" name="userJobDescription"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="singlebutton"></label>
  <div style="text-align: center;"class="col-md-5">
    <button id="singlebutton" name="userExperienceSaveButton" class="btn btn-primary" type="submit">Save</button>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="reset">Reset</button>
  </div>
</div>
</form>

        </div>
      	<div class="tab-pane fade in" id="tab4">
<form class="form-horizontal" method="post" action="userEditProfileVerify.php">
<!-- Form Name -->
<legend style="text-align: center;">Project Details</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Client</label>  
  <div class="col-md-6">
  <input id="textinput" name="userClient" placeholder="Enter Client name" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Project Title</label>  
  <div class="col-md-6">
  <input id="textinput" name="userProjectTitle" placeholder="Enter Project Title" class="form-control input-md" required="" type="text">  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-3 control-label" for="selectbasic">Duration</label>
  <div class="col-md-2">
    <select id="selectbasic" name="userDuration" class="form-control">
      <option value="Less than 6 months">Less than 6 months</option>
      <option value="6 months">6 months</option>
      <option value="1 Year">1 year</option>
      <option value="2 Year">2 year</option>
      <option value="3 Year">3 year</option>
      <option value="more than 3 year">more than 3 year</option>
    </select>
  </div>
  		<label class="col-md-1 control-label" for="textinput">Location</label>  
  <div class="col-md-3">
  <input id="textinput" name="userLocation" placeholder="Enter Project Location" class="form-control input-md" required="" type="text">
  </div>  		
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="text area">Project Details</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="text area" name="userProjectDetails"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Role</label>  
  <div class="col-md-2">
  <input id="textinput" name="userRole" placeholder="Role played in Project" class="form-control input-md" type="text">
  </div>
  
  <label class="col-md-1 control-label" for="textinput">Skill Used</label>  
  <div class="col-md-3">
  <input id="textinput" name="userSkillUsed" placeholder="Used Skills in Project" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="singlebutton"></label>
  <div style="text-align: center;" class="col-md-5">
    <button id="singlebutton" name="userProjectSaveButton" class="btn btn-primary">Save</button>
  	<button id="btnclear1" name="btnNext1" type="reset"	 herf="#tab3" class="btn btn-primary">Reset</button>
  </div>
</div>
</form>

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