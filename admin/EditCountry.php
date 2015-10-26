<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) > 0 ){
		$query = "select * from countries";
		$con = new Connectivity();
		$rows = $con->getData($query);		
	}
	else{
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
?>
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Change State Name</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">State Name</label>  
  <div class="col-md-5">
  <label class="col-md-4 control-label" for="txtChangedName">India</label>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Changed Name</label>  
  <div class="col-md-5">
  <input id="txtChangedName" name="txtChangedName" type="text" placeholder="" class="form-control input-md" required="">
    
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

<?php
	include_once("footer.php");
?>
