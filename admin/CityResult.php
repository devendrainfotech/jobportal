<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) > 0 ){
		$query = "select c.cityid,c.name as city_name, c.stateid, s.name as state_name from tblcitymst c, tblstatemst s where c.name like '".$_REQUEST['txtCityName']."%' and c.stateid=s.stateid order by s.name ASC";
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
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Searched City Results</a>
			</h3>
		</div>

		<div id="collapseOne" class="panel-collapse collapse in">
			<div class="panel-body">

			<table class="table table-striped table-hover table-bordered" id="editable-sample">
				<thead>
				  <tr>
        <th>City</th>
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
						<td>$d[city_name]</td>
						<td>$d[state_name]</td>
						<td><a href='EditCity.php?cityid=$d[0]&city_name=$d[city_name]&stateid=$d[stateid]&state_name=$d[state_name]' class='btn btn-default'><span class='glyphicon glyphicon-edit'></span></a> </td>
						<td><a href='DeleteCity.php?cityid=$d[0]&city_name=$d[city_name]&stateid=$d[stateid]&state_name=$d[state_name]' class='btn btn-default'><span class='glyphicon glyphicon-trash'></span> </a></td>
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

<?php
	include_once("footer.php");
?>
