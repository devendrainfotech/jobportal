<?php 
		
			include_once './Development/commonfiles/header.php';
			include_once './Development/commonfiles/searchbar.php';
	?>
 <form class="form-horizontal">
<fieldset>

<!-- Form Name --><br>
<center><legend>Create News Jobs </legend></center>
<br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Job Title / Designation</label>  
  <div class="col-md-6">
  <input id="txttitle" name="txttitle" placeholder="Job Title is the first thing applicats see when they search for jobs" class="form-control input-md" required="" type="text">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcompany">Job Description</label>  
  <div class="col-md-6">
  <textarea class="form-control" id="txtdesc" name="txtdesc" placeholder="Entire Description about job">Entire Description about job</textarea>
  
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtSkill">Job Skill/Keyword</label>  
  <div class="col-md-6">
  <input id="txtskill" name="txtskill" placeholder="Main Keyword or skill required for this job" class="form-control input-md" required="" type="text">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-sm-4 control-label" for="drpExpMin">Work Experience</label>
  <div class="col-sm-2">
    <select id="drpExpMin" name="drpExpstart" class="form-control">
      <option value="0">Minimum</option>
	  <option value="f">fresher</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
    </select>
	</div>	
	<!-- <label class="control-label" for="drpExpMax">To</label> -->
	<div class="col-sm-2">
	<select id="drpExpMin" name="drpExpstart" class="form-control">
      <option value="0">Maximum</option>
	  <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
    </select>
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

