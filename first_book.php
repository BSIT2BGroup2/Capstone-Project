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

<?php
      include ('database/dbcon.php');
      if(isset($_POST['submit'])){
        $flight_type = $_POST['flight_type'];
        $flying_from = $_POST['flying_from'];
        $flying_to = $_POST['flying_to'];
        $departing_date = $_POST['departing_date'];
        $return_date = $_POST['return_date'];
        $travel_class = $_POST['travel_class'];
        $adult = $_POST['adult'];
        $child = $_POST['child'];
        $traveller = $adult + $child;
      }
    ?>

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
                <h5 class="nav-link"><?php echo $traveller; ?> Traveller
                <p>(<?php echo $adult; ?> adult and <?php echo $child; ?> child)</p></h5>
            </div>
            <!-- <h6 class="nav-header">Departure Flight Details</h6>
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
            </p> -->
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

    <div class="card card-default">
	<div class="card-body">
	  <!-- Warning Callout -->
	  <div class="callout callout-warning">
		<h5>I am a warning callout!</h5>

		<p>This is a yellow callout.</p>
	  </div>

	  <div class="card card-default">
		  <div class="card-body">
			  <div class="table-responsive">
				  <table class="table">
					  <thead>
						  <tr>
							  <th colspan="4" class="text-center"><?php echo $departing_date; ?></th>
						  </tr>
					  </thead>
					  <tbody>
              <?php 
                $query = mysqli_query($con, "SELECT * FROM schedule WHERE origin = '$flying_from' AND destination = '$flying_to' AND flight_date = '$departing_date'");
                while ($row = mysqli_fetch_array($query)):
                  $airline = $row['airline_id'];
                  $origin = $row['origin'];
                  $destination = $row['destination'];

                  $air = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$airline' "));
                  $ori = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$origin' "));
                  $dest = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$destination' "));
              ?>
              <form action="
                  <?php if($return_date == null){
                    echo 'form.php';
                  }else{
                    echo 'second_book.php';
                  }?>
              " method="post">
                <tr>
                  <input type="text" name="origin" value="<?php echo $row['schedule_id']; ?>" hidden> 
                  <input type="text" name="flight_type" value="<?php echo $flight_type; ?>" hidden> 
                  <input type="text" name="flying_to" value="<?php echo $flying_to; ?>" hidden> 
                  <input type="text" name="flying_from" value="<?php echo $flying_from; ?>" hidden> 
                  <input type="text" name="departing_date" value="<?php echo $departing; ?>" hidden> 
                  <input type="text" name="return_date" value="<?php echo $return_date; ?>" hidden> 
                  <input type="text" name="travel_class" value="<?php echo $travel_class; ?>" hidden> 
                  <input type="text" name="adult" value="<?php echo $adult; ?>" hidden> 
                  <input type="text" name="child" value="<?php echo $child; ?>" hidden> 
                  <td class="text-center"><?php echo $air['airline_name']; ?></td>
                  <td class="text-center"><?php echo $ori['iata_code']; ?>, <?php echo $ori['airport_name'] ?>, <?php echo $row['flight_time'];  ?></td>
                  <td class="text-center">2h 00m</td>
                  <td class="text-center"><?php echo $dest['iata_code']; ?>, <?php echo $dest['airport_name'] ?>, 12:00</td>
                  <td class="text-center">
                  <td>
                    <button type="submit" name="submit" value="submit" class="btn btn-block bg-gradient-primary">Book</button>
                  </td>
                </tr>
              </form>
              <?php  endwhile; ?>
					  </tbody>
				  </table>
			  </div>
		  </div>
	  </div>

	</div>
	<!-- /.card-body -->
  </div>

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