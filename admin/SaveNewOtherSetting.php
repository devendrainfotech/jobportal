<?php
	if( count($_REQUEST) > 0){
	include_once('../Development/commonfiles/Connectivity.php');
	$query = "insert into tbl_list_mst (Type,Value) values ('".$_REQUEST['ddlType']."','".$_REQUEST['txtNewValue']."')";
	
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