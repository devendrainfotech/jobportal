<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	$query = "Delete from tbl_list_mst where autoid=".$_REQUEST['autoid'];
	
	$con = new Connectivity();
	$result = $con->updateData($query);
	if( $result > 0 ){
		header('location:GeneralSetting.php?msg=success');
	}else{
		header('location:Error.php?msg=Error in saving new state .');
	}
	}
?>