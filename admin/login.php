<?php 
include("../config.php");
session_start();
$error='';
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 

  $myusername = mysqli_real_escape_string($db,$_POST['username']);
  $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

  $sql = "SELECT email,name FROM users WHERE email = '$myusername' and pass = '$mypassword'";
  
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result);
    //      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //      $active = $row['active'];
    //      
  $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

  if($count == 1) {
    $_SESSION['name']=$row['name'];
    $_SESSION['login_user']=$_POST['username'];

    header("location: index.php");
  }else {
    $error = "Email Id or Password is invalid";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NSS Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
              <label for="inputEmail">Email address</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>

          <div class="form-group">
            <div class="form-label-group">
              <input type="checkbox" id="showpassword" name="" onclick="showpass();">
              <label for="showpassword">Show Password</label>
            </div>
          </div>
          <script type="text/javascript">
            function showpass() {
              var x = document.getElementById("inputPassword");
              if (x.type === "password") {
                x.type = "text";
                console.log('running');
              } else {
                x.type = "password";
              }
            }
          </script>

          <button class="btn btn-primary btn-block" type="submit" >Login</button>
          <div style = "font-size:14px; color:#cc0000; margin-top:10px; text-align:center;"><?php echo $error ?></div>
          

        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
