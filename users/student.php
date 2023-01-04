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
            <h1>Students</h1>
          </div>
          <div class="col-sm-4"></div>
          <div class="col-lg-2">
            <a href="add_student.php" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> Add Student</a>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            <?php 
              $query = mysqli_query($con, "SELECT * FROM users WHERE user_type = 'Student'");
              while ($student = mysqli_fetch_array($query)):
            ?>
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-light d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b><?php echo $student['first_name']." ".$student['middle_name']." ".$student['last_name']; ?></b></h2>
                      <p class="text-muted text-sm"><b>Student No. </b><?php echo $student['account_id']; ?></p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span><?php echo $student['address']; ?></li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: +63<?php echo $student['contact']; ?></li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <?php if($student['user_img'] != null): ?>
                        <img src="dist/images/no-profile.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <?php else: ?>
                        <img src="dist/images/no-profile.jpg" alt="user-avatar" class="img-circle img-fluid">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="student_profile.php<?php echo '?user_id='.$student['user_id']; ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> View Profile
                    </a>
                      <a href="#" class="btn btn-sm btn-danger">
                        <i class="fas fa-trash"></i> Delete
                      </a>
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
