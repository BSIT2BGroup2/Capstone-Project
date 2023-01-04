<?php include ('includes/header.php'); 
        include ('database/dbcon.php');

        $id = $_GET['airport_id'];
        $query = mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$id'");
        $airport = mysqli_fetch_array($query);
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $airport['airport_name']; ?></h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="edit_airport.php<?php echo '?airport_id='.$airport['airport_id']; ?>" class="btn btn-warning btn-block"><i class="fa fa-edit"></i> Edit Airport</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <?php if($airport['airport_img'] != null): ?>
            <img src="dist/airport_img/<?php echo $airport['airport_img']; ?>" alt="" class="card-img-center" style="width: 40%; height: 40%;">
          <?php else: ?>
            <img src="dist/images/no-img.jpg" alt="" class="card-img-center" style="width: 40%; height: 40%;">
          <?php endif; ?>
          <p><?php echo stripslashes(html_entity_decode($airport['airport_description'])); ?></p>
        </div>
        <div class="card-body">
            
        <h5 class="card-header">Airport Details</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">Airport Name</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airport['airport_name']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">IATA Code</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airport['iata_code']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">City</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airport['city']; ?></div>
                    </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

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
