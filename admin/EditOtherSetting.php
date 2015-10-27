<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) <= 0 ){
		//echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
?>
<form class="form-horizontal" Method="POST" action="SaveEditOtherSetting.php">
<fieldset>

<!-- Form Name -->
<legend>Change Type Value</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Type Value</label>  
  <div class="col-md-5">
  <label class="col-md-4 control-label" for="txtChangedName">
  <?php 
	if(isset($_REQUEST['Value'])){
		echo $_REQUEST['Value'];
	}
	else{
		//echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
  ?></label>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Changed Type Value</label>  
  <div class="col-md-5">
  <input id="txtChangedStateName" name="txtChangedValue" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<input type="hidden" name="autoid" value="<?php echo $_REQUEST['autoid']; ?>"/>

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
