<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flight Booking Ticket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item d-none d-sm-inline-block">
        <h3  class="nav-link">Flight Booking Ticket</h3>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar" style="color: white;">
        <nav class="mt-2">
            <h4 class="nav-link">Your Booking</h4>
            <div>
                <h5 class="nav-link">2 Traveller
                <p>(1 adult and 1 child)</p></h5>
            </div>
            <h6 class="nav-header">Departure Flight Details</h6>
            <p class="nav-link">
                Date: 01/25/2023 <br>
                <strong>10:40</strong> Manila (MNL) <br>
                <strong>12:40</strong> Lapu-Lapu City (CEB) <br>
                Total Duration: 2h 00m
                Fare Type: Economy Class
            </p>
            <h6 class="nav-header">Return Flight Details</h6>
            <p class="nav-link">
                Date: 01/30/2023 <br>
                <strong>12:40</strong> Lapu-Lapu City (CEB) <br>
                <strong>10:40</strong> Manila (MNL) <br>
                Total Duration: 2h 00m
                Fare Type: Economy Class
            </p>
        </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="" novalidate  enctype="multipart/form-data" id="quickForm">

            <!-- Adult Form -->
            <div class="card card-default">
                <div class="card-header">

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                    <h3>Adult Passengers</h3>

                </div>
                <div class="card-body">
                    <div class="row">
                    <p class="card-title"> Passenger 1 - Personal Infomation</p>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select class="form-control" id="title" name="title">
                                    <option value="" selected disabled>--</option>
                                    <option value="">Mr</option>
                                    <option value="">Mrs</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="DoB">Date of Birth</label>
                                <input type="date" class="form-control" id="DoB" name="DoB">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first-name">First/Given Name</label>
                                <input type="text" class="form-control" id="first-name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="last_name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header"></div>
            </div>

            <!-- Child Form -->
            <div class="card card-default">
                <div class="card-header">

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                    <h3>Child Passengers</h3>

                </div>
                <div class="card-body">
                    <div class="row">
                    <p class="card-title"> Passenger 1 - Personal Infomation</p>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <select class="form-control" id="title" name="title">
                                    <option value="" selected disabled>--</option>
                                    <option value="">Mist</option>
                                    <option value="">Mstr</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="DoB">Date of Birth</label>
                                <input type="date" class="form-control" id="DoB" name="DoB">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="first-name">First/Given Name</label>
                                <input type="text" class="form-control" id="first-name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="last-name">Last Name</label>
                                <input type="text" class="form-control" id="last-name" name="last_name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-header"></div>
            </div>
        </form>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>