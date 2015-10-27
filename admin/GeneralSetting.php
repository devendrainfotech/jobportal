<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( isset($_REQUEST['msg'] )){
	if( $_GET['msg'] == "success"){
		echo '<script>alert("Changes have been saved !!");</script>';
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
	<div class="panel panel-primary">
		<div class="panel-heading">
			<center><h1 class="panel-title">General Setting</h1></center>
		</div>
		<div class="panel-body">

    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-primary" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-plane" aria-hidden="true"></span>
                <div class="hidden-xs">States</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-road" aria-hidden="true"></span>
                <div class="hidden-xs">Cities</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-default" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                <div class="hidden-xs">Other Setting</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab2">

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
					  
			<form class="form-horizontal" action="StateResult.php" method="POST">
				<fieldset>
					<legend>Search States</legend>
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
			</fieldset>
			</form>		</div>
<!--	~~~~~~~~~~~~~	Manage Cities ~~~~~~~~~		-->
        <div class="tab-pane fade in" id="tab3">
			<!--	~~~~~~~~~~~~~~~~~~~~	New State insertion ~~~~~~~~~~~		-->
			<form class="form-horizontal" action="SaveNewCity.php" method="POST">
				<fieldset>
					<legend>New City</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="appendedtext">Enter City Name</label>
						<div class="col-md-4">
						  <input id="appendedtext" name="txtNewCityName" class="form-control" placeholder="placeholder" type="text">
						</div>
					</div>
					<!--		State info		-->
					<!-- Select input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="txtChangedName">State</label>  
					  <div class="col-md-4">
					  <Select name="stateid" class="form-control">
						<?php
							$query = "select * from tblstatemst";
							$con = new Connectivity();
							$rows = $con->getData($query);
							if( sizeof($rows) > 0 ){
								foreach( $rows as $data ){
									foreach( $data as $d ){
											echo "<option value=$d[stateid]>$d[name]</option>";
									}
								}
							}
							else{
								echo "<br/>No Result<br/>";
							}	
						?>
					  </select>
					  </div>
						<button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
					</div>
				</fieldset>
			</form>
					  
			<!--	~~~~~~~~~~~~~	Search Cities ~~~~~~~~~		-->
			<form class="form-horizontal" action="CityResult.php" method="POST">
				<fieldset>
					<legend>Search Cites</legend>
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
				</fieldset>
			</form>
        </div>
		<!--	~~~~~~~		Other Setting	~~~~~~~~~~	-->
        <div class="tab-pane fade in" id="tab4">
			<form class="form-horizontal" action="SaveNewOtherSetting.php" method="POST">
				<fieldset>
					<legend>New Type Value</legend>
					<div class="form-group">
					  <label class="col-md-4 control-label" for="appendedtext">Enter Type Value</label>
						<div class="col-md-4">
						  <input id="appendedtext" name="txtNewValue" class="form-control" placeholder="placeholder" type="text">
						</div>
					</div>
					<!--		State info		-->
					<!-- Select input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="txtNewValue1">Type</label>  
				  <div class="col-md-5">
				  <Select name="ddlType" class="form-control">
					<?php
						$query = "select distinct(Type) from tbl_list_mst";
						$con = new Connectivity();
						$rows = $con->getData($query);
						
						if( sizeof($rows) > 0 ){
							foreach( $rows as $data ){
								foreach( $data as $d ){
										echo "<option value=$d[Type]>$d[Type]</option>";
								}
							}
						}
						else{
							echo "<br/>No Result<br/>";
						}	
					?>
				  </select>
				  </div>
						<button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
					</div>
				</fieldset>
			</form>
					  
			<!--	~~~~~~~		Search Setting	~~~~~~~~~~	-->
			<form class="form-horizontal" action="OtherSettingResult.php" method="POST">
				<fieldset>
					<legend>Other Setting</legend>
				<!--		State info		-->
				<!-- Select input-->
				<div class="form-group">
				  <label class="col-md-4 control-label" for="selecttype">Select Type</label>  
				  <div class="col-md-5">
				  <Select name="ddlType" class="form-control">
					<?php
						$query = "select distinct(Type) from tbl_list_mst";
						$con = new Connectivity();
						$rows = $con->getData($query);
						
						if( sizeof($rows) > 0 ){
							foreach( $rows as $data ){
								foreach( $data as $d ){
										echo "<option value=$d[Type]>$d[Type]</option>";
								}
							}
						}
						else{
							echo "<br/>No Result<br/>";
						}	
					?>
				  </select>
				  </div>
				</div>
						<div class="form-group">
						  <label class="col-md-4 control-label" for="appendedtext"></label>
						  <div class="col-md-4">
							<div class="input-group">
							<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search All</button>
							</div>    
						  </div>
						</div>
				</fieldset>
			</form>
        </div>
      </div>
    </div>    
    </div>
	</div>
	</div>
<?php
	include_once("footer.php");
?>