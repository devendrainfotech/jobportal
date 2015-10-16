<?php
include_once './Development/commonfiles/header.php';
include_once './Development/commonfiles/searchbar.php';
?>
<?php
include_once './Development/commonfiles/connection.php'; 

$keyword = $_GET['srchkeyword'];
$location = $_GET['srchlocation'];
$salary = $_GET['srchsalary'];
$experience = $_GET['srchexperience'];


$sqlquery = "SELECT Keyword, name_en FROM `countries` WHERE keyword='$keyword' AND name_en='$location'";//,mysql_real_escape_string($keyword),mysql_real_escape_string($location));

$result = mysqli_query($conn,$sqlquery);

if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)){
	echo "id: ".$row["Keyword"]."<br>";
}
}else{
	echo "no results found";
}
?>
<?php
include_once './Development/commonfiles/footer.php';
?>