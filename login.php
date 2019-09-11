<?php 
include("config.php");
session_start();
$error='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

	$myusername = mysqli_real_escape_string($db,$_POST['username']);
	$mypassword = mysqli_real_escape_string($db,$_POST['password']); 

	$sql = "SELECT email FROM volunteer WHERE email = '$myusername' and pass = '$mypassword'";
    // echo $sql;
	$result = mysqli_query($db,$sql);
    //      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //      $active = $row['active'];
    //      
	$count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

	if($count == 1) {
        //         session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
		$_SESSION['email']=$_POST['username'];
		header("location: form_pdf.php");
	}else {
		$error = "Email Id or Password is invalid";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>National Sevice Scheme</title>
	<?php include 'include/link.html'?>
	<style>
		html,
		body {
			height: 100%;
		}

		body {
			display: -ms-flexbox;
			display: -webkit-box;
			display: flex;
			-ms-flex-align: center;
			-ms-flex-pack: center;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #f5f5f5;

		}

		.form-signin {
			width: 100%;
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .checkbox {
			font-weight: 400;
		}
		.form-signin .form-control {
			position: relative;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		/*.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}*/
		.card{
			box-shadow: 10px 10px 20px grey;
			border : 10px 10px 10px;
		}
		
	</style>
</head>
<body>
	
	<body class="text-center container">
		<form class="card form-signin" method="post" action="">
			<div align="center" >
				<img class="mb-4" src="res/images/nsslogo.png" alt="" width="100" height="100" style="margin-top: -65px;">
			</div>
			<h1 class="h4 mb-3 font-weight-bold" style="font-family: serif;">National Service Scheme</h1>
			<h3 class="h4 mb-3 font-weight-normal" style="font-family: serif;">IET-DAVV</h3>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="username" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<br>
			<input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
			<br>
			<button name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

			<div style="text-align: right">
				<a href="index.php" >New Registration</a>
			</div>
			<div style = "font-size:14px; color:#cc0000; margin-top:10px; text-align:center;"><?php echo $error ?></div>
		</form>
	</body>
	</html>