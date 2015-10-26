<?php
include_once 'userSession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/message_dialogue_box.php';		
//include './Development/commonfiles/connection.php';
$variableid = $_POST['hiddenjob'];
//echo $login_id."new";
if(!isset($_SESSION['login_user'])){//checking that user is log on or not
	//echo "<script type='text/javascript'> alert('please Login then Try');</script>";
	?>
	<script>
	alert("Please Login Yourself then you can apply for the Job");
	window.location = "userregister.php";//redirecting throught the javascript beacuse the php header won't work here...:)
	</script>
	<?php
	//header("location:./userregister.php");	
}
$dbquery = "SELECT jobid,jobseekerid FROM userjobapplication WHERE jobid = '$variableid' AND jobseekerid = '$login_id'"; 
$dbresult = mysqli_query($conn, $dbquery);
if(mysqli_num_rows($dbresult) > 0){
	InformationMessage("Already Applied","You have Been Already Applied for this job");
	//echo "You have Been Already Applied for this job";	
}
else{
$query = "INSERT INTO `userjobapplication`(jobid,jobdesignation,jobskill,workexp,qualification,locationofhiring,company,jobseekerid) SELECT jobid,jobdesignation,jobskill,workexp,qualification,locationofhiring,companyname,'$login_id' FROM tbljobmst WHERE jobid = '$variableid'";
if(mysqli_query($conn, $query)){
	SuccessMessage("Job is been added Successfully","Job has been Aplied and saved into your databse");	
	//echo "query executed suceesfully";
}
else{
	//echo "query executed unsuceesfully <br>";	
	$error = mysqli_error($conn);
	ErrorMessage("Error Occured",$error);
}
if(isset($_POST['applyJob'])){
$newquery = "UPDATE `userjobapplication` SET `AScon` = '1' WHERE `jobid` = '$variableid' AND `jobseekerid` = '$login_id'";
if(mysqli_query($conn, $newquery)){
	}
	else{
	$error = mysqli_error($conn);
	ErrorMessage("Error Occured",$error);
}
}
else if(isset($_POST['saveJob'])){
$newquery = "UPDATE `userjobapplication` SET `AScon` = '0' WHERE `jobid` = '$variableid' AND `jobseekerid` = '$login_id'";	
if(mysqli_query($conn, $newquery)){
	
}
else{
	$error = mysqli_error($conn);
	ErrorMessage("Error Occured",$error);
}
}
}
include_once './Development/commonfiles/footer.php';		
?>