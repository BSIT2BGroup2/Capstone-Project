<?php include ('includes/header.php'); 
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Airlines</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="add_airline.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Airline</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          
            <?php
            if(isset($_GET['msg'])):
              echo '
                      <div class="card card-default>
                        <div class="card-body>';
                            if($_GET['msg'] == 'success')
                                echo '<div class="callout callout-success">
                                  <h5>The Airline is been Added</h5>
                                </div>';
                            if($_GET['msg'] == 'error')
                            echo '<div class="callout callout-warning">
                              <h5>The Airline is not been Added</h5>
                            </div>';
                            if($_GET['msg'] == 'edit_success')
                                echo '<div class="callout callout-success">
                                  <h5>The Airline is been Updated</h5>
                                </div>';
                            if($_GET['msg'] == 'edit_error')
                            echo '<div class="callout callout-warning">
                              <h5>The Airline is not been Updated</h5>
                            </div>';
              echo  '   </div>
                      </div>'; 
            endif;
            ?>
          <div class="row">
            <?php 
              $query = mysqli_query($con, "SELECT * FROM airlines");
              while ($airline = mysqli_fetch_array($query)):
            ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $airline['airline_name']; ?></b></h2>
                      <p class="text-muted text-sm"><b>IATA CODE </b><?php echo $airline['iata_code']; ?></p>
                    </div>
                    <div class="col-5 text-center">
                      <?php if($airline['airline_img'] != null): ?>
                        <img src="dist/airline_img/<?php echo $airline['airline_img']; ?>" alt="airline-img" class="img-circle img-fluid">
                      <?php else: ?>
                        <img src="dist/images/no-img.jpg" alt="airline-img" class="img-circle img-fluid">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="airline_details.php<?php echo'? airline_id='.$airline['airline_id']; ?>" class="btn btn-sm btn-primary">
                    <i class="fas fa-circle-info"></i> View Details
                    </a>
                      <button href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteAirline">
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
      <div class="modal fade" id="deleteAirline">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete Airline</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are You Sure You Want to Delete this Airline</p>
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
