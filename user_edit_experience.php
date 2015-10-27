<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once './Development/commonfiles/general_function.php';
?>
<?php
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
    include_once 'user_profile_tab.php';

?>
<title>User Edit Experience</title>
<?php
    $mode=$_GET['mode'];
    if(isset($_GET['id'])!=null )
    {
        $autoid=$_GET['id'];
        $query1= "SELECT * FROM `tbl_jobseeker_exp_details` WHERE `autoid` = '$autoid'";
        $result1 = mysqli_query($conn, $query1);
        $row1= mysqli_fetch_assoc($result1);  
    }
?>
<script>
function checkdates() {
var startdate = document.getElementById("txtstartdate").value;
var EndDate = document.getElementById("txtEndDate").value
var dtstartdate = new Date(startdate);
var dtEndDate = new Date(EndDate);

if (dtstartdate > dtEndDate) {
alert("Start date can not be greater than End date");
return false;
    
}
}
</script>

<div class="container">
<div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">  
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"      href="#collapseOne">
                            Experience Information</a>
                        </H3>
                    </div>

          
            <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
<form id="defaultForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" method="post" action="userEditProfileVerify.php">
    <!-- Form Name -->
<div class="tab-pane fade in" id="tab3">
            <input type="hidden" name="expid" value="<?php echo $autoid; ?>">
            <input type="hidden" name="Mode" value="<?php echo $mode; ?>"/>
    
          <div class="form-horizontal">
			<div class="form-group">
				<label class="col-md-10 control-label" ><br></label>  
			  <label class="col-sm-4 control-label" for="txtEmployer">Employer / Company Name</label>
			  <div class="col-sm-5">
				<input id="txtEmployer" type="text" name="userCompanyName" placeholder="Enter Company Name	" class="form-control" required="" value="<?php if ($mode=='N'){echo "";}else{echo $row1['CompanyName'];} ?>" >  
					<input name="currentjob" id="checkboxes-0" type="checkbox" value=1 <?php if ($mode=='N'){echo "";}else{if($row1['IsCurrentJob']=='1') {echo 'checked'; } else {echo '';}} ?> > Current Employee
				</div>
			
			</div>
			<div class="form-group">
			  <label class="col-sm-4 control-label" for="txtDesignation">Designation</label>
			   <div class="col-sm-5">
				<input id="txtDesignation" type="text" name="userDesignation" placeholder="Enter Designation" class="form-control" required="" value="<?php if ($mode=='N'){echo "";}else{echo $row1['Designation'];} ?>">  
				</div>	
			</div>		
			
			<div class="form-group">
			  <label class="col-sm-4 control-label" for="txtDuration">Duration</label>
			   <div class="col-sm-2">
					<input id="txtstartdate" type="text" name="userstartdate" placeholder="Start Date dd/mm/yyyy" class="form-control" required="" style="width:200px" value="<?php if ($mode=='N'){echo "";}else{echo date_format(date_create($row1['Job_StartDate']),'d/m/Y');} ?>">  
					<!-- To -->
					</div>
                
                	<label class="col-sm-1 control-label" for="txtDuration" style="width:70px">  To</label>
                
					<div class="col-sm-2">
					<input id="txtEndDate" type="text" name="userenddate"  style="width:200px" placeholder="End Date dd/mm/yyyy" class="form-control" required="" value="<?php if ($mode=='N'){echo "";}else{echo date_format(date_create($row1['Job_EndDate']),'d/m/Y');} ?>" >  
					</div>
				</div>	

			
				<div class="form-group">
				  <label class="col-md-4 control-label" for="jobdescription">Job Role/Profile</label>  
					  <div class="col-md-5">
					  <textarea required="" class="form-control" id="txtEmpRole"   name="userjobdescription"  placeholder="What is your Job Role & Key Responsibilities..?">
<?php if ($mode=='N'){echo "";}else{echo $row1['JobDetails'];} ?>
                          </textarea>
					  </div>
				</div>
				
			
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for="singlebutton"></label>
  <div style="text-align: center;"class="col-md-5">
    <button id="singlebutton" name="userExperienceSaveButton" class="btn btn-primary" type="submit" onclick="checkdates()">Save</button>
    <button id="singlebutton" name="singlebutton" class="btn btn-primary" type="reset">Reset</button>
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