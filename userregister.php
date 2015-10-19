<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>
<!--<script type="text/javascript">
	function userValidation(){
		var x = document.userForm.userPassword.value;
		var y = document.userForm.userConfirmPassword.value;
		var z = document.userForm.userMobileNumber.value;
			if(x.length < 8 || y.length < 8){
				document.getElementById("error_message").innerHTML = "*Password must be 8 character Long";
				document.userForm.userPassword.focus();
				return false;
			}
			else if(x !== y){
				document.getElementById("error_message").innerHTML = "*Both the Passwords must match";
				document.userForm.userPassword.focus();
				return false;
			}
			else if(isNaN(z) === true){
				document.getElementById("error_message").innerHTML = "*Mobile Number must be in numbers";
				document.userForm.userMobileNumber.focus();
				return false;
			}
			else if(z.length !== 10){
				document.getElementById("error_message").innerHTML = "*Mobile number must be 10 Digit Long";
				document.userForm.userMobileNumber.focus();
				return false;
			}
			else{
				return true;
			}
	}
</script>-->
<div class="container">
<div class="row">
<div class="col-md-6">
<form id="defaultForm" class="form-horizontal fv-form fv-form-bootstrap" novalidate="novalidate" method="post" action="userRegisterVerify.php">
<fieldset>
<!-- Form Name -->
<legend style="text-align: center;"><h2>User Registration</h2></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email id</label>  
  <div class="col-md-8">
  <input data-fv-field="email" id="emailid" name="userEmailId" placeholder="Enter Your Email Id" class="form-control input-md"  type="email">  
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-8">
    <input pattern="[a-zA-Z0-9]{8}" data-fv-field="password" id="paswdid" name="userPassword" placeholder="Enter Your Password" class="form-control input-md" required="" type="password">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm Password</label>
  <div class="col-md-8">
    <input pattern="[a-zA-Z0-9]{8}" data-fv-field="password" id="conpswdid" name="userConfirmPassword" placeholder="Please Enter Your Password Again" class="form-control input-md" required="" type="password">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">State</label>
  <div class="col-md-8">
    <select id="selectbasic" name="userState" class="form-control">
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
		<option value="Andhra Pradesh">Andhra Pradesh</option>
		<option value="Arunachal Pradesh">Arunachal Pradesh</option>
		<option value="Assam">Assam</option>
		<option value="Bihar">Bihar</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Chhattisgarh">Chhattisgarh</option>
		<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
		<option value="Daman and Diu">Daman and Diu</option>
		<option value="Delhi">Delhi</option>
		<option value="Goa">Goa</option>
		<option value="Gujarat">Gujarat</option>
		<option value="Haryana">Haryana</option>
		<option value="Himachal Pradesh">Himachal Pradesh</option>
		<option value="Jammu and Kashmir">Jammu and Kashmir</option>
		<option value="Jharkhand">Jharkhand</option>
		<option value="Karnataka">Karnataka</option>
		<option value="Kerala">Kerala</option>
		<option value="Lakshadweep">Lakshadweep</option>
		<option value="Madhya Pradesh">Madhya Pradesh</option>
		<option value="Maharashtra">Maharashtra</option>
		<option value="Manipur">Manipur</option>
		<option value="Meghalaya">Meghalaya</option>
		<option value="Mizoram">Mizoram</option>
		<option value="Nagaland">Nagaland</option>
		<option value="Orissa">Orissa</option>
		<option value="Pondicherry">Pondicherry</option>
		<option value="Punjab">Punjab</option>
		<option value="Rajasthan">Rajasthan</option>
		<option value="Sikkim">Sikkim</option>
		<option value="Tamil Nadu">Tamil Nadu</option>
		<option value="Tripura">Tripura</option>
		<option value="Uttaranchal">Uttaranchal</option>
		<option value="Uttar Pradesh">Uttar Pradesh</option>
		<option value="West Bengal">West Bengal</option>      
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">City</label>
  <div class="col-md-8">
    <select id="selectbasic" name="userCity" class="form-control">
      	<option value="Mumbai">Mumbai</option>
		<option value="Bangalore">Bangalore</option>
		<option value="Hyderabad">Hyderabad</option>
		<option value="Ahmedabad">Ahmedabad</option>
		<option value="Chennai">Chennai</option>
		<option value="Kolkata">Kolkata</option>
		<option value="Surat">Surat</option>
		<option value="Pune">Pune</option>
		<option value="Jaipur">Jaipur</option>
		<option value="Lucknow">Lucknow</option>
		<option value="Kanpur">Kanpur</option>
		<option value="Nagpur">Nagpur</option>
		<option value="Indore">Indore</option>
		<option value="Visakhapatnam">Visakhapatnam</option>
		<option value="Thane">Thane</option>
		<option value="Bhopal">Bhopal</option>
		<option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
		<option value="Patna">Patna</option>
		<option value="Vadodara">Vadodara</option>
		<option value="Ghaziabad">Ghaziabad</option>
		<option value="Ludhiana">Ludhiana</option>
		<option value="Agra">Agra</option>
		<option value="Nashik">Nashik</option>
		<option value="Faridabad">Faridabad</option>
		<option value="Meerut">Meerut</option>
		<option value="Rajkot">Rajkot</option>
		<option value="Kalyan-Dombivali">Kalyan-Dombivali</option>
		<option value="Vasai-Virar">Vasai-Virar</option>
		<option value="Varanasi">Varanasi</option>
		<option value="Srinagar">Srinagar</option>
		<option value="Aurangabad">Aurangabad</option>
		<option value="Dhanbad">Dhanbad</option>
		<option value="Amritsar">Amritsar</option>
		<option value="NaviMumbai">NaviMumbai</option>
		<option value="Allahabad">Allahabad</option>
		<option value="Anantnag">Anantnag</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Jabalpur">Jabalpur</option>
		<option value="Gwalior">Gwalior</option>
		<option value="Vijayawada">Vijayawada</option>
		<option value="Jodhpur">Jodhpur</option>
		<option value="MaduraiN">MaduraiN</option>
		<option value="Raipur">Raipur</option>
		<option value="Guwahati">Guwahati</option>
		<option value="Chandigarh">Chandigarh</option>
		<option value="Solapur">Solapur</option>
    </select>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Mobile Number</label>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">+91</span>
      <input id="prependedtext" pattern="[0-9]{10}" name="userMobileNumber" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text">
    </div>
  </div>
</div>
	<!--<p id="error_message" style="color:red;"></p>-->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit"id="singlebutton" name="userSubmitForm" class="btn btn-default">Submit</button>
  	<button type="reset"id="singlebutton" name="userResetForm" class="btn btn-default"> Reset </button>
  </div>
</div>
</fieldset>
</form>
</div>
<div class="col-md-1">
<!---->	
</div>
<div class="col-md-5">
	<form id="defaultForm1" class="form-horizontal fv-form fv-form-bootstrap" method="post" action="userLoginVerify.php" novalidate="novalidate">
	<fieldset>
	<!-- Form Name -->
	<legend style="text-align: center;"><h2>Already Registered?</h2></legend>
    	<div class="form-group">
			<!--<label for="exampleInputEmail1">Email Address:</label>-->
			<input data-fv-field="email" type="email" class="form-control" id="exampleInputEmail1" name="userEmailid" placeholder="Enter the Email id" required="">
			</div>
			<div class="form-group">
			<!--<label for="exampleInputPassword1">Password:</label>-->
			<input data-fv-field="password" pattern="[a-zA-Z0-9]{8}" type="password" class="form-control" id="exampleInputPassword1" name="userPassword" placeholder="Enter Password" required="">
			</div>
				  <div>
				    <label>
				      <input type="checkbox" name="rememberme" value="1"> Remember me
				    </label>
				  </div>
				  <div>
				    <label>
				      <a>Forgot your password ?</a></center>
				    </label>
				  </div>
				  <center><input type="submit" name="userLoginSubmit" class="btn btn-success" value="Sign In"/></center>
				  <!--<span><?php echo $error; ?></span>-->
				</div>
    			</form>
</div>
</div>
</div>
<br />
<br />
<br />
<br />
<?php
include_once './Development/commonfiles/footer.php';
?>
