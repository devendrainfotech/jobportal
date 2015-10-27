<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once './Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
    include_once 'user_profile_tab.php';
?>
<title>User Edit Profile</title>
<head>
	<link rel="stylesheet" href="./Design/manual/css/userprofile.css" />
</head>
<div class="container">
<div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">  
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"      href="#collapseOne">
                            Personal Information</a>
                        </h3>
                    </div>

                    
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
		 <form  id="defaultForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" method="post" action="userEditProfileVerify.php">
			 <div class="form-group"> 
				<label class="col-xs-12 control-label" ><br/></label>  
				<label class="col-md-3 control-label" for="txtFirstName"  text="First Name">Name</label>  
				<div class="col-md-3">
					<input id="txtFirstName" type="text" name="userFirstName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="First Name" class="form-control" required="" value="<?php echo jobseekerinfo($conn,'firstname') ?>" >  
				</div>
			  <!--<label class="col-md-2" for="txtLastName">Last Name</label>  -->
				<div class="col-md-3">
					<input id="txtLastName" type="text" name="userLastName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="Last Name" class="form-control" required="" value="<?php echo jobseekerinfo($conn,'lastname') ?>">  
				</div>
			</div>
			
						
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtResumeHeadline">Resume Headline</label>  
			  <div class="col-md-6">
			  <textarea required="" class="form-control" id="txtHeadline" name="userResumeHeadline" placeholder="Entire Description about job. " >
                  <?php echo trim(jobseekerinfo($conn,'resume_headline')) ?>
                  </textarea>
			  </div>
			</div>
			
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtSkill">Job Skill/Keyword</label>  
			  <div class="col-md-6">
			  <input id="txtskill" name="userJobSkill" placeholder="Skill required for job.Like:- Asp.net,C,C++, JAVA"  class="form-control input-md" required="" type="text" value="<?php echo jobseekerinfo($conn,'key_skill') ?>">
			  </div>
			</div>

						
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpfunction_area">Function Area / Industry</label>
			  <div class="col-sm-6">
              <?php
                    $query1= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Function_Area'";
                    $result1 = mysqli_query($conn,$query1);
                    echo "<select name='userFunctionalArea' class='form-control'  required=''>";
                    $selectedid=jobseekerinfo($conn,'functional_area');
                    while($re=$result1->fetch_assoc())
                    {
                        
                        $dropid=$re['autoid'];
                        $value=$re['Value'];
                        if($selectedid==$dropid)
                            echo '<option value="'.$dropid.'" selected="selected">'.$value.'</option>';
                        else
                           echo '<option value="'.$dropid.'" >'.$value.'</option>';
                           
                    }
                    echo"</select>";
                ?>
				</div>	
			</div>	
			
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpRole">Designation / Role</label>
			  <div class="col-sm-6">
				<?php
                    $query2= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Designation'";
                    $result2 = mysqli_query($conn,$query2);
                    echo "<select name='userRole' class='form-control'  required=''>";
                    $selectedid2=jobseekerinfo($conn,'role');
                    while($re2=$result2->fetch_assoc())
                    {
                        $dropid2=$re2['autoid'];
                        $value2=$re2['Value'];
                        if($selectedid2==$dropid2)
                        echo'<option value="'.$dropid2.'" selected="selected">'.$value2.'</option>';
                           else
                         echo '<option value="'.$dropid2.'" >'.$value2.'</option>';
                    }
                    echo"</select>";
                ?>
				</div>	
			</div>	
			
			<div class="form-group">
				<label class="col-sm-3 control-label" for="txtDob"  text="Date of birth">Date of Birth</label>  
				<div class="col-sm-2">
					<input required="" data-fv-notempty-message="The confirm password is required and cannot be empty" id="txtDob" type="date" name="userDateofBirth"  min="1960-01-01" max="2000-01-01" pattern="^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$" placeholder="DD/MM/YYYY" class="form-control" required="" hint="DD/MM/YYYY" value="<?php echo date_format(date_create(jobseekerinfo($conn,'dateofbirth')),'d/m/Y') ?>" >  
					
				</div>
				<label class="col-md-1 control-label" for="txtEmail" text="Email">Email Id</label>  
				<div class="col-md-3">
					<input data-fv-field="email" required="" id="txtEmail" type="text" name="userEmailId" pattern="*\@*\.(a-z-A-Z)$" placeholder="Email Address	" class="form-control" required="" value=" <?php echo jobseekerinfo($conn,'emailid') ?>" >  
				</div>
			</div>
			
			<div class="form-group">
			  <label class="col-md-3 control-label" for="prependedtext">Mobile Number</label>
				<div class="col-md-3">
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					 <input data-fv-field="phoneNumber" id="prependedtext" name="userMobileNumber" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text" value=" <?php echo jobseekerinfo($conn,'Mobileno') ?>">
					</div>
				</div>
					<div class="col-md-4 ">
				    <label class="label_radio col-md-3" for="radio-01">Gender</label>
                    <label class="label_radio col-md-3" for="radio-01">
                        <?php $gender=jobseekerinfo($conn,'Gender') ?>
                      <input data-fv-field="gender" required="" type="radio" name="userGender" value="M" group="Gender" <?php echo ($gender=='M')?'checked':'' ?> /> Male
                    </label>
                    <label class="label_radio col-md-4" for="radio-02">
                       <input type="radio" name="userGender" value="F" group="Gender" <?php echo ($gender=='F')?'checked':'' ?> /> Female
                    </label></label>
                </div>
			</div>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtAddress">Address</label>  
				  <div class="col-md-3">
				  <textarea class="form-control" id="txtHeadline" name="userAddress"  placeholder=""> 
                      <?php echo trim((jobseekerinfo($conn,'address'))) ?>
                      </textarea>
				  </div>
				 <div>
				 <label class="col-md-1 control-label" for="txtPinCode" text="Pin Code">Pin Code</label>  
				 <div class="col-md-2">
					<input id="txtPinCode" type="text" name="userPincode" placeholder="Pin Code	" class="form-control" required="" value="<?php echo jobseekerinfo($conn,'pincode') ?>">  
				</div>
				 
				<!-- <br><br><label class="col-md-1 control-label" for="selectbasic">City</label>
					<div class="col-md-2">
                        <?php
                    $query3= "SELECT * FROM `tblcitymst`";
                    $result3 = mysqli_query($conn,$query3);
                  $selectedid3=jobseekerinfo($conn,'cityid');
                    echo "<select name='userCity' class='form-control'  required=''>";
                    while($re3=$result3->fetch_assoc())
                    {
                        $dropid3=$re3['cityid'];
                        $value3=$re3['name'];
                        if($selectedid3==$dropid3)
                        echo'<option value="'.$dropid3.'" selected="selected">'.$value3.'</option>';
                           else
                         echo '<option value="'.$dropid3.'" >'.$value3.'</option>';
                    }
                    echo"</select>";
                ?>-->
					
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
                </div>
            </div>
          </div>
    </div>
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
    ?>