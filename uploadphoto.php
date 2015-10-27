<?php
include_once 'userSession.php';
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
include_once './Development/commonfiles/message_dialogue_box.php';
?>
<title>User Photo Upload</title>
<?php
$upload_dir = "Design/Images/user/";
$upload_file = $upload_dir . basename($_FILES['filetoupload']['name']);
$imageFileType = pathinfo($upload_file,PATHINFO_EXTENSION);
$uploadok = 1;

if(isset($_POST['photosubmit'])){
	$check = getimagesize($_FILES['filetoupload']['tmp_name']);
	if($check !== FALSE){
		SuccessMessage("Image Upload Success",$check['mime'].".");
		$uploadok = 1;
	}else{
		ErrorMessage("Not an Image","the fileis not an image file");
		$uploadok = 0;
	}
}
//check exist
if(file_exists($upload_file)){
	ErrorMessage("File is already exist");
	$uploadok = 0;
}
// file size
if ($_FILES["filetoupload"]["size"] > 500000) {
    ErrorMessage("Your File is too Large");	
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    ErrorMessage("format not supported");	
    $uploadOk = 0;
}

if($uploadok == 0){
	ErrorMessage("Your file can't be upload");
}
else{
if(move_uploaded_file($_FILES['filetoupload']['tmp_name'],$upload_file)){
	SuccessMessage("file uploaded","redirecting you");
}else{
	ErrorMessage("file not uploded");
}
//echo $upload_file;
// which user to write the file
if(isset($_SESSION['login_user'])){
$sqlquery = "UPDATE `tbljobseekermst` SET `photopath` = '$upload_file' WHERE `jobseeker_id`='$login_id'";
if(mysqli_query($conn, $sqlquery)){
	?>
	<script>
		window.location ="user_profile.php";
	</script>
	<?php
}else{
	$error = mysqli_error($conn);
	ErrorMessage("Error meassage");
}
}else if(isset($_SESSION['login_recruiter'])){
	$sqlquery = "UPDATE `tblrecruitermst` SET `photopath` = '$upload_file' WHERE `recruiterid`='$recruiter_id'";
if(mysqli_query($conn, $sqlquery)){
	?>
	<script>
		window.location ="Recruiter_edit_profile.php";
	</script>
	<?php
}else{
	$error = mysqli_error($conn);
	ErrorMessage("Error meassage");
}	
}

}
//print_r($_FILES);
//$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
//checking image

?>