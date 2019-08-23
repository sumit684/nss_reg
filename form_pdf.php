<?php
session_start();
clearstatcache();
require_once('config.php');
$email=$_GET['email'];
$sql = "SELECT * FROM volunteer WHERE email = '$email'";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_assoc($result);

// if(!isset($_SESSION['name'])){
// header("Location:new_reg.php");}
// if(isset($row['submit'])){

$_SESSION['name']=strtoupper($row['name']);
$_SESSION['gender']=$row['gender'];
$_SESSION['category']=$row['category'];
$_SESSION['dob']=$row['dob'];
$_SESSION['bloodgrp']=$row['bloodgrp'];
$_SESSION['class']=$row['class'];
$_SESSION['branch']=$row['branch'];
$_SESSION['whatsappno']=$row['whatsappno'];
$_SESSION['altno']=$row['altno'];
$_SESSION['fathername']=strtoupper($row['fathername']);
$_SESSION['fatheroccupation']=strtoupper($row['fatheroccupation']);
$_SESSION['mothername']=strtoupper($row['mothername']);
$_SESSION['familyincome']=$row['familyincome'];
$_SESSION['caddr']=strtoupper($row['caddr']);
$_SESSION['paddr']=strtoupper($row['paddr']);
$_SESSION['is_nssV']=$row['is_nssV'];
$_SESSION['nssYear']=$row['nssYear'];
$_SESSION['t1']=$row['t1'];
$_SESSION['t1a']=$row['t1a'];
$_SESSION['t1b']=$row['t1b'];
$_SESSION['t2']=$row['t2'];
$_SESSION['t2a']=$row['t2a'];
$_SESSION['t2b']=$row['t2b'];
$_SESSION['t3']=$row['t3'];
$_SESSION['t3a']=$row['t3a'];
$_SESSION['t3b']=$row['t3b'];
$_SESSION['t4']=$row['t4'];
$_SESSION['t4a']=$row['t4a'];
$_SESSION['t4b']=$row['t4b'];
$_SESSION['t5']=$row['t5'];
$_SESSION['t5a']=$row['t5a'];
$_SESSION['t5b']=$row['t5b'];
$_SESSION['t6']=$row['t6'];
$_SESSION['t6a']=$row['t6a'];
$_SESSION['t6b']=$row['t6b'];
$_SESSION['sign']=$row['sign'];
?>
<!DOCTYPE html>

<html>
<head>
	
	
	<title>NSS Registration 2019-20_<?php echo $_SESSION['name'];?>_<?php echo date("d-m-y");?></title>
	<link rel="icon" type="image/jpg" href="nsslogo.png">
	<!-- <meta name="google" content="notranslate"> -->
	<meta charset="utf-8">

	<?php include 'include/link.html';?>
	<style type="text/css">
		li{
			margin-left: 20px;
			padding-left: 20px;
			margin-top:6px;
		}
		thead tr{
			font-weight: 700;
		}
		.container{
			padding: 5px;
		}
		
		.data{
			font-size: 18px;
			font-family: serif;
			border-bottom: 1px solid black;"
		}
		
	</style>
	<script>
		function hideme()
		{
      document.getElementById('mybtn').style.display ='none'; //first hide the button
      setTimeout(function(){ //using setTimeout function
      document.getElementById('mybtn').style.display ='block'; //displaying the button again after 1000ms or 1 seconds
  }
  ,1000); 
  }
</script>
</head>
<!-- <body oncontextmenu="return false" onselectstart="return false" ondragstart="return false"> -->
	<body>
		<div class="container" style="border: 2px solid black; margin-top:20px; margin-bottom: 10px;" >
			<p align="center">
				<img style="height:85px;"src="res/images/nsslogo.png"/><br>

				<span style="font-size:22px;">राष्ट्रीय सेवा योजना<br/>
					<b id="a">देवी अहिल्या विश्वविद्यालय, इंदौर</b></span>
				</p>
				<p align="center">
					<b>महाविद्यालय/विद्यालय का नाम :- <i>&nbsp;&nbsp;अभियांत्रिकी एवं प्रौद्योगिकी संस्थान (आई. ई. टी.) देवीअहिल्या विश्वविद्यालय, इंदौर, मध्यप्रदेश </i></b>
				</p>
				<p align="center" style="font-size: 20px; font-weight: 700;">
					राष्ट्रीय सेवा योजना में पंजीयन हेतु आवेदन-पत्र 
				</p>
				<ol>
					<li>
						<div class="row">
							<div class="col-md-3" >
								<b>छात्र/छात्रा  का नाम :- </b>
							</div>

							<div class="col-md-5 data">
								<?php echo $_SESSION['name']?>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-3" >
								<b>पिता का नाम :- </b>
							</div>

							<div class="col-md-5 data">
								<?php echo $_SESSION['fathername']?>
							</div>
						</div>
					</li>

					<li>
						<div class="row">
							<div class="col-md-3">
								<b>पिता का व्यवसाय :- </b>
							</div>
							<div class="col-md-4 data">
								<?php echo $_SESSION['fatheroccupation']?>
							</div>

							<div class="col-md-2">
								<b>वार्षिक आय :- </b>	
							</div>
							<div class="col-md-2 data">
								<?php echo $_SESSION['familyincome']?> &nbsp;रु 
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-1">
								<b>जाति:- </b>
							</div>
							<div class="col-md-2 data">
								<?php switch($_SESSION['category']){
									case 'GEN': 
									echo 'सामान्य';
									break;
									case 'OBC':
									echo 'अन्य पिछड़ा वर्ग';
									break;
									case 'SC':
									echo 'अनुसूचित जाति';
									break;
									case 'ST':
									echo 'अनुसूचित जनजाति ';
									break;
									case 'MIN':
									echo 'अल्संख्यक';
									break;
									default: 
									echo '';
								}
								?>  
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-2">
								<b>जन्म तिथि :-</b> 
							</div>
							<div class="col-md-2 data">
								<?php
								$dob=date_create($_SESSION['dob']);
								echo date_format($dob,"d/m/Y");?>
							</div>
							<div class="col-md-1">
								<b>आयु :</b> 	
							</div>
							<div class="col-md-2 data">
								<?php 	
								echo date("Y")-date_format($dob,"Y"); ?>
								वर्ष 
							</div>
							<div class="col-md-2">
								<b>रक्त समूह :-</b> 
							</div>
							<div class="col-md-2 data">
								<?php echo $_SESSION['bloodgrp']?> 
							</div>

						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-1">
								<b>कक्षा : </b>
							</div>
							<div class="col-md-2 data">
								B.E. <?php echo $_SESSION['class'];?> Year 
							</div>
							<div class="col-md-2">
								<b>अनुभाग :-</b>
							</div>
							<div class="col-md-4 data"> 
								<?php 
								switch ($_SESSION['branch']) {
									case 'CS-A':
									echo "Computer Engg - 'A'";
									break;
									case 'CS-B':
									echo "Computer Engg - 'B'";
									break;
									case 'IT-A':
									echo "Information Technology Engg - 'A'";
									break;
									case 'IT-B':
									echo "Information Technology Engg - 'B'";
									break;
									case 'E&TC-A':
									echo "Elec. & Telecomm. Engg - 'A'";
									break;
									case 'E&TC-B':
									echo "Elec. & Telecomm. Engg - 'B'";
									break;
									case 'E&I':
									echo "Elec. & Inst. Engg";
									break;
									case 'MECH':
									echo "Mechanical Engg";
									break;
									case 'Civil':
									echo "Civil Engg";
									break;
									default:
									echo "";
									break;
								}?>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-2">
								<b>वर्त्तमान पता :-</b> 
							</div>
							<div class="col-md-9 data">
								<?php echo $_SESSION['caddr'];?>
							</div>	
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-2">
								<b>फ़ोन नं. :-</b>  
							</div>
							<div class="col-md-3 data">
								+91 <?php echo $_SESSION['whatsappno'];?>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-2">
								<b>स्थायी पता :- </b>
							</div>
							<div class="col-md-9 data">
								<?php echo $_SESSION['paddr']?>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-md-6">
								<b>एन.एस.एस./ एन.सी.सी. में से किसी एक के सदस्य हैं:-</b>
							
								<?php switch ($_SESSION['is_nssV']) {
									case 'Yes':
									echo 'हाँ';
									break;
									case 'No':
									echo 'नहीं';
									break;
									default:
									echo '';
									break;
								};?>
							</div>
							<?php if($_SESSION['is_nssV']=='Yes'){
								?><div class="col-md-6">
									<b>किस वर्ष से:- </b>
									<span class="data">
										<?php echo $_SESSION['nssYear'];?>
									</span>
									से
								</div>
							<?php }?>
						</div>
					</li>
					<li>
						<b>गतिविधियां जिनमें रूचि हो :-</b>
						<table class="table table-bordered ">
							<thead>
								<tr>
									<td>क्रमांक</td>
									<td>रूचि की गतिविधियां </td>
									<td>गतिविधि की जानकारी </td>
									<td>भाग लिया है या नहीं </td>
									<td>नेतृत्व/भागीदारी भागीदारी की इच्छा </td>
								</thead>
								<tbody>
									<tr>
										<td>1.</td>
										<td>क्रीडा एवं खेलकद (नाम दें)</td>
										<td><?php echo $_SESSION['t1']?></td>
										<td><?php echo $_SESSION['t1a']?></td>
										<td><?php echo $_SESSION['t1b']?></td>
									</tr>
									<tr>
										<td>2.</td>
										<td>अध्ययन-यात्रा</td>
										<td><?php echo $_SESSION['t2']?></td>
										<td><?php echo $_SESSION['t2a']?></td>
										<td><?php echo $_SESSION['t2b']?></td>
									</tr>
									<tr>
										<td>3.</td>
										<td>शिल्प कला</td>
										<td><?php echo $_SESSION['t3']?></td>
										<td><?php echo $_SESSION['t3a']?></td>
										<td><?php echo $_SESSION['t3b']?></td>
									</tr>
									<tr>
										<td>4.</td>
										<td>संगीत/गायन</td>
										<td><?php echo $_SESSION['t4']?></td>
										<td><?php echo $_SESSION['t4a']?></td>
										<td><?php echo $_SESSION['t4b']?></td>
									</tr>
									<tr>
										<td>5.</td>
										<td>नृत्य/नाटक</td>
										<td><?php echo $_SESSION['t5']?></td>
										<td><?php echo $_SESSION['t5a']?></td>
										<td><?php echo $_SESSION['t5b']?></td>
									</tr>
									<tr>
										<td>6.</td>
										<td>लेखन/वाद-विवाद/कथा वर्णन </td>
										<td><?php echo $_SESSION['t6']?></td>
										<td><?php echo $_SESSION['t6a']?></td>
										<td><?php echo $_SESSION['t6b']?></td>
									</tr>
									<tfoot>
										<tr>
											<td colspan="5">
												<p style="font-weight: 700">
													मै वचन <?php switch($_SESSION['gender']){
														case 'Male' :
														echo 'देता हूँ';
														break;
														case 'Female':
														echo 'देती हूँ ';
														break;
														default:
														echo '';
													}?> कि समय-समय पर विश्वविद्यालय/ महाविद्यालय/ विद्यालय रा.से.यो. द्वारा बनाये गये नियमों का पालन <?php switch($_SESSION['gender']){
														case 'Male' :
														echo 'करूँगा';
														break;
														case 'Female':
														echo 'करुँगी';
														break;
														default:
														echo '';
													}?> |
												</p>
												
												<br>
												<div class="row">
													<div class="col-md-6">
														<b>दिनांक :- </b><?php echo date("d/m/Y"); ?>
													</div>
													<div class="col-md-6">
														<div align="right">
															<img style="border: 1px solid black;" src="SumitSign.PNG" height="60px;" width="250px">
														</div>
														<div style="height: 50%;" align="right">
															<?php echo $row['sign']?>
															आवेदक के हस्ताक्षर 
														</div>
													</div>
												</div>
												<!-- <span style="float:left">
													<b>दिनांक :- </b><?php echo date("d/m/Y"); ?>
												</span>  
												<span style="float:right">
													<img src="res/images/ietlogo.png" height="100px" width="100px" style="float:left;">
													<?php echo $row['sign']?>
													आवेदक के हस्ताक्षर 
												</span> --> 
											</td>
										</tr>
									</tfoot>
								</table>
								<hr>
								<center><b>(केवल कार्यालय उपयोग के लिए)</b></center>
								<ol>
									<li>पंजीयन का दिनांक :- <?php echo date("d/m/Y"); ?></li>
									<li>पंजीयन संख्या :- NSS/DAVV/IET/<?php echo $row['reg_no'];?></li>
									<li>आमान्य का कारण :- </li>
								</ol>
								<br>
								<br>
								<div style="float:right; margin-right: 15px;">
									हस्ताक्षर कार्यक्रम अधिकारी एवं सील  
								</div> 
								<br>
								<hr>
								

							</div>
							<div align="center">
								<button id="mybtn" class="btn btn-success" onclick="hideme();window.print();">Print</button>
							</div>
							<br>
							<br>
						</body>
						</html>