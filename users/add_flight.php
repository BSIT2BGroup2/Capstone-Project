<?php include ('includes/header.php');
        include ('includes/navbar.php');
        include ('includes/sidebar.php');
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

        <form action="" novalidate  enctype="multipart/form-data" id="quickForm">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="FlightNumber">Flight Number</label>
                                <input type="number" class="form-control" id="FlightNumber" name="flight_number" required disabled>
                            </div>
                        </div>
                        <div class="col-sm-6">
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
                                <option selected="selected">Select an Airport (Origin)</option>
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
                        <div class="col-sm-2">
                            <div class="form-group">
                            <label>Flight Date Departure</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="date" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                            <label>Flight Time Departure</label>
                                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                                    <input type="time" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
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

<?php include ('includes/footer.php'); ?>
