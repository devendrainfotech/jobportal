<?php
if(isset($_POST['recruiterRegisterButton'])){
    $recruiteremailid = $_POST['recruiteremailid'];
    $recruiterpassword = $_POST['recruiterpswd'];
    $recruiterconfirm_password = $_POST['recruitercnfpswd'];
    $recruitercompanyname = $_POST['recruitercmpname'];
    $recruitercompanyadd = $_POST['recruitercmpadd'];
    $recruiterstate = $_POST['recruitercmpstate'];
    $recruitercity = $_POST['recruitercmpcity'];
    $recruitermbnumber = $_POST['recruitermblnum'];
    //$reccondition = $_POST['reccnd'];
include './Development/commonfiles/connection.php';

function registerValidator($username,$pass,$cnfpass,$mobile,$cmp,$address){
		include './Development/commonfiles/connection.php';
		$query = "SELECT username FROM recruiterlogin WHERE username='$username'";
		$result = mysqli_query($conn,$query);		
		if (mysqli_num_rows($result) > 0) {
            //return FALSE;
				echo "username already exist please choose another one";
				exit;				
            }else if($pass !== $cnfpass){
			//return FALSE;
				echo "password not matched !!!";
				exit;
			}
			else if($pass < 8){
			echo "password must be 8 digit long";
				exit;
			}
			else if(strlen($mobile) != 10){
			//return FALSE;
				echo "mobile number must be 10 length digit";
				exit;
			}elseif (strpos($username, "@") === FALSE) {
			//return FALSE;
				echo "invalid email address";
				exit;
			}
			else if(empty($cmp)){
				echo "company name is empty";
				exit;
			}
			else if(strlen($address) <= 10){
				echo "enter the full address";
				exit;
			}else{
				return TRUE;
			}
		}
registerValidator($recruiteremailid, $recruiterpassword, $recruiterconfirm_password, $recruitermbnumber,$recruitercompanyname,$recruitercompanyadd);

$sqlquery = "INSERT INTO `recruiterlogin`(`username`,`password`,`company`,`companyaddress`,`state`,`city`,`mobilenumber`) VALUES ('$recruiteremailid','$recruiterpassword','$recruitercompanyname','$recruitercompanyadd','$recruiterstate','$recruitercity','$recruitermbnumber')";

if (mysqli_query($conn, $sqlquery)) {
    echo "<center><h1> You recruiter have Been Registered Sucessfully </h1> </center>";
    echo "<hr>";
    echo "<center><h3><a href ='http://www.jobportal.me.ht/'>Click here</a> to Login Yourself :)</h3></center>";
} else {
    echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
}
/*
 * 
if($conn->query($sqlquery === TRUE)){
    echo "added sucessfully";
}
else{
    echo "error".$sqlquery." ".$conn->error; 
}*/
//$query = INSERT INTO tablename 1,2 values();
}
?>