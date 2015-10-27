<?php
	//session_start();
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	include_once('Connectivity.php');
	
	if( isset($_REQUEST['msg'] )){
	if( $_GET['msg'] == "success"){
		echo '<script>alert("Profile updated Successfully !!");</script>';
	}}
	
	$query = "select * from adminmst where admin_name='$admin_name'";
	$con = new Connectivity();
	$rows = $con->getData($query);
?>
<link href="css/UserProfile.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

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
            <img class="card-bkimg" alt="<?php echo $_SESSION['admin_name'] ?>" src="<?php echo DatabaseConnectivity::GetRow('select img from adminmst where admin_name=\''.$admin_name.'\'')['img']; ?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="<?php echo $_SESSION['admin_name'] ?>" src="<?php echo DatabaseConnectivity::GetRow('select img from adminmst where admin_name=\''.$admin_name.'\'')['img']; ?>">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $_SESSION['admin_name'] ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Personal Info</div>
            </button>
        </div>
		<!--
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <div class="hidden-xs">Other Setting</div>
            </button>
        </div>
		-->
	</div>

	<div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">    
<?php
	//echo "<br/>" . sizeof($rows) . "<br/>";
	if( sizeof($rows) > 0 ){
		if(isset($_REQUEST['edit'])){
			if( $_REQUEST['edit'] == true ){
			echo '

		<form class="form-horizontal" action="SaveProfile.php" method="POST">
		<fieldset>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtAdminName">Admin Name</label>  
		  <div class="col-md-5">
		  <input id="txtAdminName" name="txtAdminName" placeholder="Name" class="form-control input-md" required="" type="text" value="'.$rows[0][0][0].'">
		  <span class="help-block">*</span>  
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtAdminOldPassword">Admin Old Password</label>
		  <div class="col-md-5">
			<input id="txtAdminOldPassword" name="txtAdminOldPassword" placeholder="Old Password" class="form-control input-md" required="" type="password" value="'.$rows[0][0][1].'">
			<span class="help-block">*</span>
		  </div>
		</div>

		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtAdminNewPassword">Admin New Password</label>
		  <div class="col-md-5">
			<input id="txtAdminNewPassword" name="txtAdminNewPassword" placeholder="New Password" class="form-control input-md" required="" type="password">
			<span class="help-block">*</span>
		  </div>
		</div>			

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtEmailId">Email Id</label>  
		  <div class="col-md-5">
		  <input id="txtEmailId" name="txtEmailId" placeholder="Email Id" class="form-control input-md" required="" type="text" value="'.$rows[0][0][2].'">
		  <span class="help-block">*</span>  
		  </div>
		</div>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtContactNo">Contact No</label>  
		  <div class="col-md-5">
		  <input id="txtContactNo" name="txtContactNo" placeholder="Contact No" class="form-control input-md" required="" type="text" value="'.$rows[0][0][3].'">
		  <span class="help-block">* &gt; 10 digits</span>  
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtLocation">Location</label>
		  <div class="col-md-4">                     
			<textarea class="form-control" id="txtLocation" name="txtLocation" >'.$rows[0][0][5].'</textarea>
		  </div>
		</div>

		<!-- Button (Double) -->			
		<div class="form-group">
		  <label class="col-md-4 control-label" for="btnSave"></label>
		  <div class="col-md-8">
			<button id="btnSave" name="btnSave" type="submit" class="btn btn-success">Save</button>
			<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
		  </div>
		</div>

		</fieldset>
		</form>
		';}}else{
			echo '
		<form class="form-horizontal" action="profile.php" method="POST">
		<fieldset>

		<!-- Form Name -->
		<legend>Admin Personal Info</legend>
		
		<input type="hidden" value="true" name="edit"/>
		
		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtAdminName">Admin Name</label>  
		  <div class="col-md-5">
		  <input id="txtAdminName" name="txtAdminName" placeholder="Name" class="form-control input-md" required="" type="text" disabled value="'.$rows[0][0][0].'">
		  <span class="help-block">*</span>  
		  </div>
		</div>
		
		<!-- Password input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtAdminPassword">Admin Old Password</label>
		  <div class="col-md-5">
			<input id="txtAdminOldPassword" name="txtAdminOldPassword" placeholder="Old Password" class="form-control input-md" required="" type="text" disabled value="'.$rows[0][0][1].'">
			<span class="help-block">*</span>
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtEmailId">Email Id</label>  
		  <div class="col-md-5">
		  <input id="txtEmailId" name="txtEmailId" placeholder="Email Id" class="form-control input-md" required="" type="text" disabled value="'.$rows[0][0][2].'">
		  <span class="help-block">*</span>  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtContactNo">Contact No</label>  
		  <div class="col-md-5">
		  <input id="txtContactNo" name="txtContactNo" placeholder="Contact No" class="form-control input-md" required="" type="text" disabled value="'.$rows[0][0][3].'">
		  <span class="help-block">* &gt; 10 digits</span>  
		  </div>
		</div>

		<!-- Textarea -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="txtLocation">Location</label>
		  <div class="col-md-4">                     
			<textarea class="form-control input-md" id="txtLocation" name="txtLocation" disabled >'.$rows[0][0][5].'</textarea>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="btnEdit"></label>
		  <div class="col-md-4">
			<button id="btnEdit" name="btnEdit" class="btn btn-primary">Edit</button>
		  </div>
		</div>
		
		</fieldset>
		</form>

			';}
	}
	else{
		echo "<br/>No Result<br/>";
	}

?>
        </div>
		<!--
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
		-->
      </div>
    </div>
    
</div>
			
<?php
	include_once("footer.php");
?>