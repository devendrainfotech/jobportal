<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once './Development/commonfiles/general_function.php';
?>
<title>Recruiter Edit Profile</title>
<?php
	include_once './Development/commonfiles/header.php';
    include_once 'Recruiter_profile_tab.php';
?>
<head>
	<link rel="stylesheet" href="./Design/manual/css/userprofile.css" />
</head>
<?php
$recid=$_SESSION['recruiter_id'];
 if($recid!=null)
    {
        $query1= "SELECT * FROM `tblrecruitermst` WHERE `recruiterid` = '$recid'";
        $result1 = mysqli_query($conn, $query1);
        $row1= mysqli_fetch_assoc($result1);  
    }
?>
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
		 <form class="form-horizontal" method="post" action="userEditProfileVerify.php">
			 <div class="form-group"> 
				<label class="col-xs-12 control-label" ><br/></label>  
				<label class="col-md-3 control-label" for="txtFirstName"  text="First Name">Name</label>  
				<div class="col-md-3">
					<input id="txtFirstName" type="text" name="userFirstName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="First Name" class="form-control" required="" value="<?php if ($row1['firstname']==''){echo "";} else {echo $row1['firstname'];} ?>" >  
				</div>
			  <!--<label class="col-md-2" for="txtLastName">Last Name</label>  -->
				<div class="col-md-3">
					<input id="txtLastName" type="text" name="userLastName" pattern="^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ]){2,20}$" placeholder="Last Name" class="form-control" required="" value="<?php if ($row1['lastname']==''){echo "";} else {echo $row1['lastname'];} ?>">  
				</div>
			</div>
			
						
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtCompanyName">Company Name</label>  
			  <div class="col-md-6">
			  <input id="txtcompany" name="userCompanyName" placeholder="Enter Company Name"  class="form-control input-md" required="" type="text" value="<?php if ($row1['company']==''){echo "";} else {echo $row1['company'];} ?>">
			  </div>
			</div>
			
			
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="txtSkill">Company Address</label>  
			  <div class="col-md-6">
			   <textarea class="form-control" id="txtCompanyAdd" name="CompanyAddress"  placeholder=""> 
                      <?php if ($row1['companyaddress']==''){echo "";} else {echo $row1['companyaddress'];} ?>
                      </textarea>
			  
			  </div>
			</div>

			
			<!-- Select Basic -->
			<div class="form-group">
			  <label class="col-sm-3 control-label" for="drpRole">Designation / Role</label>
			  <div class="col-sm-6">
				<?php
                    $query2= "SELECT * FROM `tbl_list_mst` WHERE `type`= 'Designation'";
                    $result2 = mysqli_query($conn,$query2);
                    echo "<select name='userDesignation' class='form-control'  required=''>";
                    $selectedid2= $row1['designation']; 
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
					<input id="txtDob" type="date" name="userDateofBirth"  min="1960-01-01" max="2000-01-01" pattern="^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$" placeholder="DD/MM/YYYY" class="form-control" required="" hint="DD/MM/YYYY" value=" <?php if ($row1['dateofbirth']==""){echo "";} else {echo date_format(date_create($row1['dateofbirth']),'d/m/Y');} ?> " >  
					
				</div>
				<label class="col-md-1 control-label" for="txtEmail" text="Email">Email Id</label>  
				<div class="col-md-3">
					<input id="txtEmail" type="text" name="userEmailId" pattern="*\@*\.(a-z-A-Z)$" placeholder="Email Address	" class="form-control" required="" value="  <?php if ($row1['companyemailid']==''){echo "";} else {echo $row1['companyemailid'];} ?>" >  
				</div>
			</div>
			
			<div class="form-group">
			  <label class="col-md-3 control-label" for="prependedtext">Mobile Number</label>
				<div class="col-md-3">
					<div class="input-group">
					  <span class="input-group-addon">+91</span>
					 <input id="prependedtext" name="userMobileNumber" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text" value="  <?php if ($row1['mobilenumber']==''){echo "";} else {echo $row1['mobilenumber'];} ?>">
					</div>
				</div>
					<div class="col-md-4 ">
				   
			</div>
			</div>
			  
			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="btnsave"></label>
			  <div class="col-md-5">
				<center>
				<button id="btnsave" name="RecruiterProfileSaveButton" type="submit"	class="btn btn-primary">Save</button>
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

       
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
    ?>