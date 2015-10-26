<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( isset($_REQUEST['msg'] )){
	if( $_GET['msg'] == "success"){
		echo '<script>alert("Profile updated Successfully !!");</script>';
	}}	
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
		<h1>General Setting</h1>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
	<!--
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-default" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Countries</div>
            </button>
        </div>
	-->
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-primary" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
                <div class="hidden-xs">States</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-euro" aria-hidden="true"></span>
                <div class="hidden-xs">Cities</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <div class="hidden-xs">Other Setting</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
	  <!--
        <div class="tab-pane fade in" id="tab1">
					  
			<form class="form-horizontal" action="CountryResult.php" method="POST">
			<fieldset>

			<legend>Manage Countries</legend>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="appendedtext">Search Countries</label>
			  <div class="col-md-4">
				<div class="input-group">
				  <input id="appendedtext" name="appendedtext" class="form-control" placeholder="placeholder" type="text">
				  <span class="input-group-addon glyphicon glyphicon-search"></span>
				</div>    
			  </div>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search All</button>

			</div>

			</fieldset>
			</form>
        </div>
		-->
        <div class="tab-pane fade in active" id="tab2">
					  
			<form class="form-horizontal" action="StateResult.php" method="POST">
			<fieldset>

			<!-- Form Name -->
			<legend>Manage States</legend>

			<!-- Appended Input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="appendedtext">Search States</label>
			  <div class="col-md-4">
				<div class="input-group">
				  <input id="appendedtext" name="txtStateName" class="form-control" placeholder="placeholder" type="text">
				  <span class="input-group-addon glyphicon glyphicon-search"></span>
				</div>    
			  </div>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search All</button>

			</div>
			<!-- Button -->

			</fieldset>
			</form>
			<!--	~~~~~~~~~~~~~~~~~~~~	New State insertion ~~~~~~~~~~~		-->
			<form class="form-horizontal" action="SaveNewState.php" method="POST">
			<fieldset>

			<!-- Form Name -->
			<legend>New State</legend>

			<!-- Appended Input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="appendedtext">Enter State Name</label>
			  <div class="col-md-4">
				  <input id="appendedtext" name="txtNewStateName" class="form-control" placeholder="placeholder" type="text">
			  </div>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
			</div>
			<!-- Button -->

			</fieldset>
			</form>
		</div>
        <div class="tab-pane fade in" id="tab3">
			<form class="form-horizontal" action="CityResult.php" method="POST">
			<fieldset>

			<!-- Form Name -->
			<legend>Manage Cites</legend>

			<!-- Appended Input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="appendedtext">Search Cites</label>
			  <div class="col-md-4">
				<div class="input-group">
				  <input id="appendedtext" name="txtCityName" class="form-control" placeholder="placeholder" type="text">
				  <span class="input-group-addon glyphicon glyphicon-search"></span>
				</div>    
			  </div>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search All</button>

			</div>
			<!-- Button -->

			</fieldset>
			</form>
        </div>
        <div class="tab-pane fade in" id="tab4">
			<form class="form-horizontal" action="OtherSettingResult.php" method="POST">
			<fieldset>

			<!-- Form Name -->
			<legend>Other Setting</legend>

			<!-- Appended Input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="appendedtext">Search Category</label>
			  <div class="col-md-4">
				<div class="input-group">
				  <input id="appendedtext" name="txtCityName" class="form-control" placeholder="placeholder" type="text">
				  <span class="input-group-addon glyphicon glyphicon-search"></span>
				</div>    
			  </div>
				<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search All</button>

			</div>
			<!-- Button -->

			</fieldset>
			</form>
        </div>
      </div>
    </div>
    
    </div>
            
<?php
	include_once("footer.php");
?>