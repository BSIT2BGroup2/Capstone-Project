<?php include ('includes/header.php');
        include ('../database/dbcon.php');

    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Flight Schedule Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <form action="" novalidate method="post" enctype="multipart/form-data" id="quickForm">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Airline</label>
                            <select class="form-control select2" style="width: 100%;" name="airline">
                                <option selected="selected">Select an Airline</option>
                                <?php 
                                    $airline = mysqli_query($con, "SELECT * FROM airlines");
                                    while($q_airline = mysqli_fetch_array($airline)):
                                ?>
                                <option value="<?php echo $q_airline['airline_id']; ?>"><?php echo $q_airline['airline_name']?></option>
                                <?php endwhile; ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Origin</label>
                            <select class="form-control select2" style="width: 100%;" name="origin">
                                <option selected="selected" disabled>Select an Airport (Origin)</option>
                                <?php 
                                    $airport = mysqli_query($con, "SELECT * FROM airports");
                                    while ($o_airport = mysqli_fetch_array($airport)):
                                ?>
                                    <option value="<?php echo $o_airport['airport_id']?>"><?php echo $o_airport['city']. " - " .$o_airport['iata_code'];?></option>
                                <?php endwhile; ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Destination</label>
                            <select class="form-control select2" style="width: 100%;" name="destination">
                                <option selected="selected" disabled>Select an Airport (Destination)</option>
                                <?php 
                                    $airport = mysqli_query($con, "SELECT * FROM airports");
                                    while ($d_airport = mysqli_fetch_array($airport)):
                                ?>
                                    <option value="<?php echo $d_airport['airport_id']?>"><?php echo $d_airport['city']. " - " .$d_airport['iata_code'];?></option>
                                <?php endwhile; ?>
                            </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                            <label>Flight Date Departure</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="date" name="flight_date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="bootstrap-timepicker">
                                <div class="form-group">
                                <label>Flight Time Departure</label>
                                <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="time" name="flight_time" class="form-control datetimepicker-input" data-target="#timepicker"/>
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                                        
                        <div class="col-sm-4">
                            <br>
                            <div class="form-group">
                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php include ('includes/footer.php'); 

    if(isset($_POST['submit'])){
        $airline_id = $_POST['airline'];
        $origin = $_POST['origin'];
        $destination = $_POST['destination'];
        $flight_date = $_POST['flight_date'];
        $flight_time = $_POST['flight_time'];
        
        mysqli_query($con, "INSERT INTO schedule (airline_id, origin, destination, flight_date, flight_time, statused)
        VALUES ('$airline_id','$origin','$destination','$flight_date','$flight_time', 'Scheduled')");
        echo "<script>window.location='flight_schedule.php?msg=success'</script>";
    }
?>
