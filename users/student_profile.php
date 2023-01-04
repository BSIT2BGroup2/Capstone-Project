<?php include ('includes/header.php');
        include ('database/dbcon.php');

        $id = $_GET['user_id'];
        $query = mysqli_query($con, "SELECT * FROM users WHERE user_id = '$id'");
        $student = mysqli_fetch_array($query);
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?php if($student['user_img'] != null): ?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="dist/user_img/<?php echo $student['user_img']; ?>"
                       alt="User profile picture">
                  <?php else: ?>
                    <img class="profile-user-img img-fluid img-circle"
                       src="dist/images/no-profile.jpg"
                       alt="User profile picture">
                  <?php endif; ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $student['first_name']. " " .$student['middle_name']. " " .$student['last_name']; ?></h3>

                <p class="text-muted text-center"><?php echo $student['account_id']. "<br>" .$student['user_type'];?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
                <div class="tab-content">
                    
              <div class="card-body">

                <strong><i class="fas fa-map-marker-alt mr-1"></i>Address</strong>

                <p class="text-muted"><?php echo $student['address'] ?></p>

                <hr>

                <strong><i class="fas fa-solid fa-address-book"></i> Contact Number</strong>

                <p class="text-muted">+63<?php echo $student['contact']; ?></p>

                <hr>

                <strong><i class="fas fa-solid fa-envelope mr-1"></i> Email Address</strong>

                <p class="text-muted"><?php echo $student['email']; ?></p>
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
