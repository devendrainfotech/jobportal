<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once 'Development/commonfiles/general_function.php';
?>
<title>Manage Jobs</title>
<?php
	include_once './Development/commonfiles/header.php';
?>
<head>
	<link rel="stylesheet" href="./Design/manual/css/userprofile.css" />
</head>
<script>
$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
<div class="container">
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="Design/Images/dev.jpg">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="" src="Design/Images/dev.jpg">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $login_session; ?></span>
        	<!--<span><a href="logout.php">LOG out</a></span>-->
        </div>
    </div>
 </div>	
 
 <!---------------------------------->
   <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                <div class="hidden-xs">Applied Jobs</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Saved Jobs</div>
            </button>
        </div>
	</div>
<!---------------------------------- ---------------->
  
  <div class="well">
      <div class="tab-content">
        
        <div class="tab-pane fade in active" id="tab1">  
            <div class="panel-group" id="accordion">
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"href="#collapseOne">
                            Applied Jobs Information</a>
                        </h3>
                    </div>
			            <div id="collapseOne" class="panel-collapse collapse in">
			            <div class="panel-body">
			            <div class="col-lg-12">
			            <table class="table table-responsive table-striped table-hover table-bordered" style="width: inherit" id="editable-sample">
			            <!--<thead></thead>-->
        				<tr><th>Sr.</th><th>Title</th><th>Company</th><th>Location</th><th>skills</th><th>info</th><th>Delete</th></tr>
        				<?php 
        				$query = "SELECT appid,jobdesignation,jobskill,locationofhiring,company FROM `userjobapplication` WHERE jobseekerid = '$login_id' AND AScon = '1'";
						$result = mysqli_query($conn, $query);
						$i=1;
        				while($row = mysqli_fetch_assoc($result)){
        					?>
        					<tr>
        					<td><?php echo $i++?></td><td><?php echo $row['jobdesignation'];?></td><td><?php echo $row['company'];?></td><td><?php echo $row['locationofhiring'];?></td><td><?php echo $row['jobskill'];?></td>		
        					<form method="post" action="manageJobVerifyBtnAction.php">
        					<input type="hidden" name="savetoapplyfield" value="<?php echo $row['appid'];?>" />
        					<td style="text-align: center;">
        						<button type="submit" name="allinformationbutton" class="btn btn-sm" aria-label="Left Align" style="color:blue;">
        						<span class="glyphicon glyphicon-list-alt"></span>
        						</button>
        						</td>	
        					<td style="text-align: center;">
        						<button type="submit" name="deletebutton" class="btn btn-sm" aria-label="Left Align" style="color:red;">
        						<span class="glyphicon glyphicon-trash"></span>
        						</button>
        						</td>		
        					</form>
        					</tr>
        					<?php
        				}
        				?>
                    	
               			</tbody>
						</table>                                  
                    </div>                
                </div>  
            </div>
            </div>
        </div>        
    </div>
                
        <div class="tab-pane fade in" id="tab2">
        	<div class="panel-group" id="accordion">
 			<div class="panel panel-default">
 			<div class="panel-heading">
                        <h3 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion"href="#collapseOne">
                            Saved Jobs Information</a>
                        </h3>
            </div>
              <div id="collapseOne" class="panel-collapse collapse in">
			            <div class="panel-body">                                  
                    <div class="col-lg-12">
			            <table class="table table-responsive table-striped table-hover table-bordered" style="width: inherit" id="editable-sample">
			            <!--<thead></thead>-->
        				<tr><th>Sr.</th><th>Title</th><th>Company</th><th>Location</th><th>skills</th><th>Apply</th><th>info</th><th>Delete</th></tr>
        				<?php 
        				$query = "SELECT appid,jobdesignation,jobskill,locationofhiring,company FROM `userjobapplication` WHERE jobseekerid = '$login_id' AND AScon = '0'";
						$result = mysqli_query($conn, $query);
						$i=1;
        				while($row = mysqli_fetch_assoc($result)){
        					?>
        					<tr>
        					<td><?php echo $i++?></td><td><?php echo $row['jobdesignation'];?></td><td><?php echo $row['company'];?></td><td><?php echo $row['locationofhiring'];?></td><td><?php echo $row['jobskill'];?></td>
							<form method="post" action="manageJobVerifyBtnAction.php">
        					<input type="hidden" name="savetoapplyfield" value="<?php echo $row['appid'];?>" />
        					<td style="text-align: center;">
        						<button type="submit" name="savetoapplybutton" class="btn btn-sm" aria-label="Left Align" style="color:green;">
        						<span class="glyphicon glyphicon-ok"></span>
        						</button>
        					</td>
        					<td style="text-align: center;">
        						<button type="submit" name="allinformationbutton" class="btn btn-sm" aria-label="Left Align" style="color:blue;">
        						<span class="glyphicon glyphicon-list-alt"></span>
        						</button>
        						</td>	
        					<td style="text-align: center;">
        						<button type="submit" name="deletebutton" class="btn btn-sm" aria-label="Left Align" style="color:red;">
        						<span class="glyphicon glyphicon-trash"></span>
        						</button>
        						</td>		
        					</form>
        					</tr>
        					<?php
        				}
        				?>
               			</tbody>
						</table>                                  
                    </div>
                    </div>                
              </div>
        </div>
        </div>
        </div>    
        </div>
      </div>
    </div>
    <!--<?php
    $var = $_COOKIE['auth_username'];
	echo $var;
	echo "signed up";
    ?>-->
    <?php
    include_once './Development/commonfiles/footer.php';
    ?>