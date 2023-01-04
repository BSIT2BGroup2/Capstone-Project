<?php include ('includes/header.php');
      include ('database/dbcon.php');
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Flights Schedule</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="add_flight.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Flights</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>flight No.</th>
                    <th>Airline</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Flight Schedule</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $sched = mysqli_query($con, "SELECT * FROM schedule");
                      while($scheds = mysqli_fetch_array($sched)):
                        $airline = $scheds['airline_id'];
                        $origin = $scheds['origin'];
                        $destination = $scheds['destination'];

                        $air = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$airline' "));
                        $ori = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$origin' "));
                        $dest = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$destination' "));
                    ?>
                    <tr>
                      <td><?php echo $scheds['schedule_id']; ?></td>
                      <td><?php echo $air['airline_name'];?></td>
                      <td><?php echo $ori['city']; ?> - <?php echo $ori['airport_name']; ?> (<?php echo $ori['iata_code']; ?>)</td>
                      <td><?php echo $dest['city']; ?> - <?php echo $dest['airport_name']; ?> (<?php echo $dest['iata_code']; ?>)</td>
                      <td><?php echo $scheds['flight_date']. " - " .$scheds['flight_time']; ?></td>
                      
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $scheds['statused']; ?></span>
                      </td>
                    </tr>
                      <?php endwhile; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Ticket No.</th>
                    <th>Name</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Flight Schedule</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
<?php include ('includes/footer.php'); ?>
