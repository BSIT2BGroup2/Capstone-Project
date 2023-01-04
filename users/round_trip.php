<?php include ('includes/header.php');
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Round Trip Tickets</h1>
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
                    <th>Ticket No.</th>
                    <th>Name</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Flight Schedule</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1209347123</td>
                      <td>Saludes/Clive Denzer</td>
                      <td>Manila - Ninoy Aquino Internation Airport (MNL)</td>
                      <td>Cebu - Mactan Airport (CEB)</td>
                      <td><strong>Departure Date:</strong> <br> 01/25/2023 - 12:00 <br><strong>Return Date:</strong> <br> 02/05/2023 - 13:00</td>
                      <td class="project-state">
                          <span class="badge badge-success">Scheduled</span> <br> <br> <span class="badge badge-success">Scheduled</span>
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
