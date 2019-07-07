<!DOCTYPE html>
<html>
<head>
	<title>NSS Volunteer Registration</title>
	<?php include 'include/link.html';?>
	<style type="text/css">
		
		h1,h3{
			text-align: center;
		}
		h3{
			margin-bottom: 30px;
		}
		.container{
			margin-top: 20px;
		}
		.required:after { content:" *"; color: red;}
		/*.form-control:focus {
			border-color: #ff80ff;
			box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);

			}*/
			
			@media only screen and (min-width: 992px) {
				.container label{
					text-align:left;

				}

			}
		</style>
	</head>
	<body>
		<div class="container">
			<div align="center">
				<img style="height: 90px; margin: auto;"src="res/images/nsslogo.png">
			</div>
			<h1>National Service Scheme</h1>
			<h3>Volunteer Registration Form</h3>

			<form>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Full Name</label>
					<div class="col-md-6">
						<input class="form-control" type="text" value="" name="name" id="name" required>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Gender</label>
					<div class="col-md-2">
						<div class="form-check form-check-inline col-form-label">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="male" required>
							<label class="form-check-label">Male</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="female" required>
							<label class="form-check-label">Female</label>
						</div>
					</div>

					<label for="example-text-input" class="col-md-2 col-form-label required">Category</label>
					<div class="col-md-2">
						<select class="form-control" id="sel1" name="category" required>
							<option value="" disabled selected hidden></option>
							<option value="GEN">General</option>
							<option value="OBC">OBC</option>
							<option value="SC">SC</option>
							<option value="ST">ST</option>
							<option value="MIN">Minority</option>
						</select>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Date of Birth</label>
					<div class="col-md-2">
						<input class="form-control" type="date" value="" name="dob" id="dob" required>
					</div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Blood Group</label>
					<div class="col-md-2">
						<select class="form-control" id="blood_grp" name="bloodgrp" required>
							<option value="" disabled selected hidden></option>
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
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Class</label>
					<div class="col-md-2">
						<select class="form-control" id="sel1" name="class" required>
							<option value="" disabled selected hidden></option>
							<option value="GEN">B.E. 1st Yr</option>
							<option value="OBC">B.E. 2nd Yr</option>
							<option value="SC">B.E. 3rd Yr</option>
							<option value="ST">B.E. 4th Yr</option>
						</select>
					</div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Branch</label>
					<div class="col-md-2">
						<select class="form-control" id="sel1" name="branch" required>
							<option value="" disabled selected hidden></option>
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
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label">WhatsApp No.</label>
					<div class="col-md-2">
						<input class="form-control" type="tel" name="whatsappno" pattern="[6-9][0-9]{9}" value="" placeholder="10 digit Mobile No.">
					</div>

					<label for="example-text-input" class="col-md-2 col-form-label" >Alternate Contact No.</label>
					<div class="col-md-2">
						<input class="form-control" type="tel" value="" name="altno" placeholder="10 digit Mobile No.">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Father's Name</label>
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Mr.</span>
							</div>
							<input class="form-control" type="text" value="" name="fname" required>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Father's Occupation</label>
					<div class="col-md-6">
						<input class="form-control" type="text" value="" name="foccup"id="name" required>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Mother's Name</label>
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Mrs.</span>
							</div>
							<input class="form-control" type="text" value="" name="mname" id="name" required>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Family Income</label>
					<div class="col-md-6">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupPrepend">Rs.</span>
							</div>
							<input class="form-control" type="number" value="" name="fincome" id="name" placeholder="Enter Annual Family Income in Rupees" min="0"required required>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label required">Current Address</label>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="curradd"value="" id="name" required></textarea>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-md-2"></div>
					<label for="example-text-input" class="col-md-2 col-form-label">Permanent Address</label>
					<div class="col-md-6">
						<textarea class="form-control" type="text" name="permadd"value="" id="name"></textarea>
					</div>
				</div>

				<div align="center">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
		</div>
	</body>
	</html>