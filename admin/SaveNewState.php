<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	$query = "insert into tblstatemst (name) values ('".$_REQUEST['txtNewStateName']."')";
	
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