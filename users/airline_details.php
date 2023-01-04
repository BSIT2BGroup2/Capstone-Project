<?php include ('includes/header.php'); 
        include ('database/dbcon.php');
        $id = $_GET['airline_id'];
        $query = mysqli_query($con,"SELECT * FROM airlines WHERE airline_id = '$id'");
        $airline = mysqli_fetch_array($query);
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $airline['airline_name']; ?></h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="edit_airline.php<?php echo'?airline_id='.$airline['airline_id']; ?>" class="btn btn-warning btn-block"><i class="fa fa-edit"></i> Edit Airline</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-body">
          <?php if($airline['airline_img'] != null): ?>
            <img src="dist/airline_img/<?php echo $airline['airline_img']; ?>" alt="" class="card-img-center" style="width: 40%; height: 40%;">
          <?php else: ?>
            <img src="dist/images/no-img.jpg" alt="" class="card-img-center" style="width: 40%; height: 40%;">
          <?php endif; ?>
          <p><?php echo stripslashes(html_entity_decode($airline['airline_description'])); ?></p>
        </div>
        <div class="card-body">
            
        <h5 class="card-header">Airline Details</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">Airline Name</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airline['airline_name']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">IATA Code</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airline['iata_code']; ?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">ICAO Code</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $airline['icao_code']; ?></div>
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