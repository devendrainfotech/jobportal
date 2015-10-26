<?php
	include_once("header.php");
	include_once('../Development/commonfiles/Connectivity.php');
	
	if( count( $_REQUEST ) > 0 ){
		$query = "select * from countries";
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
	  <h2>Searched Countries Results</h2>
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
						<td>$d[0]</td>
						<td>$d[1]</td>
						<td><a href='EditCountry.php?keyword=$d[0]' class='glyphicon glyphicon-pencil'> Edit</a></td>
						<td><a href='DeleteCountry.php?keyword=$d[0]' class='glyphicon glyphicon-trash'> Delete</a></td>
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
