<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) > 0 ){
		$query = "select stateid,name from tblstatemst where name like '".$_REQUEST['txtStateName']."%'";
		$con = new Connectivity();
		$rows = $con->getData($query);		
	}
	else{
		echo("<script>location.href = 'GeneralSetting.php';</script>");
	}
?>
<link href="css/UserProfile.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>

<div class="col-lg-12">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Searched State Results</a>
			</h3>
		</div>

		<div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

			<table class="table table-striped table-hover table-bordered" id="editable-sample">
				<thead>
				  <tr>
					<th>State</th>
					<th>Edit</th>
					<th>Delete</th>
				  </tr>
				</thead>
				<tbody>
			<?php
				if( sizeof($rows) > 0 ){
					foreach( $rows as $data ){
						foreach( $data as $d ){
							echo "
								<tr>
									<td>$d[name]</td>
									<td><a href='EditState.php?stateid=$d[0]&name=$d[name]' class='btn btn-default'><span class='glyphicon glyphicon-edit'></span> </a></td>
									<td><a href='DeleteState.php?stateid=$d[0]' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span> </td>
								</tr>
								";
						}
					}
				}
				else{
					echo "No Result.<br/>";
				}
				?>
				</tbody>
			  </table>
			</div>
		</div>
	</div>
</div>

<?php
	include_once("footer.php");
?>