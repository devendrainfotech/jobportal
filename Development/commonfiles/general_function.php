<?php 
include_once './Development/commonfiles/connection.php';
include_once 'userSession.php';
include_once 'usercookie.php';  

function jobseekerinfo($conn,$field)
{
$id=$_SESSION['Userid'];
$query = "SELECT * FROM `tbljobseekermst` WHERE `jobseeker_id` = '$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);
    return $row[$field];

}
function getlist($conn,$id)
{
    $query1= "SELECT * FROM `tbl_list_mst` WHERE `autoid` = '$id'";
    $result1 = mysqli_query($conn, $query1);
    $row1= mysqli_fetch_assoc($result1);  
    return $row1['Value'];
}

function getContactinfo($conn,$contactid,$field)
{
    $query1= "SELECT * FROM `tblcontactmst` WHERE `contact_id` = '$contactid'";
    $result1 = mysqli_query($conn, $query1);
    $row1= mysqli_fetch_assoc($result1);  
    return $row1[$field];
}
function getCityinfo($conn,$cityid)
{
    $query1= "SELECT * FROM `tblcitymst` WHERE `cityid` = '$cityid'";
    $result1 = mysqli_query($conn, $query1);
    $row1= mysqli_fetch_assoc($result1);  
    return $row1['name'];
}

function binddrodown_list($conn,$type)
{
    $query1= "SELECT * FROM `tbl_list_mst` WHERE `type`= '$type'";
    $result1 = mysqli_query($conn, $query1);
    echo "<select name='ddlDepartment' class='form-control'  required=''>";
    while($re=mysql_fetch_array($result))
            {
                echo "<option value='".$re['autoid']."'> ".$re['Value']."</option>";
            }
            echo"<select>";
            
}

?>