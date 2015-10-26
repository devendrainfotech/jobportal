<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	//$query = "select * from adminmst where admin_name='Dilip'";
	
	print_r($_REQUEST);
	$query = "Delete from tblstatemst where stateid=$_REQUEST['stateid']";
	
	echo "<br/>".$query;
	$con = new Connectivity();
	$con->updateData($query);
	header('location:GeneralSetting.php?msg=success');
	}else{
		echo "Directly redirected !!";
	}
?>