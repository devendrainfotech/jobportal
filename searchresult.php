<?php
include_once './usersession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>
<?php
include_once './Development/commonfiles/connection.php'; 
if(isset($_GET['searchjobs'])){
$keyword = $_GET['srchkeyword'];
$location = $_GET['srchlocation'];
$salary = $_GET['srchsalary'];
$experience = $_GET['srchexperience'];

//echo $keyword ."<br>";
//echo $location ."<br>";
//echo $salary ."<br>";
//echo $experience ."<br>";

if($location == null && $salary === "null" && $experience === "null"){
$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobskill='$keyword'";// AND name_en='$location'";//,mysql_real_escape_string($keyword),mysql_real_escape_string($location));
}
else if($keyword == null && $salary =="null" && $experience == "null"){
	//echo "coming here";
	$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE locationofhiring='$location'";// AND name_en='$location'";//,mysql_real_escape_string($keyword),mysql_real_escape_string($location));
}
else if($salary === "null" && $experience == "null"){
$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobskill='$keyword' AND locationofhiring='$location'";
}
else if($keyword == null && $location == null){
	echo "please Insert the Either Location OR keyskill";
}
else if($experience === "null"){
	$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobskill='$keyword' AND locationofhiring='$location' AND start_package='$salary'";
}
else if($salary === "null"){
	//	echo "where salary is null";
	$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobskill='$keyword' AND locationofhiring='$location' AND workexp = '$experience'";	
}
else{
	$sqlquery = "SELECT jobdesignation,start_package,end_package,jobdescription,jobskill,workexp,qualification,locationofhiring,companyname FROM `tbljobmst` WHERE jobskill='$keyword' AND locationofhiring='$location' AND workexp = '$experience' AND start_package='$salary'";
	//echo"please enter the search query";
}

if(!isset($sqlquery)){
	echo "PLEASE ENTER AT LEAST ONE DETAILS";
}
else{
$result = mysqli_query($conn,$sqlquery);
if (mysqli_num_rows($result) > 0) {
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
		</div >
		<!-- -->
		<div class="job-search-buttons">	
			<div class="col-md-12">
				<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Apply</button>
				<button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-star"></span> Save </button>
			</div>	
	</div>
</div>
<!--------------------------------------->
</div>
	<?php
}
}else{
	echo "no results found";
}
}
}
?>
<?php
include_once './Development/commonfiles/footer.php';
?>