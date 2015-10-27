<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) <= 0 ){
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
?>
<form class="form-horizontal" Method="POST" action="SaveEditState.php">
<fieldset>

<!-- Form Name -->
<legend>Change State Name</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">State Name</label>  
  <div class="col-md-5">
  <label class="col-md-4 control-label" for="txtChangedName">
  <?php 
	if(isset($_REQUEST['name'])){
		echo $_REQUEST['name'];
	}
	else{
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
  ?></label>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Changed State Name</label>  
  <div class="col-md-5">
  <input id="txtChangedStateName" name="txtChangedStateName" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<input type="hidden" name="stateid" value="<?php echo $_REQUEST['stateid']; ?>"/>
<input type="hidden" name="name" value="<?php echo $_REQUEST['name']; ?>"/>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnSave"></label>
  <div class="col-md-8">
    <button id="btnSave" name="btnSave" class="btn btn-success">Save</button>
    <a class="btn btn-danger" href="GeneralSetting.php">Cancel</a>
  </div>
</div>

</fieldset>
</form>

<?php
	include_once("footer.php");
?>
