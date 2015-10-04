<!-- Included by the darshak gajjar date : 25/9/2015 = 8:36PM -->
  	<html lang="en"><head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Get Recruit Yourself</title>
		<meta name="generator" content="Bootply">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--<link type="text/css" href="Design/bootstrap/css/bootstrap-theme.css" rel="stylesheet">-->
		<link type="text/css" href="Design/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link type="text/css" href="Design/manual/css/style.css" rel="stylesheet"/>
		
		<script type="text/javascript" src="Design/Jquery/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="Design/bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
	<?php 
		
			include_once './Development/commonfiles/header.php';
			include_once './Development/commonfiles/searchbar.php';
	?>
 <form class="form-horizontal">
<fieldset>

<!-- Form Name --><br>
<center><legend>New Recruiter Registration </legend></center>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Email Id:</label>  
  <div class="col-md-4">
  <input id="txtEmail" name="txtEmail" placeholder="Enter Email Address" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtpassword">Password :</label>
  <div class="col-md-4">
    <input id="txtpassword" name="txtpassword" placeholder="Enter Password " class="form-control input-md" required="" type="password">
    <span class="help-block">(Hint: Password must having Alpha-numeric with atleast 1 special character)</span>
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtconpass">Confirm Password :</label>
  <div class="col-md-4">
    <input id="txtconpass" name="txtconpass" placeholder="Confirm Password" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcompany">Company :</label>  
  <div class="col-md-6">
  <input id="txtcompany" name="txtcompany" placeholder="Company Name" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="drpIndustry"> Industry / Function Area :</label>
  <div class="col-md-6">
    <select id="drpIndustry" name="drpIndustry" class="form-control">
      <option value="1">IT- Software</option>
      <option value="2">IT- Hardware</option>
      <option value="3">Banking Sector</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Address :</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="textarea" name="textarea">Enter Company Address</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="drpcity">City :</label>
  <div class="col-sm-2">
    <select id="drpcity" name="drpcity" class="form-control">
      <option value="1">Ahmedabad</option>
      <option value="2">Surat</option>
      <option value="3">Vadodara</option>
      <option value="4">Rajkort</option>
    </select>
  </div>
  <label class="col-sm-2 control-label" for="drpstate">State :</label>
  <div class="col-sm-2">
    <select id="drpstate" name="drpstate" class="form-control">
      <option value="1">Gujarat</option>
      <option value="2">Rajas than</option>
      <option value="3">Bangalore</option>
    </select>
  </div>
  
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcontactPerson">Contact Person :</label>  
  <div class="col-md-2">
  <input id="txtcontactPerson" name="txtcontactPerson" placeholder="Enter Contact Person" class="form-control input-md" required="" type="text">
  </div>
  <label class="col-md-2 control-label" for="txtContactNo">Contact Number:</label>  
  <div class="col-md-2">
  <input id="txtContactNo" name="txtContactNo" placeholder="Contact Mobile Number" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsave"></label>
  <div class="col-md-8">
    <button id="btnsave" name="btnsave" type="submit"	class="btn btn-success">Save</button>
    <button id="btnclear" name="btnclear" type="reset" class="btn btn-warning">Clear</button>
  </div>
</div>
</fieldset>
</form>

