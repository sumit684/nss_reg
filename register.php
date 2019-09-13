<?php
session_start();
if(!isset($_POST['instructions'])){
	header('Location: index.php');
}
include 'config.php';
include 'check.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>NSS Volunteer Registration 2019-20</title>
	<?php include 'include/link.html';?>
	<style type="text/css">
		
		h1,h3,h2{
			text-align: center;
			font-family: serif;
		}
		
		h3{
			margin-bottom: 30px;
		}
		.container-fluid{
			margin-top: 20px;
		}
		.showit{
			visibility: hidden; 
			height: 0px;
		}
		.required:after { content:" *"; color: red;}

		thead th{
			font-family: sans-serif;
		}	
		table td input{
			min-width: 100px;
		}
		table td select{
			min-width: 70px;
		}
		.card{
			padding:10px;
			padding-top: 25px;
		}
		.wrong{
			border-color: red;
			box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(255, 0, 0, 0.6);
		}
		@media only screen and (min-width: 992px) {
			.container label{
				text-align:left;

			}

			.container-fluid{
				padding-left: 20%;
				padding-right: 20%
			}
		}

		@media only screen and (max-width: 992px) {
			.container label{
				text-align:right;

			}				
			h1{
				font-size:24px;
			}
			h2{
				font-size: 20px;
			}
			h3{
				font-size: 16px;
			}
		}

		label{
			font-weight: 500;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#txtConfirmPassword").keyup(checkPasswordMatch);
			$("#txtNewPassword").change(checkPasswordLength);
		});
		function checkPasswordMatch() {
			var password = $("#txtNewPassword").val();
			var confirmPassword = $("#txtConfirmPassword").val();

			if (password != confirmPassword){
				$('#txtNewPassword').addClass('wrong');
				$('#txtConfirmPassword').addClass('wrong');
				$("#divCheckPasswordMatch").html("<span style='color:red;'>Passwords do not match!</span>");
				$("#submit_button").attr('disabled','true');
			}
			else{
				$("#divCheckPasswordMatch").html("<span style='color:green'>Passwords match.</span>");
				$('#txtNewPassword').removeClass('wrong');
				$('#txtConfirmPassword').removeClass('wrong');
				$("#submit_button").removeAttr('disabled');
			}

		}
		function checkPasswordLength(){
			var password = $("#txtNewPassword").val();
			if(password.length<8){
				$("#myalert").html("<span style='color:red;'>Password must contain at least 8 characters!</span>");
				$("#submit_button").attr('disabled','true');
			}else{
				$("#myalert").html("");	
			}
		}
	</script>
</head>
<body onload="load()">
	<div class="container-fluid ">
		<div align="center">
			<img style="height: 90px; margin: auto;"src="res/images/nsslogo.png">
		</div>
		<h1>National Service Scheme</h1>
		<h2>IET-DAVV</h2>
		<h3>Volunteer Registration Form</h3>
		<div class="text-uppercase btn-danger" style="padding-left: 10px;"><?php echo $disabled_msg;?></div>
		<form class="card" method="post" action="submitform.php">
			<div id="data">

				<div class="form-group row">

					<label for="example-text-input " class="col-md-3 col-form-label low required">Email</label>
					<div class="col-md-9">
						<input class="form-control" type="text" value="" name="email" id="email"  autofocus required>
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label low required">Password</label>
					<div class="col-md-9">
						<input class="form-control " type="password" value="" name="pass" id="txtNewPassword" required>
					</div>
				</div>
				<div id="myalert"></div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label low required">Confirm Password</label>
					<div class="col-md-9">
						<input class="form-control" type="password" value="" name="pass" id="txtConfirmPassword" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-3"></div>
					<div class="col-md-9"><input type="checkbox" name="" onclick="showpass();">Show password</div>
				</div>
				<script type="text/javascript">
					function showpass() {
						var x = document.getElementById("txtConfirmPassword");
						if (x.type === "password") {
							x.type = "text";
						} else {
							x.type = "password";
						}
					}
				</script>
				<div class="registrationFormAlert" id="divCheckPasswordMatch">
				</div>

				<br>
				<div class="form-group row">
					<label for="example-text-input" class="col-md-3 col-form-label required">Full Name</label>
					<div class="col-md-9">
						<input class="form-control  text-uppercase " type="text" value="" name="name" id="name" required>
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Gender</label>
					<div class="col-md-3">

						<select class="form-control" id="" name="gender" required>
							<option value="" disabled selected>Select Gender</option>
							<option value="Male" <?php echo $boys_disabled;?>>Male</option>
							<option value="Female" <?php echo $girls_disabled;?>>Female</option>
						</select>
					</div>

					<label for="example-text-input" class="col-md-3 col-form-label required">Category</label>
					<div class="col-md-3">
						<select class="form-control" id="sel1" name="category" required>
							<option value="" disabled selected>Select Category</option>
							<option value="GEN">General</option>
							<option value="OBC">OBC</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="MIN">Minority</option>
						</select>
					</div>
				</div>

				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Date of Birth</label>
					<div class="col-md-3">
						<input class="form-control" type="date" value="" name="dob" id="dob" max="<?php echo date('Y-m-d');?>" required>
					</div>
					<label for="example-text-input" class="col-md-3 col-form-label required">Blood Group</label>
					<div class="col-md-3">
						<select class="form-control" id="blood_grp" name="bloodgrp" required>
							<option value="" disabled selected > Select Blood Group</option>
							<option value="O +ve">O +ve</option>
							<option value="O -ve">O -ve</option>
							<option value="AB +ve">AB +ve</option>
							<option value="AB -ve">AB -ve</option>
							<option value="A +ve">A +ve</option>
							<option value="A -ve">A -ve</option>
							<option value="B +ve">B +ve</option>
							<option value="B -ve">B -ve</option>
						</select>
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Class</label>
					<div class="col-md-3">
						<select class="form-control" name="class" required>
							<option value="" disabled selected>Select Year</option>
							<option value="1st">B.E. 1st Year</option>
							<option value="2nd">B.E. 2nd Year</option>
							<option value="3rd">B.E. 3rd Year</option>
							<option value="4th">B.E. 4th Year</option>
						</select>
					</div>
					<label for="example-text-input" class="col-md-3 col-form-label required">Branch</label>
					<div class="col-md-3">
						<select class="form-control" name="branch" required>
							<option value="" disabled selected> Select Branch</option>
							<option value="CS-A">CS-A</option>
							<option value="CS-B">CS-B</option>
							<option value="IT-A">IT-A</option>
							<option value="IT-B">IT-B</option>
							<option value="E&TC-A">E&TC-A</option>
							<option value="E&TC-B">E&TC-B</option>
							<option value="E&I">E&I</option>
							<option value="MECH">MECH</option>
							<option value="Civil">Civil</option>					
						</select>
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">WhatsApp No.</label>
					<div class="col-md-3">
						<input class="form-control" type="tel" name="whatsappno" pattern="[6-9][0-9]{9}" value="" placeholder="10 digit Mobile No." required>
					</div>

					<label for="example-text-input" class="col-md-3 col-form-label" >Alt. Contact No. (Optional)</label>
					<div class="col-md-3">
						<input class="form-control" type="tel" value="" name="altno" placeholder="10 digit Mobile No.">
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Father's Name</label>
					<div class="col-md-9">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Mr.</span>
							</div>
							<input class="form-control text-uppercase" type="text" name="fathername" required>
						</div>
					</div>
				</div>

				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Father's Occupation</label>
					<div class="col-md-9">
						<input class="form-control" type="text" value="" name="fatheroccupation"id="name" required>
					</div>
				</div>

				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Mother's Name</label>
					<div class="col-md-9">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Mrs.</span>
							</div>
							<input class="form-control text-uppercase" type="text" value="" name="mothername" id="name" required>
						</div>
					</div>
				</div>
				<div class="form-group row">

					<label for="example-text-input" class="col-md-3 col-form-label required">Family Income</label>
					<div class="col-md-9">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Rs.</span>
							</div>
							<input class="form-control" type="number" value="" name="familyincome" id="name" placeholder="Enter Annual Family Income in Rupees" min="0" required>
						</div>
					</div>
				</div>

				<div class="form-group row">

					<label for="caddr" class="col-md-3 col-form-label required">Current Address</label>
					<div class="col-md-9">
						<textarea class="form-control" type="text" name="caddr"value="" id="caddr" required></textarea>
					</div>
				</div>
				<div class="form-group row">

					<label for="paddr" class="col-md-3 col-form-label required">Permanent Address</label>
					<div class="col-md-9">
						<textarea class="form-control" type="text" name="paddr"value="" id="padrr" required></textarea>
					</div>
				</div>
				<div class="form-group row">

					<label for="is_nssV" class="col-md-3 col-form-label required">Are you NSS / NCC Volunteer?</label>
					<div class="col-md-3">
						<select class="form-control" name="is_nssV" id="mySelect" onChange="check(this);" required>
							<option value="No" selected>No</option>
							<option value="Yes (NSS)" >Yes (NSS)</option>
							<option value="Yes (NCC)" >Yes (NCC)</option>
						</select>
					</div>
					<div class="col-md-3 col-form-label required" id="joining">NSS Joining Year</div>
					<div class="col-md-3">
						<select class="form-control" id="mySelect1" name="nssYear" required>
							<option id="2019" value="2019" selected>2019</option>
							<option id="2018" value="2018">2018</option>
							<option id="2017" value="2017">2017</option>
							<option id="2016" value="2016">2016</option>
							<option id="2015" value="2015">2015</option>
						</select>
					</div>
					<script type="text/javascript">
						function load(){
							document.getElementById('2019').enabled="true";
							document.getElementById('2018').disabled="true";
							document.getElementById('2017').disabled="true";
							document.getElementById('2016').disabled="true";
							document.getElementById('2015').disabled="true";
						}
						function check(elem) {
							if(document.getElementById('mySelect').value=='No'){
								document.getElementById('mySelect1').value='2019';
								document.getElementById('2018').disabled="true";
								document.getElementById('2017').disabled="true";
								document.getElementById('2016').disabled="true";
								document.getElementById('2015').disabled="true";

							}
							if(document.getElementById('mySelect').value!='No'){
								document.getElementById('mySelect1').removeAttribute('disabled');
								document.getElementById('mySelect1').value="2018";
								document.getElementById('2019').disabled="true";
								document.getElementById('2018').removeAttribute('disabled');
								document.getElementById('2017').removeAttribute('disabled');
								document.getElementById('2016').removeAttribute('disabled');
								document.getElementById('2015').removeAttribute('disabled');

								document.getElementById('2018').enabled="true";
								document.getElementById('2017').enabled="true";
								document.getElementById('2016').enabled="true";
								document.getElementById('2015').enabled="true";
							}
						}
					</script>
				</div>
			</div>



			<div class="row">

				<div id="interests" class="col-md-12">
					<h4 style="font-family: serif; text-align:left;">Activities you are intrested in :-</h4>
					<table class="table table-bordered table-hover table-responsive">
						<thead class="btn-primary">
							<!-- <th>S.No.</th> -->
							<th>Interests/ activities </th>
							<th>Activity info/ name</th>
							<th>Have taken part or not</th>
							<th>Want to lead / participate</th>

						</thead>
						<tbody>
							<tr>
								<!-- <td>1.</td> -->
								<td>Game and Sports (name)</td>
								<td>
									<input class="form-control" type="text" value="" name="t1" >
								</td>
								<td>
									<select class="form-control" name="t1a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t1b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>
							<tr>
								<!-- <td>2.</td> -->
								<td>Study tour</td>
								<td>
									<input class="form-control" type="text" value="" name="t2" >
								</td>
								<td>
									<select class="form-control" name="t2a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t2b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>
							<tr>
								<!-- <td>3.</td> -->
								<td>Art & Craft</td>
								<td>
									<input class="form-control" type="text" value="" name="t3" >
								</td>
								<td>
									<select class="form-control" name="t3a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t3b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>
							<tr>
								<!-- <td>4.</td> -->
								<td>Music / singing</td>
								<td>
									<input class="form-control" type="text" value="" name="t4" >
								</td>
								<td>
									<select class="form-control" name="t4a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t4b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>
							<tr>
								<!-- <td>5.</td> -->
								<td>Dance / Drama</td>
								<td>
									<input class="form-control" type="text" value="" name="t5" >
								</td>
								<td>
									<select class="form-control" name="t5a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t5b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>

							<tr>
								<!-- <td>6.</td> -->
								<td>Writing / Debating / Story Description</td>
								<td>
									<input class="form-control" type="text" value="" name="t6" >
								</td>
								<td>
									<select class="form-control" name="t6a" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
								<td>
									<select class="form-control" name="t6b" required>
										<option value="" disabled selected>Select</option>
										<option value="Yes" >Yes</option>
										<option value="No" >No</option>
									</select>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>



			<div class="form-group row">
				<!--  -->
				<label for="example-text-input" class="col-md-2 col-form-label ">Your Hobbies</label>
				<div class="col-md-10">
					<textarea class="form-control" type="text" name="hobbies"value="" id="hobbies" ></textarea>
				</div>
			</div>

			<div class="form-group row">
				<!--  -->
				<label for="example-text-input" class="col-md-5 col-form-label">Check the activities you are intersted in </label>
				<div class="col-md-7 col-form-label">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="interest[]" id="customCheck1" value="content_writing">
						<label class="custom-control-label" for="customCheck1">Content Writing</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="interest[]" id="customCheck2" value="photography">
						<label class="custom-control-label" for="customCheck2">Photography / Video Editing</label>
					</div>

					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="interest[]" id="customCheck3" value="painting">
						<label class="custom-control-label" for="customCheck3">Painting / Poster Making</label>
					</div>
					<div class="custom-control custom-checkbox">
						<input type="checkbox" class="custom-control-input" name="interest[]" id="customCheck4" value="web">
						<label class="custom-control-label" for="customCheck4"> Web Development & Data Handling</label>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="custom-control custom-checkbox">

						<input type="checkbox" class="custom-control-input" id="declare" name="" required>
						<label class="custom-control-label" for="declare">
							<b>I hereby declare that all the above information given by me is true and I promise that I will follow rules made by University/ College NSS time to time.</b>
						</label>
					</div>
				</div>
			</div>
			<!-- Signature Upload-->

			<div align="center" style="margin-top: 50px;">
				<!-- <button id="back" class="btn btn-primary">Go Back</button> -->
				<button name="submit" class="btn btn-success" id="submit_button">Submit</button>
			</div>
			<br>


		</form>
	</div>
</body>
</html>