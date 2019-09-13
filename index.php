<?php session_start();
date_default_timezone_set('Asia/Calcutta');
$_SESSION['instruction']="visited";
include 'config.php';
include 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>NSS Registration 2019-20</title>
	<?php include 'include/link.html';?>
	<style type="text/css">
		.container{
			margin-top: 10px;
		}
		.content{
			font-family: arial;
			font-size: 18px;
		}
		.card{
			padding:20px; 
		}
		.footer{
			margin-top:20px;
			font-size:20px;
			text-align: center;
			background-color: grey;
			color:white;
		}
		.highlight{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<div class="container">
		<div align="center">
			<img src="res/images/nsslogo.png" height="80" width="80">
			<div class="h3" style="font-family:serif;">
				National Service Scheme
			</div>
		</div>

		<div class="card">
			
			<div align="right" class="h5">Total Registration  till now : <?php echo $total;?></div>
			<div class="btn-danger font-italic" > <b>NOTICE :</b> We have increased number of registration for Boys from 100 to 150 after that registration for Boys will be closed.</div>
			<span class="small" align="right">updated at <?php echo date("d/m/Y h:i:s A",time())?></span>
			<div class="h3 text-uppercase" align="center" style="font-family: sans-serif;">Instructions for NSS Registration</div>
			<div class="content">
				<ul>
					<li class="highlight">Last Date to fill NSS Registration Form is <b><?php echo date('d/m/Y h:i:s A',$last_date)?></b>
					<li>ONLY the First 250 entries will be considered for registration (150 Boys + 100 Girls).
					<li>Use your <b>Email Id</b> to fill NSS Registration Form and <b>Remember your Password</b> as it will be used to access your Final Filled Form.</li>
					<li>After successful submission of your form, a FINAL FILLED FORM will be generated like one shown below.<b> Save the FINAL FILLED FORM</b> as PDF for future use or you can login <a href="login.php" target="_blank">here</a> to view/download your FINAL FILLED FORM.</li>
					<li>Remember your Registration Number given in Final Filled Form.</li>
					<li>Registered students will be added to "NSS VOLUNTEER 2019-20" Whatsapp group once all registrations are completed.</li>
					<img class="img-fluid" src="res/finalform.png">
					
					</ul>

				<form action="register.php" method="post">

					<input type="checkbox" name="instructions" required=""><i>&nbsp;&nbsp;&nbsp;I have read all the given instructions carefully.</i><br>
					<div class="center" align="center">
						<button class="btn btn-primary" type="submit">Fill Registration Form</button><br>
					</div>
				</form>
			</div>
		</div>
		<div align="center" style="margin-top: 20px;">
			<a href="login.php"><button class="btn btn-primary"> LOG IN</button><br></a>
			If already Registered
		</div>
	</div>
	<div class="footer">
		In case of any problem/query please contact<br> Mr. Tapesh Sarsodia (+91 9977036581)
	</div>
</body>
</html>