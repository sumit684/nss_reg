<?php
session_start();

?>
<!DOCTYPE html>

<html>
<head>
	
	
	<title>NSS Registration 2019-20</title>
	<link rel="icon" type="image/jpg" href="nsslogo.png">
	<meta name="google" content="notranslate">
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
	<?php include 'include/link.html';?>
	<style type="text/css">
		li{
			margin-left: 20px;
			padding-left: 20px;
			margin-top:10px;
		}
		thead tr{
			font-weight: 700;
		}
		.container{
			padding: 20px;
		}
		
		.data{
			
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
		<div class="container" style="margin:auto; border: 2px solid black; margin-top:30px; margin-bottom: 20px;width:950px;" >
			<p align="center">
				<img style="height:90px;"src="res/images/nsslogo.png"/><br>

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
								<b>एन.एस.एस./ एन.सी.सी. में से किसी एक के सदस्य हैं :-</b>
							</div>
							<div class="col-md-1">
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
						</div>
							<span style="margin-left: 60%">
								<b>(यदि हाँ तो कब से) :- </b>
								<span class="data">
									<?php echo $_SESSION['nssYear'];?>
								</span>
								 से 
							</span>
						</li>
							<li>गतिविधियां जिनमें रूचि हो :-
								<table class="table table-bordered table-responsive">
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
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>2.</td>
												<td>अध्ययन-यात्रा</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>3.</td>
												<td>शिल्प कला</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>4.</td>
												<td>संगीत/गायन</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>5.</td>
												<td>नृत्य/नाटक</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tr>
												<td>6.</td>
												<td>लेखन/वाद-विवाद/कथा वर्णन </td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
											<tfoot>
												<tr>
													<td colspan="5">
														<p>
															मै वचन देता हूँ/ देती हूँ कि समय-समय पर विश्वविद्यालय/ महाविद्यालय/ विद्यालय रा.से.यो. द्वारा बनाये गये नियमों का पालन करूँगा/करुँगी |
														</p>
														<br>
														<br>
														<br>
														<span style="float:left">
															दिनांक :- 
														</span>  
														<span style="float:right">
															आवेदक के हस्ताक्षर 
														</span> 
													</td>
												</tr>
											</tfoot>
										</table>
										<hr>
										<center><b>(केवल कार्यालय उपयोग के लिए)</b></center>
										<ol>
											<li>पंजीयन का दिनांक :-</li>
											<li>पंजीयन संख्या :- </li>
											<li>आमान्य का कारण :- </li>
										</ol>
										<br>
										<br>
										<div style="float:right; margin-right: 15px;">
											हस्ताक्षर कार्यक्रम अधिकारी एवं सील  
										</div> 

										<br>
										<br>
										<hr>
										<br>
										<div align="center">
											<button id="mybtn" class="btn btn-success" onclick="hideme();window.print();">Print</button>
										</div>
									</div>

								</body>
								</html>