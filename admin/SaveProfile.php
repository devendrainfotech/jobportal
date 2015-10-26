<?php
	session_start();
	echo "SaveProfile.php";
	
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	//$query = "select * from adminmst where admin_name='Dilip'";
	$query = "update adminmst set admin_name='". $_REQUEST['txtAdminName']."', password='". $_REQUEST['txtAdminNewPassword']."', email_id='". $_REQUEST['txtEmailId']."', contact_no='". $_REQUEST['txtContactNo']."', location='". $_REQUEST['txtLocation']."' where admin_name='". $_SESSION['admin_name']."' and password='". $_REQUEST["txtAdminOldPassword"]. "'";
	
	echo "<br/>".$query;
	$con = new Connectivity();
	$con->updateData($query);
	header('location:profile.php?msg=success');
	}else{
		echo "Directly redirected !!";
	}
?>