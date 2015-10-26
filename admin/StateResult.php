<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) > 0 ){
		$query = "select stateid,name, 'India' from tblstatemst where name like '".$_REQUEST['txtStateName']."%'";
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
	  <h2>Searched State Results</h2>
	<hr/>

	<table class="table table-hover mytable">
    <thead>
      <tr>
        <th>City Names</th>
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
						<td>$d[2]</td>
						<td><a href='EditState.php?stateid=$d[0]&name=$d[name]' class='glyphicon glyphicon-pencil'> Edit</a></td>
						<td><a href='DeleteState.php?stateid=$d[0]' class='glyphicon glyphicon-trash'> Delete</a></td>
					</tr>
					";
			}
		}
	}
	else{
		echo "Invalid  !!!!!!!<br/>";
	}
	?>
    </tbody>
  </table>
</div>

<?php
	include_once("footer.php");
?>