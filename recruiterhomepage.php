<?php 
	include_once 'userSession.php';
	include_once './Development/commonfiles/header.php';
?>
<title>Recruiter Home Page</title>
<!-- <a href="logout.php">LOG OUT</a> -->
<br>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-md-offset-5">
			<form class="form-inline" method="post" action="JobPost.php">
			  <div class="form-group">
			    <input type="hidden" name="recruiterPostField"/>
			    </div>
			  <button type="submit" name="recruiterPostButton" class="btn btn-primary btn-lg">Add a new Job</button>
			</form>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"href="#collapseOne">
                            Posted Job Information</a>
                        </h3>
                    </div>
			            <div id="collapseOne" class="panel-collapse collapse in">
			            <div class="panel-body">
			            <div class="col-lg-12">
			            <table class="table table-responsive table-striped table-hover table-bordered" style="width: inherit" id="editable-sample">
			            <!--<thead></thead>-->
        				
        				<tr><th>Sr</th><th>Title</th><th>Location</th><th>Company</th><th>Details</th><th>Edit</th><th>Delete</th></tr>
						<?php
        				//echo $recruiter_id;
        				$query = "SELECT jobid,jobdesignation,locationofhiring,companyname FROM `tbljobmst` WHERE recruiterid = '$recruiter_id'";
        				$result = mysqli_query($conn,$query);
        				$i = 1;
        				if (mysqli_num_rows($result) > 0){
						while($row = mysqli_fetch_assoc($result)){
						
        				?>
						<tr><td><?php echo $i++;?></td><td><?php echo $row['jobdesignation']?></td><td><?php echo $row['locationofhiring']?></td><td><?php echo $row['companyname']?></td>
						<td style="text-align: center;">
								<form method="post" action="jobpostverify.php">
								<input type="hidden" name="editlabel" value="<?php echo $row['jobid']?>"/>
        						<button type="submit" name="recruiterdetailbtn" class="btn btn-primary btn-sm"aria-label="Left Align" style="color:white;">
        						<span class="glyphicon glyphicon-list-alt"></span>
        						</button>
        						</form>
        						</td>
						<td style="text-align: center;">
        						<form method="post" action="jobpostedit.php">
        						<input type="hidden"  name="editbtnlabel" value="<?php echo $row['jobid']?>" />
        						<button type="submit" name="recruitereditbtn" class="btn btn-warning btn-sm" aria-label="Left Align" style="color:white;">
        						<span class="glyphicon glyphicon-pencil"></span>
        						</button>
        						</form>
        						</td>
						<td style="text-align: center;">
								<form method="post" action="jobpostverify.php">
        						<input type="hidden" name="deletefield" value="<?php echo $row['jobid']?>">
        						<button type="submit" name="recruiterdeletebtn" class="btn btn-danger btn-sm" aria-label="Left Align" style="color:white;">
        						<span class="glyphicon glyphicon-trash"></span>
        						</button>
        						</form>
        						</td>
						</tr>
						<?php
        				}
						}
        				?>	
						</table>
        				
        				</div>
        				</div>
        				</div>
        				<br>
        				</div>
        				</div>
        				
	</div>
</div>
<br>
<br>
<br>
<?php 
	include_once './Development/commonfiles/footer.php';
?>