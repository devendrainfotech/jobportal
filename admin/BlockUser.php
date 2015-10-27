<?php
	if( isset($_REQUEST['query']) ){
	include_once('../Development/commonfiles/Connectivity.php');
	$con = new Connectivity();
	$result = $con->updateData($_REQUEST['query']);
	echo $result;
	if( $result > 0 ){
		header('location:'.$_REQUEST["redirectedPage"].'?msg=success');
	}else{
		//header('location:Error.php?msg=Error%20in%20blocking%20the%20user%20please%20!!block%20manually%20.');
	}
	}
?>