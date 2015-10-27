<?php
include_once 'userSession.php';
include_once 'Development/commonfiles/header.php';
include_once 'Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/message_dialogue_box.php';		
?>
<title>Job Verify</title>
<?php
$applicationid = $_POST['savetoapplyfield'];
$tablegetjobid;
$globalquery = "SELECT jobid from userjobapplication WHERE appid = '$applicationid'";
$globalresult = mysqli_query($conn, $globalquery);
while($globalrow = mysqli_fetch_assoc($globalresult)){
	$tablegetjobid = $globalrow['jobid'];
}
//echo $applicationid;
if(isset($_POST['savetoapplybutton'])){
	//echo "into the if";
	$query = "UPDATE userjobapplication SET AScon = '1' WHERE appid = '$applicationid'";
	if(mysqli_query($conn, $query)){
		SuccessMessage("Succesfully applied the job","You are applied the saved jobs Thank You for your intrest");
	}
	else{
		$errormsg = mysqli_error($conn);	
		ErrorMessage("Error Occured",$errormsg);
	}
}

if(isset($_POST['deletebutton'])){
	$query = "DELETE FROM userjobapplication WHERE appid = '$applicationid'";
	if(mysqli_query($conn, $query)){
		SuccessMessage("Succesfully Deleted the job","You are Deleted the job Succesfully Thank You for your intrest");
	}
	else{
		$errormsg = mysqli_error($conn);	
		ErrorMessage("Error Occured",$errormsg);
	}
}

/*-----------------------------------------------*/
if(isset($_POST['allinformationbutton'])){
	$sqlquery = "SELECT jobid,jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobid='$tablegetjobid'";
	$result = mysqli_query($conn, $sqlquery);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			?>
			<div class="container">
				<br>
	<div class="col-md-7 col-md-offset-3">
		<div class="job-post-search">
			<h4><?php echo ucwords($row['jobdesignation']);?></h4>
			<h5><?php echo ucwords($row['companyname']);?></h5>
			<span class="glyphicon glyphicon-briefcase"></span> <?php echo $row['workexp']." year"?>&nbsp;
			<span class="glyphicon glyphicon-map-marker"></span> <?php echo ucwords($row['locationofhiring']);?>
		<!-- -->
			<hr>
		<!-- -->
		<div class="row">
			<div class="col-md-3">
				<b>Key Skills :</b>
			</div>
			<div class="col-md-9">
				<?php echo strtoupper($row['jobskill']);?> 
			</div>
		</div>
		<!-- -->
		<div class="row">
			<div class="col-md-3">
				<b>Qualification :</b>
			</div>
			<div class="col-md-9">
				<?php echo strtoupper($row['qualification']);?> 
			</div>
		</div>
		<!-- -->
		<div class="row">
			<div class="col-md-3">
				<b>Salary Offered :</b>
			</div>
			<div class="col-md-9">
				<?php echo $row['start_package']." - ".$row['end_package']." Lakhs";?> 
			</div>
		</div>
		<!-- -->
		<div class="row">
			<div class="col-md-3">
				<b>Job Description :</b>
			</div>
			<div class="col-md-9">
				<?php echo $row['jobdescription']?></div>
		</div>
		<!-- -->
		</div >
		<!-- -->
		<div class="job-search-buttons">	
			<div class="col-md-12">
				<form method="post" action="jobApplyVerify.php">
				<input type="hidden" name="hiddenjob" value="<?php echo $row['jobid'];?>">
				<button type="submit" name="applyJob" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Apply</button>
				<!--<button type="submit" name="saveJob" class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Save </button>
				--></form>
			</div>	
	</div>
</div>
<!--------------------------------------->
</div>			
			<?php
		}
	}	
}
?>
<?php
include_once 'Development/commonfiles/footer.php';
?>