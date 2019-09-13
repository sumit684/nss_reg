<?php
date_default_timezone_set('Asia/Calcutta');
function fetch_count($db,$sql){
	$result = mysqli_query($db,$sql);
	$row = mysqli_fetch_assoc($result);
	$count = $row['count(*)'];
	return $count;
}

$total = fetch_count($db,"SELECT count(*) FROM `volunteer`");
$boys = fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE gender ='Male'");
$girls = fetch_count($db,"SELECT count(*) FROM `volunteer` WHERE gender ='Female'");


$Form = array('last_date' => '12:00 PM September 15 2019','status' => 'ON','max'=>'200');
$last_date=strtotime($Form['last_date']);
$status = $Form['status'];

if($last_date>time()&&$status=='ON'&&$total<$Form['max']){
}else{
	header('Location:closed.php');
}
$boys_disabled="";
$girls_disabled="";
$disabled_msg="";
if($boys>150){
	$boys_disabled="disabled";
	$disabled_msg="Notice: Registration for boys has been Closed";
}
if($girls>100){
	$girls_disabled="disabled";
	$disabled_msg="Notice: Registration for girls has been Closed";
}
?>