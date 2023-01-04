<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flight Ticket Booking</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
      <?php
            if(isset($_GET['msg'])):
              echo '
                      <div class="card-default>
                        <div class="card-body>';
                            if($_GET['msg'] == 'invalid')
                            echo '<div class="callout callout-warning">
                              <h5>
                              Invalid ID Number or Password!</h5>
                            </div>';if($_GET['msg'] == 'logout')
                            echo '<div class="callout callout-success">
                              <h5>
                              Successfully Logged Out</h5>
                            </div>';
              echo  '   </div>
                      </div>'; 
            endif;
            ?>
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h4">Flight Booking Ticket System</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Login Form</p>


      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="account_id" placeholder="ID Number" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<?php

require ('database/dbcon.php');
if(isset($_POST['submit'])){
  $account_id = $_POST['account_id'];
  $password = $_POST['password'];

  $login = mysqli_query($con, "SELECT * FROM users WHERE account_id='$account_id' AND password='$password'");
  $count = mysqli_num_rows($login);
  if($count > 0){
    $row = mysqli_fetch_array($login);
    $_SESSION['loggedin'] = true;
    $_SESSION['id'] = $row['user_id'];
    echo "<script>window.location='dashboard.php'</script>";
  }else{
    echo "<script>window.location='index.php?msg=invalid'</script>";
  }
}
?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
