<?php include 'session.php';?>
<?php include 'responses.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="icon" type="image/jpg" href="../res/images/nsslogo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>NSS IET-DAVV Admin Panel</title>

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Page level plugin CSS-->
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['Year', 'students'],
		['1st', <?php echo $yr1?>],
		['2nd', <?php echo $yr2?>],
		['3rd', <?php echo $yr3?>],
		['4th', <?php echo $yr4?>],
		]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'YEAR', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('year'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['GENDER', 'students'],
		['Boys', <?php echo $boys?>],
		['Girls', <?php echo $girls?>],
		]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'GENDER', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('gender'));
  chart.draw(data, options);
}
</script>


<script type="text/javascript">
	
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['CATEGORY', 'students'],
		<?php
		$sql="SELECT category, count(*) FROM `volunteer` GROUP BY category";
		$result= mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){
			echo "['".$row['category']."',".$row['count(*)']."],";
		}

		?>
		]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'CATEGORY', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('category'));
  chart.draw(data, options);
}
</script>


<script type="text/javascript">
	
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['NSS JOINING YEAR', 'students'],
		<?php
		$sql="SELECT nssYear, count(*) FROM `volunteer` GROUP BY nssYear";
		$result= mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){
			echo "['".$row['nssYear']."',".$row['count(*)']."],";
		}

		?>
		]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'NSS JOINING YEAR', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('nssYear'));
  chart.draw(data, options);
}
</script>

<script type="text/javascript">
	
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
	var data = google.visualization.arrayToDataTable([
		['Branch', 'students'],
		<?php
		$sql="SELECT branch, count(*) FROM `volunteer` GROUP BY branch";
		$result= mysqli_query($db,$sql);
		while($row = mysqli_fetch_array($result)){
			echo "['".$row['branch']."',".$row['count(*)']."],";
		}

		?>
		]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Branch', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('Branch'));
  chart.draw(data, options);
}
</script>
</head>

<body id="page-top">

	<?php include 'include/nav.html';?>
	<?php include 'include/sidenav.html';?>
	<div id="content-wrapper">

		<div class="container-fluid">

			<!-- Breadcrumbs-->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="#">Dashboard</a>
				</li>
				<li class="breadcrumb-item active">Summary</li>
			</ol>
			<div class="h3 text-center">
				Graphical Overview
			</div>
			<div class="h4">
				Total : <?php echo $total;?>&nbsp;&nbsp;&nbsp;&nbsp;
				Boys : <?php echo $boys;?>&nbsp;&nbsp;
				Girls : <?php echo $girls;?>
			</div>
			<div id="year" style="float: left"></div>
			<div id="gender" style="float: left"></div>
			<div id="category" style="float: left"></div>
			<div id="nssYear" style="float: left"></div>
			<div id="Branch" style="float: left"></div>
		</div>
	</div>
	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>
	<!-- log out -->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<a class="btn btn-primary" href="logout.php">Logout</a>
				</div>
			</div>
		</div>
	</div>
	<!-- logout -->
	<!-- Bootstrap core JavaScript-->
	  <script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
	<script src="vendor/datatables/dataTables.bootstrap4.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="js/sb-admin.min.js"></script>

	<!-- Demo scripts for this page-->
	<script src="js/demo/datatables-demo.js"></script>
	<script src="js/demo/chart-area-demo.js"></script>
</body>
</html>