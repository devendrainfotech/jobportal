<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
	include_once 'usercookie.php';
    include_once 'Development/commonfiles/general_function.php';
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
	include_once 'user_profile_data_fetch.php';
    ?>