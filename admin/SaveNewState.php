<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	//$query = "select * from adminmst where admin_name='Dilip'";
	
	print_r($_REQUEST);
	$query = "insert into tblstatemst (name,country_id) values ('".$_REQUEST['txtNewStateName']."',1)";
	
	echo "<br/>".$query;
	$con = new Connectivity();
	$con->updateData($query);
	//header('location:GeneralSetting.php?msg=success');
	}else{
		echo "Directly redirected !!";
	}
?>