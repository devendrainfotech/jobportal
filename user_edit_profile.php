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
		 <form class="form-horizontal" method="post">
			 <div class="form-group"> 
				<label class="col-xs-12 control-label" ><br/></label>  
				<label class="col-md-3 control-label" for="txtFirstName"  text="First Name">Name</label>  
				<div class="col-md-3">
					<input id="txtFirstName" type="text" name="txtFirstName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="First Name" class="form-control" required="" >  
				</div>
			  <!--<label class="col-md-2" for="txtLastName">Last Name</label>  -->
				<div class="col-md-3">
					<input id="txtLastName" type="text" name="txtLastName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="Last Name" class="form-control" required="" >  
				</div>
			</div>
			
						
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtResumeHeadline">Resume Headline</label>  
			  <div class="col-md-6">
			  <textarea class="form-control" id="txtHeadline" name="txtHeadline" placeholder="Entire Description about job. ">Your Resume Headline is the first thing Recruiter will see.</textarea>
			  </div>
			</div>
			
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtSkill">Job Skill/Keyword</label>  
			  <div class="col-md-6">
			  <input id="txtskill" name="txtskill" placeholder="Skill required for job.Like:- Asp.net,C,C++, JAVA"  class="form-control input-md" required="" type="text">
			  </div>
			</div>

						
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpIndustry">Function Area / Industry</label>
			  <div class="col-sm-6">
				<select id="drpIndustry" name="drpIndustry" class="form-control">
				  <option value="0">IT-Software Development & Services </option>
				  <option value="1">IT-Hardware & Networking</option>
				  <option value="2">Banking Sector/Financial Services/Broking</option>
				  <option value="3">Hotel/Restaurants/Airlines/Travel</option>
				  <option value="4">Medical/Health Care/Hospital</option>
				  
				</select>
				</div>	
			</div>	
			
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpRole">Role / Designation</label>
			  <div class="col-sm-6">
				<select id="drpRole" name="drprole" class="form-control">
				  <option value="0">Software Developer</option>
				  <option value="1">Database Administrator</option>
				  <option value="2">Software Analyst</option>
				  <option value="3">Department Head /Team Lead/Tech Lead</option>
				  <option value="4">QA</option>
				</select>
				</div>	
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label" for="txtDob"  text="First Name">Date of Birth</label>  
				<div class="col-sm-2">
					<input id="txtDob" type="date" name="txtDob"  min="1960-01-01" max="2000-01-01" pattern="^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$" placeholder="Date of Birth" class="form-control" required="" hint="DD/MM/YYYY">  
				</div>
				<label class="col-md-1 control-label" for="txtEmail" text="First Name">Email Id</label>  
				<div class="col-md-3">
					<input id="txtEmail" type="text" name="txtEmail" pattern="*\@*\.(a-z-A-Z)$" placeholder="Email Address	" class="form-control" required="" >  
				</div>
			</div>
			
			<div class="form-group">
			  <label class="col-md-3 control-label" for="prependedtext">Mobile Number</label>
				<div class="col-md-3">
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					 <input id="prependedtext" name="recmblnum" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text">
					</div>
				</div>
					<div class="col-md-4 ">
				    <label class="label_radio col-md-3" for="radio-01">Gender</label>
                    <label class="label_radio col-md-3" for="radio-01">
                      <input type="radio" name="Gender" value="M" group="Gender" checked /> Male
                    </label>
                    <label class="label_radio col-md-3" for="radio-02">
                       <input type="radio" name="Gender" value="F" group="Gender" /> Female
                    </label></label>
                </div>
			</div>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtAddress">Address</label>  
				  <div class="col-md-3">
				  <textarea class="form-control" id="txtHeadline" name="txtHeadline"  placeholder="">Present address</textarea>
				  </div>
				 <div>
				 <label class="col-md-1 control-label" for="txtPinCode" text="First Name">Pin Code</label>  
				 <div class="col-md-2">
					<input id="txtPinCode" type="text" name="txtPinCode" placeholder="Pin Code	" class="form-control" required="" >  
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
				<button id="btnsave" name="btnsave" type="submit"	class="btn btn-primary">Save</button>
				<button id="btnclear" name="btnclear" type="submit"	 herf="#tab2" class="btn btn-primary">Next</button>
			  	</center>
			  </div>
			</div>
		  </form>
        </div>
<!-- ================ tab 2 starts from here.. =====================  -->
        <div class="tab-pane fade in" id="tab2">
          <form class="form-horizontal" method="post">
		 	
			<div class="form-group">
				<label class="col-xs-12 control-label" ><br></label>  
			  <label class="col-md-3 control-label" for="drpDegree">Degree Name</label>
			  <div class="col-md-6">
				<select id="drpDegree" name="drpDegree" class="form-control">
				  <option value="0">SSC</option>
				  <option value="1">HSC</option>
				  <option value="2">B.COM</option>
				  <option value="3">BCA</option>
				  <option value="4">BBA</option>
				  <option value="3">MBA</option>
				  <option value="4">MCA</option>
				</select>
				</div>	
			</div>	
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="txtUniversity">University Name</label>
			  <div class="col-sm-6">
				<input id="txtUniversity" type="text" name="txtUniversity" placeholder="Enter University / Institute Name	" class="form-control" required="" >  
				</div>	
			</div>	
			
			<div class="form-group">
					
			
			  <label class="col-sm-3 control-label" for="txtUniversity">Year of Passing</label>
			  <div class="col-sm-2">
				<select id="drpDegree" name="drpDegree" class="form-control">
				  <option value="0">2005</option>
				  <option value="1">2004</option>
				  <option value="2">2003</option>
				  <option value="3">2002</option>
				  <option value="4">2001</option>
				  <option value="5">2000</option>
				  <option value="6">1999</option>
				  <option value="7">1998</option>
				  <option value="8">1997</option>
				  <option value="9">1996</option>
				  <option value="10">1995</option>
				</select>
				</div>	
				<label class="col-sm-1 control-label" for="txtSpecialization">Specialization</label>
			  <div class="col-sm-3">
				<input id="txtSpecialization" type="text" name="txtSpecialization" placeholder="Enter Specialization" class="form-control" required="" >  
				</div>
				
			 </div>
			 
			 
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnsave1"></label>
			  <div class="col-md-8">
			  <button id="btnPrevious1" name="btnPrevious1" type="submit"	 herf="#tab1" class="btn btn-primary">Previous</button>
				<button id="btnsave1" name="btnsave1" type="submit"	class="btn btn-primary">Save</button>
				<button id="btnclear1" name="btnNext1" type="submit"	 herf="#tab3" class="btn btn-primary">Next</button>
			  </div>
			</div>
			
			</form>
			
	
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