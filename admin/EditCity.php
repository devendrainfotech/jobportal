<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) <= 0 ){
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
?>
<form class="form-horizontal" action="SaveEditCity.php">
<fieldset>

<!-- Form Name -->
<legend>Change City Name</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">City Name</label>  
  <div class="col-md-5">
  <label class="col-md-4 control-label" for="txtChangedName">
  <?php 
	if(isset($_REQUEST['city_name'])){
		echo $_REQUEST['city_name'];
	}
	else{
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
  ?></label>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Changed City Name</label>  
  <div class="col-md-5">
  <input id="txtChangedCityName" name="txtChangedCityName" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>
<!--		State info		-->
<!-- Select input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtChangedName">Changed State</label>  
  <div class="col-md-5">
  <Select name="stateid">
	<?php
		$query = "select * from tblstatemst";
		$con = new Connectivity();
		$rows = $con->getData($query);
		
		if( sizeof($rows) > 0 ){
			foreach( $rows as $data ){
				foreach( $data as $d ){
					if ($d['stateid'] == $_REQUEST['stateid'] ){
						echo "<option value=$d[stateid] selected>$d[name]</option>";
					}
					else{
						echo "<option value=$d[stateid]>$d[name]</option>";
					}
				}
			}
		}
		else{
			echo "Invalid  !!!!!!!<br/>";
		}	
	?>
  </select>
  </div>
</div>


<?php echo $_REQUEST['stateid']; ?>
<input type="hidden" name="cityid" value="<?php echo $_REQUEST['cityid']; ?>"/>
<input type="hidden" name="city_name" value="<?php echo $_REQUEST['city_name']; ?>"/>

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
