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
                            Recruiter <small>Overview</small>
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
												$query = "select count(*) as total from tblRecruitermst";
												$con = new Connectivity();
												$rows = $con->getData($query);		
												echo $rows[0][0][0];
											?>
										</div>
                                        <div>Total Recruiters</div>
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
												$query = "SELECT count(distinct jobid) FROM tbljobmst";
												$con = new Connectivity();
												$rows = $con->getData($query);		
												echo $rows[0][0][0];
											?>
										</div>
                                        <div>Applied Recruiters</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#AllRecruiterDetails">All Recruiter Details</a>
			</h3>
		</div>

		<div id="AllRecruiterDetails" class="panel-collapse collapse in">
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
		$query = "select recruiterid,username, firstname, middlename, lastname, companyemailid,isActive from tblrecruitermst";
		$con = new Connectivity();
		$rows = $con->getData($query);		
				if( sizeof($rows) > 0 ){
					foreach( $rows as $data ){
					foreach( $data as $d ){
							echo "
								<tr>
									<td>$d[1]</td>
									<td>$d[2]</td>
									<td>$d[3]</td>
									<td>$d[4]</td>
									<td>$d[5]</td>
									<td>
										<form action='BlockUser.php' Method='POST'>
										
										<input type='hidden' name='query' value='update tblrecruitermst set isActive= not isActive where recruiterid=$d[0]' />
																	
										<input type='hidden' name='redirectedPage' value='RecruiterSummary.php' />
																	
											
										<input class='". ($d[6] == 1 ? "btn btn-danger' value='Block'" : "btn btn-primary' value='Unblock'" ) . " type='submit'>
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
				<a data-toggle="collapse" data-parent="#accordion" href="#AppliedRecruiterDetails">Applied Recruiter Details</a>
			</h3>
		</div>

		<div id="AppliedRecruiterDetails" class="panel-collapse collapse in">
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
		$query = "select a.recruiterid,username, count(*) from tblrecruitermst a, tbljobmst j where a.recruiterid=j.recruiterid group by a.recruiterid";
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