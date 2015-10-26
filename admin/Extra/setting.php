<?php
	include_once("header.php");
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
        <center><h1>Admin Profile Setting</h1></center>
 
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	<span class="glyphicon glyphicon-user fa fa-user" aria-hidden="true"></span>
                <div class="hidden-xs">General</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            	<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <div class="hidden-xs">Other</div>
            </button>
        </div>
	</div>
</div>
<!--=================tab1 coding starts from here ...... ==============-->
   <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
			<form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Admin Personal Setting</legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtAdminName">Admin Name</label>  
			  <div class="col-md-5">
			  <input id="txtAdminName" name="txtAdminName" placeholder="Name" class="form-control input-md" required="" type="text">
			  <span class="help-block">*</span>  
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="oldPassword">Old Password</label>
			  <div class="col-md-5">
				<input id="oldPassword" name="oldPassword" placeholder="Old Password" class="form-control input-md" type="password">
				<span class="help-block">*</span>
			  </div>
			</div>

			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="newPassword">New Password</label>
			  <div class="col-md-5">
				<input id="newPassword" name="newPassword" placeholder="New Password" class="form-control input-md" required="" type="password">
				<span class="help-block">*Shold not same as old password</span>
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>
<!-- ================ tab 2 starts from here.. =====================  -->
        <div class="tab-pane fade in" id="tab2">
			<form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Cities Setting</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the name of city</label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. Ahmedabad" required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed city</label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>
		
		<!-- ==========================	tab 3 Skils	=================================-->
        <div class="tab-pane fade in" id="tab3">
          <form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Skills Setting</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the Skill</label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. Ahmedabad" required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed skill</label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>
        </div>
		
		<!-- ==========================	tab 4 Skils	=================================-->
      	<div class="tab-pane fade in" id="tab4">
          <form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Function Area / Industry</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the name of Area</label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. " required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed area</label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>
		
		<!-- ==========================	tab 5 Skils	=================================-->
      	<div class="tab-pane fade in" id="tab4">
          <form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Role / Designation</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the Role / Designation</label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. " required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed Role / Designation</label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>
		
		<!-- ==========================	tab 6 Skils	=================================-->
      	<div class="tab-pane fade in" id="tab4">
          <form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>Degree Name</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the name of Degree</label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. Ahmedabad" required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed Degree</label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>
		
		<!-- ==========================	tab 7 Skils	=================================-->
      	<div class="tab-pane fade in" id="tab4">
          <form class="form-horizontal">
			<fieldset>

			<!-- Form Name -->
			<legend>University</legend>

			<!-- Button Drop Down -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="buttondropdown">Enter the name of University </label>
			  <div class="col-md-5">
				<div class="input-group">
				  <input id="btnState" name="btnState" class="form-control" placeholder="e.g. " required="" type="text">
				  <div class="input-group-btn">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					  Action
					  <span class="caret"></span>
					</button>
					<ul class="dropdown-menu pull-right">
					  <li><a href="#">Add</a></li>
					  <li><a href="#" onclick="document.getElementById('txtState').disabled = !document.getElementById('txtState').disabled;">Edit</a></li>
					  <li><a href="#">Delete</a></li>
					</ul>
				  </div>
				</div>
			  </div>
			</div>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="txtState">Renamed University </label>  
			  <div class="col-md-5">
			  <input id="txtState" name="txtState" placeholder="" disabled class="form-control input-md" type="text">
			  <span class="help-block">*Should not same as original</span>  
			  </div>
			</div>

			<!-- Button (Double) -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="btnSave"></label>
			  <div class="col-md-8">
				<button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
				<button id="btnCancel" name="btnCancel" class="btn btn-danger">Cancel</button>
			  </div>
			</div>

			</fieldset>
			</form>

        </div>

		</div>
    </div>
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
	?>
	<?php
	include_once("footer.php");
?>
