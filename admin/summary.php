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
<div id="year" style="float: left"></div>
<div id="gender" style="float: left"></div>
  </div>
</div>
</body>
</html>