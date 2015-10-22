<?php
/*	include_once './userSession.php';
	include_once './Development/commonfiles/connection.php';
	$query = "SELECT *from `jobseekerdetail` WHERE `emailid` = '$login_session'";	
	
	$i = 0;
	$details;
	
	if($result = mysqli_query($conn, $query)){
		while($row = mysqli_fetch_row($result)){
			$details[$i] = $row[$i];
			echo $details[$i] . "<br>";
			$i++;
		}
		mysqli_free_result($result);
	}
	else{
		mysqli_error($conn);
	}
	mysqli_close($conn);

 * /
 */?>