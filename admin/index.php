<?php include 'session.php';?>
<?php include 'responses.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" type="image/jpg" href="../res/images/nsslogo.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NSS Volunteer Registration 2019-20</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

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
        <li class="breadcrumb-item active">Overview</li>
      </ol>

      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">

                <i class="fas fa-fw fa-list"></i>
              </div>
              <div class="mr-5"><span style="font-size: 30px; font-weight: 700; margin-right: 10px;"><?php echo $total;?></span><b>TOTAL RESPONSES </b></div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="summary.php">
              <span class="float-left">View Summary</span>
              <span class="float-right">
                <i class="fas fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
          
        </div> 

      <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
      <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>

      <div id="buttons"></div>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          <b>NSS Volunteer Registration 2019-20</b></div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Timestamp</th>
                    <th>S.No.</th>
                    <th>Reg. No.</th>
                    
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>Year</th>
                    <th>Branch</th>
                    <th>Category</th>
                    <th>Blood group</th>
                    <th>Whatsapp No.</th>
                    <th>Alt Contact No.</th>
                    <th>Email Id</th>
                    <th>Gender</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  // include '../config.php';
                  $sql ="SELECT * FROM `volunteer`";
                  $result = mysqli_query($db,$sql);
                  while($row= mysqli_fetch_assoc($result)){
                    echo "<tr>
                    <td>".$row['timestamp']."</td>
                    <td>".$row['sno']."</td>
                    <td>".$row['reg_no']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['fathername']."</td>
                    <td>".$row['class']."</td>
                    <td>".$row['branch']."</td>
                    <td>".$row['category']."</td>
                    <td>".$row['bloodgrp']."</td>
                    <td>".$row['whatsappno']."</td>
                    <td>".$row['altno']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['gender']."</td>
                    </tr>";

                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated at <?php echo(date("Y-m-d H:i:s A",time()));?></div>
        </div>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
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

  <!-- Bootstrap core JavaScript-->
<!--   <script src="vendor/jquery/jquery.min.js"></script> -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
<!--   <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
 -->
  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
<!--   <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>
