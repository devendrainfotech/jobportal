<?php
	session_start();
	//include_once 'userLoginVerify.php';// includes the login script
	//include_once 'recruiterLoginVerify.php';
	if(isset($_SESSION['login_recruiter'])){
		header("location: recruiterhomepage.php");
	}
	if(isset($_SESSION['login_user'])){
		header("location: user_profile.php");
	}
?>
<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>
<title> Recruiter Registration</title>
<script type="text/javascript">
	$(document).ready(function(){
		$('.navbar-right').hide();
	});
</script>

<div class="container">
<div class="row">
<div class="col-md-6">
<form name="userForm" id="defaultForm"  class="form-horizontal fv-form fv-form-bootstrap" method="post" action="recruiterRegisterVerify.php">
<fieldset>
<!-- Form Name -->
<legend style="text-align: center;"><h2>Recruiter Registration</h2></legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email id</label>  
  <div class="col-md-8">
  <input data-fv-field="email" id="emailid" name="recruiteremailid" placeholder="Enter Your Email Id" class="form-control input-md" required="" type="email">  
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Password</label>
  <div class="col-md-8">
    <input pattern="[a-zA-Z0-9]{8}" data-fv-field="password" id="paswdid" name="recruiterpswd" placeholder="Enter Your Password" class="form-control input-md" required="" type="password" title="enter password 8char long">
  </div>
</div>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Confirm Password</label>
  <div class="col-md-8">
    <input pattern="[a-zA-Z0-9]{8}" data-fv-field="confirmPassword" id="conpswdid" name="recruitercnfpswd" placeholder="Please Enter Your Password Again" class="form-control input-md" required="" type="password">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Company Name</label>  
  <div class="col-md-8">
  <input id="cmpnmeid" name="recruitercmpname" placeholder="Enter Your Company Name" class="form-control input-md" required="" type="text">  
  </div>
</div>
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Company Address</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="cmpaddid" placeholder="enter the address" required="" name="recruitercmpadd"></textarea>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">State</label>
  <div class="col-md-8">
    <select data-fv-notempty-message="The country is required"data-fv-notempty=""data-fv-field="country" id="selectbasic" name="recruitercmpstate" class="form-control">
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
    <select data-fv-notempty-message="The country is required"data-fv-notempty=""data-fv-field="country" id="selectbasic" name="recruitercmpcity" class="form-control">
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
      <input pattern="[0-9]{10}" id="prependedtext" name="recruitermblnum" class="form-control" placeholder="Enter Your Mobile Number" required="" hint="enter at least 10 digit" type="text">
    </div>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Security Question</label>
  <div class="col-md-8">
    <select data-fv-notempty-message="Please enter sec question"data-fv-notempty=""data-fv-field="country" id="selectbasic" name="recruiterSecQuestion" class="form-control">
      	<option value="1">What is Your Pet name</option>
      	<option value="2">What is Your Mothers Maiden name</option>
      	<option value="3">What is Your Favorite color</option>
      	<option value="4">Where are you born at?</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Security Answer</label>
    <div class="col-md-8">
  		<input id="cmpnmeid" name="recruiterSecurityAnswer" placeholder="Enter Your Answer Here" class="form-control input-md" required="" type="text">  
  </div>
</div>

<!-- Multiple Checkboxes 
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Conditions</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input name="reccnd" id="checkboxes-0" value="" type="checkbox">
      I agree to term and conditions.
    </label>
	</div>
  </div>
</div>
-->
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="submit"id="singlebutton" name="recruiterRegisterButton" class="btn btn-default">Submit</button>
  </div>
</div>

</fieldset>
</form>
</div>

<div class="col-md-1"></div>

<div class="col-md-5">
	<form id="defaultForm2" class="form-horizontal fv-form fv-form-bootstrap" method="post" action="recruiterLoginVerify.php" novalidate="novalidate">
		<fieldset>
			<legend style="text-align: center;"><h2>Recruiter LogIn</h2></legend>
    				<div class="form-group">
				    <!--<label for="exampleInputEmail1">Email Address:</label>-->
				    <input data-fv-field="email" type="email" class="form-control" id="exampleInputEmail1" name="recruiterEmailid" placeholder="Enter the Email id" required="">
				  </div>
				  <div class="form-group">
				    <!--<label for="exampleInputPassword1">Password:</label>-->
				    <input data-fv-field="password" pattern="[a-zA-Z0-9]{8}" type="password" class="form-control" id="exampleInputPassword1" name="recruiterPassword" placeholder="Enter Password" required="">
				  </div>
				  <div>
				    <!--<label>
				      <input type="checkbox" name="rememberme" value="1"> Remember me
				    </label>-->
				  </div>
				  <div>
				    <label>
				      <a href="recruiterforgotpassword.php">Forgot your password ?</a></center>
				    </label>
				  </div>
				 <!-- <li role="separator" class="divider"></li>-->
				  <center><input type="submit" name="recruiterLoginSubmit" class="btn btn-success" value="Sign In"/></center>
				  <!--<span><?php echo $error; ?></span>-->
				</div>
				</fieldset>
    </form>
</div>
</div>
</div>
<?php
include_once './Development/commonfiles/footer.php';
?>

