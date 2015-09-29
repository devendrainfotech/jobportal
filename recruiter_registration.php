<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>

<form class="form-horizontal" method="post" action="recruitregpro.php" id="formvalidate" onsubmit="validation()">
<fieldset>

<!-- Form Name -->
<legend>Recruiter Registration</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email id</label>  
  <div class="col-md-4">
  <input id="emailid" name="recemailid" placeholder="Enter Your Email Id" class="form-control input-md" required="" type="text">  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Enter Password</label>
  <div class="col-md-4">
    <input id="paswdid" name="recpswd" placeholder="Enter Your Password" class="form-control input-md" required="" type="password">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">Enter Confirm Password</label>
  <div class="col-md-4">
    <input id="conpswdid" name="reccnfpswd" placeholder="Please Enter Your Password Again" class="form-control input-md" required="" type="password">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Company Name</label>  
  <div class="col-md-4">
  <input id="cmpnmeid" name="reccmpname" placeholder="Enter Your Company Name" class="form-control input-md" required="" type="text">  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Company Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="cmpaddid" name="reccmpadd">default text</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">State</label>
  <div class="col-md-4">
    <select id="selectbasic" name="reccmpstate" class="form-control">
      <option value="1">Gujarat</option>
      <option value="2">Rajesthan</option>
      <option value="3">Mahrashtra</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">City</label>
  <div class="col-md-4">
    <select id="selectbasic" name="reccmpcity" class="form-control">
      <option value="1">Ahmedabad</option>
      <option value="2">Surat</option>
      <option value="3">Rajkot</option>
    </select>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Mobile Number</label>
  <div class="col-md-4">
    <div class="input-group">
      <span class="input-group-addon">+91</span>
      <input id="prependedtext" name="recmblnum" class="form-control" placeholder="Enter Your Mobile Number" required="" type="text">
    </div>
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
    <button type="submit"id="singlebutton" name="singlebutton" class="btn btn-default">Submit</button>
  </div>
</div>

</fieldset>
</form>
<?php
//include_once './Development/commonfiles/footer.php';
?>
