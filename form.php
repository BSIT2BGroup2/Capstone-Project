<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flight Booking Ticket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="users/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="users/dist/css/adminlte.min.css">
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
  
<?php
      include ('database/dbcon.php');
      if(isset($_POST['origin'])){
        $flight_type = $_POST['flight_type'];
        $flying_from = $_POST['flying_from'];
        $flying_to = $_POST['flying_to'];
        $departing_date = $_POST['departing_date'];
        $return_date = $_POST['return_date'];
        $travel_class = $_POST['travel_class'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];
        $origins = $_POST['origin'];
        $departure = $_POST['destination'];
        $traveller = $adult + $child;
      }
    ?>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <div class="sidebar" style="color: white;">
        <nav class="mt-2">
            <h4 class="nav-link">Your Booking</h4>
            <div>
                <h5 class="nav-link"><?php echo $traveller; ?> Traveller
                <p>(<?php echo $adult; ?> adult and <?php echo $child; ?> child)</p></h5>
            </div>
            <?php
                $origin_query = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM schedule WHERE schedule_id = '$origins'"));
                $o_airline = $origin_query['airline_id'];
                $o_origin = $origin_query['origin'];
                $o_destination = $origin_query['destination'];

                $o_air = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$o_airline' "));
                $o_ori = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$o_origin' "));
                $o_dest = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$o_destination' "));
            ?>
            <h6 class="nav-header">Departure Flight Details</h6>
            <p class="nav-link">
                Date: <?php echo $origin_query['flight_date']; ?> <br>
                Airline: <?php echo $o_air['airline_name']; ?> <br>
                <strong><?php echo $origin_query['flight_time']; ?></strong> <?php echo $o_ori['airport_name']; ?> (<?php echo $o_ori['iata_code']; ?>) <br>
                <strong>12:00</strong> <?php echo $o_dest['airport_name']; ?> (<?php echo $o_dest['iata_code']; ?>) <br>
                Total Duration: 2h 00m <br>
                Fare Type: <?php echo $travel_class; ?><br>
            </p>
            <?php if($return_date != null): 
                
                $return_query = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM schedule WHERE schedule_id = '$departure'"));
                $r_airline = $return_query['airline_id'];
                $r_origin = $return_query['origin'];
                $r_destination = $return_query['destination'];

                $r_air = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$r_airline' "));
                $r_ori = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$r_origin' "));
                $r_dest = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$r_destination' "));
            ?>
            <h6 class="nav-header">Return Flight Details</h6>
            <p class="nav-link">
                Date: <?php echo $return_query['flight_date']; ?> <br>
                Airline: <?php echo $r_air['airline_name']; ?> <br>
                <strong><?php echo $return_query['flight_time']; ?></strong> <?php echo $r_ori['airport_name']; ?> (<?php echo $r_ori['iata_code']; ?>) <br>
                <strong>12:00</strong> <?php echo $r_dest['airport_name']; ?> (<?php echo $r_dest['iata_code']; ?>) <br>
                Total Duration: 2h 00m <br>
                Fare Type: <?php echo $travel_class; ?><br>
            </p>
            <?php endif; ?>
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
                <?php for ($i=1; $i <= $adult; $i++): ?>
                <div class="card-body">
                    <div class="row">
                    <p class="card-title"> Passenger <?php echo $i; ?> - Personal Infomation</p>
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
                <?php endfor; ?>
                <div class="card-header"></div>
            </div>
            
            <?php if ($child != 0):?>
            <!-- Child Form -->
            <div class="card card-default">
                <div class="card-header">

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                    <h3>Child Passengers</h3>

                </div>
                <?php for ($i=1; $i <= $child; $i++): ?>
                <div class="card-body">
                    <div class="row">
                    <p class="card-title"> Passenger <?php echo $child;?> - Personal Infomation</p>
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
                <?php endfor; ?>
                <div class="card-header"></div>
            </div>
            <?php endif; ?>

            
            <!-- Child Form -->
            <div class="card card-default">
                <div class="card-header">

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    </div>
                    <h3>Contact Information</h3>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" name="contact">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                    <p class="card-title"> <strong>Emergency Contact</strong></p>
                    </div> <br>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" name="contact">
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
<script src="users/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="users/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="users/dist/js/adminlte.min.js"></script>
</body>
</html>