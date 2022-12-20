<?php include ('includes/header.php');
        include ('includes/navbar.php');
        include ('includes/sidebar.php');
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
                    <tr>
                      <td>1603412874</td>
                      <td>Philippine Airline</td>
                      <td>Manila - Ninoy Aquino Internation Airport (MNL)</td>
                      <td>Cebu - Mactan Airport (CEB)</td>
                      <td>01/25/2023 - 12:00</td>
                      
                      <td class="project-state">
                          <span class="badge badge-success">Scheduled</span>
                      </td>
                    </tr>
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
