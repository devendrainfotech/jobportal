<?php
	include_once 'userSession.php'; // interactive user such as name and all user session for the verifying that user exist or not....
    include_once 'Development/commonfiles/general_function.php';
?>
<title>Recruiter Profile</title>
<?php
	include_once './Development/commonfiles/header.php';
?>

<head>
	<link rel="stylesheet" href="./Design/manual/css/userprofile.css" />
	<script type="text/javascript">
            $(function() {
            $( "#dialog-1" ).dialog({
               autoOpen: false, 
               height:'auto', 
               width:'auto',
               fluid:true,
               minWidth:200,
               maxWidth:400,
               modal:true,
               resizable:false      
            });
            $( "#change-image" ).click(function() {
               $( "#dialog-1" ).dialog( "open");
            });
         });
        </script>
</head>
	<?php
	$query="select `photopath` from tblrecruitermst where recruiterid = '$recruiter_id'";
	$image = "";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result)){
		$image = $row['photopath'];
	}
	if($image == ""){
		$image ="Design/Images/user/default.jpg";
	}
?>
<div class="container">
<div class="col-lg-12 col-sm-12">
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="<?php echo $image ?>">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img id="change-image" alt="" src="<?php echo $image ?>">
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $login_recruiter_session; ?></span>
        	<!--<span><a href="logout.php">LOG out</a></span>-->
        </div>
    </div>
 </div>	
   <!-- ======================== -->
    <!-- Jquery Dialog box Coding -->
    <!-- ======================== -->
 	<div id="dialog-1" class="shadow-effect-square-dialog row" title="Product Details">
            <div align="center"><h3>Upload new Photograph</h3></div><br/>
        <div class="col-sm-12">
            <form enctype="multipart/form-data" method="post" name="photoupload" action="uploadphoto.php">
            Select Image To upload:
            <input type="file" name="filetoupload" id="filetoupload"><br>   
            <button type="submit" name="photosubmit" value="uploadimage" class="btn btn-primary">Upload</button>
            </form>
        </div>
		</div>
</div>
