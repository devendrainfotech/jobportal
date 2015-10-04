<?php
    $recemailid = $_POST['recemailid'];
    $recpassword = $_POST['recpswd'];
    $recconfirm_password = $_POST['reccnfpswd'];
    $reccompanyname = $_POST['reccmpname'];
    $reccompanyadd = $_POST['reccmpadd'];
    $recstate = $_POST['reccmpstate'];
    $reccity = $_POST['reccmpcity'];
    $recmbnumber = $_POST['recmblnum'];
    //$reccondition = $_POST['reccnd'];
include './Development/commonfiles/connection.php';

function checking_registration($fun_user_name){
    include './Development/commonfiles/connection.php';
    $query = "SELECT username FROM tblloginmst WHERE username='$fun_user_name'";  
    $result = mysqli_query($conn,$query);
        if (mysqli_num_rows($result) > 0) {
                return false;
            }
            else{
	           //echo "no results found";
                return true;
            }
}
    if(checking_registration($recemailid) === false){
        echo "record already exist you have to select another username";
        exit;
    }
//echo $recpassword."<br>";
//echo $recconfirm_password."<br>";
    if($recpassword !== $recconfirm_password){
        echo "password not matched";
        exit;
    }
//echo $recemailid."<br>";
//echo $reccompanyname."<br>";
//echo $reccompanyadd."<br>";
//echo $recstate."<br>";
//echo $reccity."<br>";
//echo $recmbnumber."<br>";
//echo $reccondition."<br>";

$sqlquery = "INSERT INTO `tblloginmst`(`username`,`user_password`) VALUES ('$recemailid','$recpassword')";

if (mysqli_query($conn, $sqlquery)) {
    echo "<center><h1> You have Been Registered Sucessfully </h1> </center>";
    echo "<hr>";
    echo "<center><h3><a href ='http://www.jobportal.me.ht/'>Click here</a> to Login Yourself :)</h3></center>";
} else {
    echo "Error: " . $sqlquery . "<br>" . mysqli_error($conn);
}
/*
if($conn->query($sqlquery === TRUE)){
    echo "added sucessfully";
}
else{
    echo "error".$sqlquery." ".$conn->error; 
}*/
//$query = INSERT INTO tablename 1,2 values();
?>