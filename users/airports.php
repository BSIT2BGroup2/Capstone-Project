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
            <h1>Airports</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="add_airport.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Airport</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0"><?php
            if(isset($_GET['msg'])):
              echo '
                      <div class="card card-default>
                        <div class="card-body>';
                            if($_GET['msg'] == 'success')
                                echo '<div class="callout callout-success">
                                  <h5>The Airport is been Added</h5>
                                </div>';
                            if($_GET['msg'] == 'error')
                            echo '<div class="callout callout-warning">
                              <h5>The Airport is not been Added</h5>
                            </div>';
                            if($_GET['msg'] == 'edit_success')
                                echo '<div class="callout callout-success">
                                  <h5>The Airport is been Updated</h5>
                                </div>';
                            if($_GET['msg'] == 'edit_error')
                            echo '<div class="callout callout-warning">
                              <h5>The Airport is not been Updated</h5>
                            </div>';
              echo  '   </div>
                      </div>'; 
            endif;
            ?>
          <div class="row">
            <?php 
              $query = mysqli_query($con, "SELECT * FROM airports");
              while ($airport = mysqli_fetch_array($query)):
            ?>
              <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h2 class="lead"><b><?php echo $airport['airport_name']; ?></b></h2>
                        <p class="text-muted text-sm"><b>IATA CODE </b><?php echo $airport['iata_code']; ?></p>
                        <ul class="ml-4 mb-0 fa-ul text-muted">
                          <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><?php echo $airport['city']; ?></li>
                        </ul>
                      </div>
                      <div class="col-5 text-center">
                        <?php if($airport['airport_img'] != null): ?>
                          <img src="dist/airport_img/<?php echo $airport['airport_img']; ?>" alt="airport-img" class="img-circle img-fluid">
                        <?php else: ?>
                          <img src="dist/images/no-img.jpg" alt="airport-img" class="img-circle img-fluid">
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      <a href="airport_details.php<?php echo '?airport_id='.$airport['airport_id']; ?>" class="btn btn-sm btn-primary">
                        <i class="fas fa-circle-info"></i> View Details
                      </a>
                      <button href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteAirport">
                        <i class="fas fa-trash"></i> Delete
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

      <!-- Delete Modal -->
      <div class="modal fade" id="deleteAirport">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Airport</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You Sure You Want to Delete this Airport</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-danger" >Delete</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
