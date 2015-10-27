<?php
	include_once("header.php");
	include('../Development/commonfiles/Connectivity.php');
	
	if( isset($_REQUEST['msg'] )){
	if( $_REQUEST['msg'] == "success"){
		echo '<script>alert("Changes have been saved !!");</script>';
	}}	
?>
<div id="page-wrapper">

	<div class="container-fluid">

		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					Jobseeker <small>Overview</small>
				</h1>
				<ol class="breadcrumb">
					<li class="active">
						<i class="fa fa-dashboard"></i> Dashboard
					</li>
				</ol>
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-comments fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge">	
									<?php
										$query = "select count(*) as total from tbljobseekermst";
										$con = new Connectivity();
										$rows = $con->getData($query);		
										echo $rows[0][0][0];
									?>
								</div>
								<div>Total Jobseekers</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="panel panel-green">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-3">
								<i class="fa fa-tasks fa-5x"></i>
							</div>
							<div class="col-xs-9 text-right">
								<div class="huge">	
									<?php
										$query = "SELECT count(distinct jobseekerid) FROM userjobapplication";
										$con = new Connectivity();
										$rows = $con->getData($query);		
										echo $rows[0][0][0];
									?>
								</div>
								<div>Applied Jobseekers</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
							<a data-toggle="collapse" data-parent="#accordion" href="#AllJobSeekerDetails">All JobSeeker Details</a>
						</h3>
					</div>

					<div id="AllJobSeekerDetails" class="panel-collapse collapse in">
						<div class="panel-body">

						<table class="table table-striped table-hover table-bordered" id="editable-sample">
							<thead>
							  <tr>
								<th>id</th>
								<th>User Name</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Mobile No</th>
								<th>Block</th>
							  </tr>
							</thead>
							<tbody>
							<?php
								$query = "select jobseeker_id,username, firstname, lastname, Mobileno,isActive from tbljobseekermst";
								$con = new Connectivity();
								$rows = $con->getData($query);		
										if( sizeof($rows) > 0 ){
											foreach( $rows as $data ){
												foreach( $data as $d ){
													echo "
														<tr>
															<td>$d[0]</td>
															<td>$d[1]</td>
															<td>$d[2]</td>
															<td>$d[3]</td>
															<td>$d[4]</td>
															<td>
																<form action='BlockUser.php' Method='POST'>
																
																	<input type='hidden' name='query' value='update tbljobseekermst set isActive= not isActive where jobseeker_id=$d[0]' />
																	
																	<input type='hidden' name='redirectedPage' value='JobSeekerSummary.php' />
																	
																	<input class='". ($d[5] == 1 ? "btn btn-danger' value='Block'" : "btn btn-primary' value='Unblock'" ) . " type='submit'>
																	
																</form>
															</td>
														</tr>
														";
												}
											}
										}
										else{
											echo "<br/>No Result<br/>";
										}
										?>
										</tbody>
									  </table>
									</div>
								</div>
							</div>
						</div>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#AppliedJobSeekerDetails">Applied JobSeeker Details</a>
			</h3>
		</div>

		<div id="AppliedJobSeekerDetails" class="panel-collapse collapse in">
			<div class="panel-body">

			<table class="table table-striped table-hover table-bordered" id="editable-sample">
				<thead>
				  <tr>
					<th>User Name</th>
					<th>Count</th>
				  </tr>
				</thead>
				<tbody>
			<?php
		$query = "select jobseekerid,username, count(*) from userjobapplication a, tbljobseekermst j where a.jobseekerid=j.jobseeker_id group by jobseekerid";
		$con = new Connectivity();
		$rows = $con->getData($query);		
				if( sizeof($rows) > 0 ){
					foreach( $rows as $data ){
						foreach( $data as $d ){
							echo "
								<tr>
									<td>$d[1]</td>
									<td>$d[2]</td>
								</tr>
								";
						}
					}
				}
				else{
					echo "<br/>No Result<br/>";
				}
				?>
				</tbody>
			  </table>
			</div>
		</div>
	</div>
</div>


        </div>
<?php
	include_once("footer.php");
?>