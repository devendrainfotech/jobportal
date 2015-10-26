<?php
include_once 'userSession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/message_dialogue_box.php';
include_once './Development/commonfiles/connection.php';

	if(isset($_POST['recruitereditsave'])){
		$hiddenjobid = $_POST['jobposthiddenval'];
		
		$title = $_POST['recruitertitle'];
		$company = $_POST['recruitercmpname'] ;
		$location = $_POST['recruiterlocation'];
		$qualifiaction = $_POST['recruiterquali'];
		$skill = $_POST['recruiterjobskill'];
		$workexp = $_POST['recruiterexp'];
		$description = $_POST['recruiterdesc'];
		$minsal = $_POST['recruiterminsal'];
		$maxsal = $_POST['recruitermaxsal'];
		
		$query = "UPDATE tbljobmst SET `jobdesignation` = '$title', `companyname` = '$company', `locationofhiring` = '$location', `qualification` = '$qualifiaction', `jobskill` = '$skill', `workexp` = '$workexp', `jobdescription` = '$description', `start_package` = '$minsal', `end_package` = '$maxsal' WHERE `jobid` = '$hiddenjobid'";
		if(mysqli_query($conn, $query)){
			SuccessMessage("Query Updated Sucessfully","the job has been updated sucessfully","<a href='recruiterhomepage.php'>Goto Job information page</a>");
		}
		else{
			$error = mysqli_error($conn);
			ErrorMessage("Error Occured",$error);
		}
	}
	
	if(isset($_POST['recruitersave'])){
		$title = $_POST['recruitertitle'];
		$company = $_POST['recruitercmpname'] ;
		$location = $_POST['recruiterlocation'];
		$qualifiaction = $_POST['recruiterquali'];
		$skill = $_POST['recruiterjobskill'];
		$workexp = $_POST['recruiterexp'];
		$description = $_POST['recruiterdesc'];
		$minsal = $_POST['recruiterminsal'];
		$maxsal = $_POST['recruitermaxsal'];
		
		$query = "INSERT INTO `tbljobmst`(`jobdesignation`,`jobskill`,`workexp`,`qualification`,`locationofhiring`,`companyname`,`jobdescription`,`start_package`,`end_package`,`recruiterid`)VALUES('$title','$skill','$workexp','$qualifiaction','$location','$company','$description','$minsal','$maxsal','$recruiter_id')";
		if(mysqli_query($conn, $query)){
			SuccessMessage("Job Saved","Job has been Added Sucessfully","<a href='recruiterhomepage.php'>Goto Job information page</a>");
		}
		else{
			$error =  mysqli_error($conn);
			ErrorMessage("Error Occured",$error);
		}
	}
	
	if(isset($_POST['recruiterdeletebtn'])){
		$recdelete = $_POST['deletefield'];
		$query = "DELETE FROM tbljobmst WHERE jobid = '$recdelete'";
		if(mysqli_query($conn, $query)){
			SuccessMessage("Job deleted Successfully","the job has been deleted successfully","<a href='recruiterhomepage.php'>click here to go back to the job information page</a>");
		}
		else{
			$error = mysqli_error($conn);
			ErrorMessage("Error Occured",$error);
		}
	}
	
/*====================================================================*/	
	if(isset($_POST['recruiterdetailbtn'])){
	$editlabel = $_POST['editlabel'];		
		
	$sqlquery = "SELECT jobid,jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobid='$editlabel'";
	$result = mysqli_query($conn, $sqlquery);
	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			?>
			<br>
			<div class="container">
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
			<hr>
		<!-- -->
		</div >
		<!--<div class="job-search-buttons">	
			<div class="col-md-12">
				<form method="post" action="jobApplyVerify.php">
				<input type="hidden" name="hiddenjob" value="<?php echo $row['jobid'];?>">
				<button type="submit" name="applyJob" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Apply</button>
				<!--<button type="submit" name="saveJob" class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Save </button>
				</form>
			</div>	
	</div>-->
	<br>
</div>
<!--------------------------------------->
</div>			
			<?php
		}
	}	
}

include_once './Development/commonfiles/footer.php';
?>