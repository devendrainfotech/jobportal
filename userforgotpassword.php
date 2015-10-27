<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>
<title>User Forgot Password</title>
<div class="container">
	<div class="row">
		<form id="defaultForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" method="post" action="userforgotrequest.php">
		<fieldset>
<!-- Form Name -->
		<legend style="text-align: center;"><h2>Reset Your Password</h2></legend>
		<div class="col-md-8 col-md-offset-2">
			<div class="form-group">
			  <label class="col-md-3 control-label" for="textinput">Email id</label>  
			  <div class="col-md-8">
			  <input required="" data-fv-field="email" id="emailid" name="userEmailId" placeholder="Enter Your Email Id" class="form-control input-md"  type="email">  
			  </div>
			</div>
		
		<div class="form-group">
		  <label class="col-md-3 control-label" for="selectbasic">Security Question</label>
		  <div class="col-md-8">
    		<select data-fv-notempty-message="Security Question is Required"data-fv-notempty=""data-fv-field="country" id="selectbasic" name="userSecQuestion" class="form-control">
		      	<option value="1">What is Your Pet name</option>
		      	<option value="2">What is Your Mothers Maiden name</option>
		      	<option value="3">What is Your Favorite color</option>
		      	<option value="4">Where are you born at?</option>
    		</select>
  			</div>
		</div>
		
		<div class="form-group">
 		 <label class="col-md-3 control-label" for="prependedtext">Security Answer</label>
    		<div class="col-md-8">
  			<input id="cmpnmeid" name="userSecurityAnswer" placeholder="Enter Your Answer Here" class="form-control input-md" required="" type="text">  
  			</div>
		</div>
		
		<div class="form-group">
 		 <label class="col-md-3 control-label" for="prependedtext">New Password</label>
    		<div class="col-md-8">
  			<input pattern="[a-zA-Z0-9]{8}" id="cmpnmeid" name="userNewPassword" placeholder="Enter Your New Password" class="form-control input-md" required="" type="password">  
  			</div>
		</div>
		
		<div class="form-group">
  			<label class="col-md-3 control-label" for="singlebutton"></label>
  			<div class="col-md-4">
    		<button type="submit"id="singlebutton" name="userSubmitPass" class="btn btn-default">Submit</button>
  			<button type="reset"id="singlebutton" name="userResetForm" class="btn btn-default"> Reset </button>
  			</div>
		</div>
		</div>
		</fieldset>
		</form>
	</div>
</div>
<?php
include_once './Development/commonfiles/footer.php';
?>