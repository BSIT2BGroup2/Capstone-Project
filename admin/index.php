<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
<!--
              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block"></span>
                </a>
              </div> End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>
                  
                  <!-- Alert Notification-->
                  <?php 
                    if(isset($_GET['msg'])){
                      if($_GET['msg'] == 'invalid'){
                        echo '
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                            Invalid Username or Password!
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                      }
                    
                      if($_GET['msg'] == 'logout'){
                        echo '
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <i class="bi bi-exclamation-octagon me-1"></i>
                            You Successfully Logout
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                      }
                    }
                  ?>

                  <form class="row g-3 needs-validation" action="" method="POST" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Account ID</label>
                      <div class="input-group has-validation">
                        <input type="text" name="account_id" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your Account ID.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <!-- <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                      </div>
                    </div> -->
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"><a href="#">Forgot Password</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
<?php
    include ('includes/footer.php');
    include ('database/dbcon.php');

    if(isset($_POST['submit'])){
      $account_id = $_POST['account_id'];
      $password = $_POST['password'];

      $login = mysqli_query($con, "SELECT * FROM users WHERE account_id='$account_id' AND password='$password'");
      $count = mysqli_num_rows($login);
      $row = mysqli_fetch_array($login);
      if($count > 0){
        $_SESSION['user_id'] = $row['user_id'];
        echo "<script>window.location='dashboard.php'</script>";
      }else{
        echo "<script>window.location='index.php?msg=invalid'</script>";
      }
    }

?>