<?php
	include_once 'userSession.php'; // user session for the verifying that user exist or not....
?>

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
        	<span><a href="logout.php">LOG out</a></span>
        </div>
    </div>
 
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab">
            	<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Personal</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab">
            	<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                <div class="hidden-xs">Education</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab">
            	<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                <div class="hidden-xs">Experience</div>
            </button>
        </div>
		<div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab4" data-toggle="tab">
            	<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                <div class="hidden-xs">Project</div>
            </button>
        </div>
	</div>
</div>

   <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3>This is tab 1</h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
          <h3>This is tab 2</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>This is tab 3</h3>
        </div>
      	<div class="tab-pane fade in" id="tab4">
          <h3>This is tab 4</h3>
        </div>
      </div>
    </div>