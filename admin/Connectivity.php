<?php
class DatabaseConnectivity{
	public static function GetRow($query){
		
		$con = mysqli_connect("localhost","root","","jobportal");
		if(mysqli_connect_errno()){
			echo "Failed to connect to mysql".mysqli_connect_error();
			return '';
		}
		else{
			//echo $query;
			$result = mysqli_query($con,$query);
			return mysqli_fetch_array($result);
		}
	}
}
?>