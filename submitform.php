<?php
include('config.php');
session_start();
if(!isset($_SESSION['email'])){
	header('Location: register.php');
}
function regno($gender,$db){
	$regno=0;
	if($gender == 'Male'){
		$regno = 1001;
	}elseif ($gender == 'Female') {
		$regno = 2001;
	}
	$sql = "SELECT count(*) FROM `volunteer` WHERE `gender`= '$gender'";
	$result = mysqli_query($db, $sql);
	$result_value = mysqli_fetch_assoc($result);
	$add_it = $result_value['count(*)'];
	$regno += $add_it;

	return $regno;
}


$value1='default';
$value2=$_POST['email'];
$value3=$_POST['pass'];

$value4=regno($_POST['gender'],$db);

$value5=strtoupper($_POST['name']);
$value6=$_POST['gender'];
$value7=$_POST['category'];
$value8=$_POST['dob'];
$value9=$_POST['bloodgrp'];
$value10=$_POST['class'];
$value11=$_POST['branch'];
$value12=$_POST['whatsappno'];
$value13=$_POST['altno'];
$value14=strtoupper($_POST['fathername']);
$value15=strtoupper($_POST['fatheroccupation']);
$value16=strtoupper($_POST['mothername']);
$value17=$_POST['familyincome'];
$value18=strtoupper($_POST['caddr']);
$value19=strtoupper($_POST['paddr']);
$value20=$_POST['is_nssV'];
$value21=$_POST['nssYear'];
$value22=strtoupper($_POST['t1']);
$value23=$_POST['t1a'];
$value24=$_POST['t1b'];
$value25=strtoupper($_POST['t2']);
$value26=$_POST['t2a'];
$value27=$_POST['t2b'];
$value28=strtoupper($_POST['t3']);
$value29=$_POST['t3a'];
$value30=$_POST['t3b'];
$value31=strtoupper($_POST['t4']);
$value32=$_POST['t4a'];
$value33=$_POST['t4b'];
$value34=strtoupper($_POST['t5']);
$value35=$_POST['t5a'];
$value36=$_POST['t5b'];
$value37=strtoupper($_POST['t6']);
$value38=$_POST['t6a'];
$value39=$_POST['t6b'];
$value40=$_POST['hobbies'];
date_default_timezone_set('Asia/Calcutta');
$t = microtime(true);
$micro = sprintf("%06d",($t - floor($t)) * 1000000);
$d = new DateTime( date('Y-m-d H:i:s.'.$micro, $t) );
$value41=date_format($d,'Y-m-d H:i:s.u');

if(isset($_POST['interest'])){
$myarr =$_POST['interest'];
$interest='';
foreach ($myarr as $key => $value) {
	// echo $value;
	$interest.=$value;
	if($key!=count($myarr)-1){
		$interest.=", ";
	}
}	
}else{
	$interest = NULL;
}

$value42=$interest;
$sql = "INSERT INTO `volunteer`(`sno`, `email`, `pass`, `reg_no`, `name`, `gender`, `category`, `dob`, `bloodgrp`, `class`, `branch`, `whatsappno`, `altno`, `fathername`, `fatheroccupation`, `mothername`, `familyincome`, `caddr`, `paddr`, `is_nssV`, `nssYear`, `t1`, `t1a`, `t1b`, `t2`, `t2a`, `t2b`, `t3`, `t3a`, `t3b`, `t4`, `t4a`, `t4b`, `t5`, `t5a`, `t5b`, `t6`, `t6a`, `t6b`, `hobbies`, `timestamp`,`interest`) VALUES ($value1,'$value2','$value3',$value4,'$value5','$value6','$value7','$value8','$value9','$value10','$value11','$value12','$value13','$value14','$value15','$value16',$value17,'$value18','$value19','$value20',$value21,'$value22','$value23','$value24','$value25','$value26','$value27','$value28','$value29','$value30','$value31','$value32','$value33','$value34','$value35','$value36','$value37','$value38','$value39','$value40','$value41','$value42')";

if (mysqli_query($db, $sql)) {
	// $path_parts = pathinfo($_FILES["fileToUpload"]["name"]);
	// $extension = $path_parts['extension'];
	// $name=$value4.".".$extension;
	// $target_dir = "uploads/volunteer_sign/";
	// $target_file = $target_dir.$name;
	// if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	// 	echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	// } else {
	// 	echo "Sorry, there was an error uploading your file.";
	// }
	$_SESSION['email']=$value2;
	header("Location: form_pdf.php");
} else {
	if(mysqli_errno($db) == 1062){
		echo("<script>alert('You have already Registered');</script>");
		echo("<script>window.location = 'login.php';</script>");
	}else{
		// echo "Error: " . $sql . "<br>" . mysqli_error($db);
		echo "<h1 style='color:red;'> Some Error has occured. Your FORM was not submitted.<br> TRY AGAIN!!!</h1><a href='register.php'><button>Registration Page</button></a>";
	}
}


?>