<?php
	include_once 'userSession.php';		
	if(!isset($_SESSION['login_recruiter'])){
		header("location:index.php");
	}
	include_once './Development/commonfiles/header.php';
	include_once './Development/commonfiles/searchbar.php';
	?>

<div class="container">
	<div class="row">
<?php
if(isset($_POST['recruitereditbtn'])){
	$editlabelfield = $_POST['editbtnlabel'];
$query = "SELECT *FROM tbljobmst WHERE jobid = '$editlabelfield'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) == 1){
	while($row = mysqli_fetch_assoc($result)){

?>
<form class="form-horizontal" method="post" action="jobpostverify.php">
<fieldset>
<!-- Form Name -->
<legend style="text-align: center;">Create News Jobs </legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Job Title / Designation</label>  
  <div class="col-md-6">
  <input required="" value="<?php echo $row['jobdesignation'];?>" id="txttitle" name="recruitertitle" placeholder="Job Title is the first thing applicats see when they search for jobs" class="form-control input-md" required="" type="text">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtSkill">Company Name</label>  
  <div class="col-md-6">
  <input required="" value="<?php echo $row['companyname'];?>" id="txtskill" name="recruitercmpname" placeholder="Enter the Company name" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtSkill">Location</label>  
  <div class="col-md-6">
  <input required="" value="<?php echo $row['locationofhiring'];?>" id="txtskill" name="recruiterlocation" placeholder="Enter the Company name" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="txtSkill">Qualification</label>  
  <div class="col-md-6">
  <input required="" value="<?php echo $row['qualification'];?>" id="txtskill" name="recruiterquali" placeholder="Enter the Company name" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtSkill">Job Skill/Keyword</label>  
  <div class="col-md-6">
  <input required="" value="<?php echo $row['jobskill'];?>" id="txtskill" name="recruiterjobskill" placeholder="Main Keyword or skill required for this job" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="drpExpMin">Work Experience</label>
  <div class="col-sm-2">
    <select id="drpExpMin" name="recruiterexp" class="form-control">
      <option value="0">Min Experience</option>
	  <option value="f">fresher</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
    </select>
	</div>
	<label class="col-sm-1 control-label" for="drpExpMin">Salary</label>
	<div class="col-sm-1">
    <select id="drpExpMin" name="recruiterminsal" class="form-control">
      <option value="0">Min Salary</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
    </select>
	</div>
	<div class="col-sm-1">
    <select id="drpExpMin" name="recruitermaxsal" class="form-control">
      <option value="0">Min Salary</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
    </select>
	</div> 
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcompany">Job Description</label>  
  <div class="col-md-6">
  <textarea value="<?php echo $row['jobdescription'];?>" class="form-control" id="txtdesc" name="recruiterdesc" placeholder="Entire Description about job">Entire Description about job</textarea>
  </div>
</div>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsave"></label>
  <div class="col-md-8">
    <button id="btnsave" name="recruitereditsave" type="submit"	class="btn btn-success">Save</button>
    <button id="btnclear" name="btnclear" type="reset" class="btn btn-warning">Clear</button>
  </div>
  <input type="hidden" name="jobposthiddenval" value="<?php echo $editlabelfield;?>" />
</div>
</fieldset>
</form>
</div>
</div>
<br>
<?php
	}
}
}
include_once './Development/commonfiles/footer.php';
?>