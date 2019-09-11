<?php session_start();
$_SESSION['instruction']="visited";
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
			<div class="h4 text-uppercase" align="center">Instructions for NSS Registration</div>
			<div class="content">
				<ul>
					<li>Last Date to fill NSS Registration Form is <b>15th September 2019</b>
					<li>Registration portal will be closed once we have 200 registration (100 Boys + 100 Girls).
					<li>Use your <b>Email Id</b> to fill NSS Registration Form and <b>Remember your Password</b> as it will be used to access your Final registration Form </li>
					<li>After successful submission of your form a FILLED FORM like below will be generated <b> Save the FILLED FORM</b> as PDF for future use.</li>
					<li>Remember your Registration Number</li>
					<img class="img-fluid" src="res/finalform.png">
					

				</ul>

				<form action="register.php" method="post">

					<input type="checkbox" name="instructions" required=""><i>I have read all the given instructions carefully.</i><br>
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
</body>
</html>