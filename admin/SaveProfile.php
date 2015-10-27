<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	$query = "update adminmst set admin_name='". $_REQUEST['txtAdminName']."', password='". $_REQUEST['txtAdminNewPassword']."', email_id='". $_REQUEST['txtEmailId']."', contact_no='". $_REQUEST['txtContactNo']."', location='". $_REQUEST['txtLocation']."' where admin_name='". $_SESSION['admin_name']."' and password='". $_REQUEST["txtAdminOldPassword"]. "'";
	
	$con = new Connectivity();
	$result = $con->updateData($query);
	echo $result;
	if( $result > 0 ){
		header('location:GeneralSetting.php?msg=success');
	}else{
		header('location:Error.php?msg=Error in saving new state .');
	}
	}
?>