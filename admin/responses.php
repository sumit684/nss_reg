<?php 
function fetch_count($db,$sql){
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$count = $row['count(*)'];
	return $count;
}
// $sql = "SELECT count(*) FROM `volunteer`";
// $result = mysqli_query($db,$sql);
// $row = mysqli_fetch_assoc($result);
$total = fetch_count($db,"SELECT count(*) FROM `volunteer`");
$boys = fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE gender ='Male'");
$girls = fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE gender ='Female'");
$yr1 =  fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE class ='1st'");
$yr2 =  fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE class ='2nd'");
$yr3 =  fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE class ='3rd'");
$yr4 =  fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE class ='4th'");
?>