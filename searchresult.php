<?php
//explaining the design here how to display the content of the data on the search result;
include_once 'index.php';
//echo "hello world";
?>
<?php
include_once './Development/commonfiles/connection.php'; 
//include_once './Development/commonfiles/Connectivity.php';

//defining teh variables...

$keyword = $_GET['srchkeyword'];
$location = $_GET['srchlocation'];
$salary = $_GET['srchsalary'];
$experience = $_GET['srchexperience'];


$sqlquery = "SELECT Keyword, Location FROM searchdetails WHERE keyword='$keyword' AND location='$location'";//,mysql_real_escape_string($keyword),mysql_real_escape_string($location));

$result = mysqli_query($conn,$sqlquery);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
	echo "id: ".$row["Keyword"]."<br>";
}
}else{
	echo "no results found";
}
?>
