<?php include ('includes/header.php');
        include ('database/dbcon.php');

        $query = mysqli_query($con, "SELECT * FROM users WHERE user_id = '$id'");
        $user = mysqli_fetch_array($query);
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
        
      <?php
            if(isset($_GET['msg'])):
              echo '
                      <div class="card card-default>
                        <div class="card-body>';
                            if($_GET['msg'] == 'success')
                                echo '<div class="callout callout-success">
                                  <h5>The User Detail is been Updated</h5>
                                </div>';
                            if($_GET['msg'] == 'success_pass')
                                echo '<div class="callout callout-success">
                                  <h5>The User Password is been Updated</h5>
                                </div>';
                            if($_GET['msg'] == 'invalid_pass')
                            echo '<div class="callout callout-warning">
                              <h5>Old Password does not Match!</h5>
                            </div>';
                            if($_GET['msg'] == 'invalid_pass_confirm')
                            echo '<div class="callout callout-warning">
                              <h5>New Password do not match to Confirm Password!</h5>
                            </div>';
              echo  '   </div>
                      </div>'; 
            endif;
            ?>
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <?php if($user['user_img'] != null): ?>
                    <img class="profile-user-img img-fluid img-circle"
                        src="dist/profile/<?php echo $user['user_img']; ?>"
                        alt="User profile picture">
                  <?php else: ?>
                    <img class="profile-user-img img-fluid img-circle"
                        src="dist/images/no-profile.jpg"
                        alt="User profile picture">
                  <?php endif; ?>
                </div>

                <h3 class="profile-username text-center"><?php echo $user['first_name']." ".$user['middle_name']." ".$user['last_name']; ?></h3>

                <p class="text-muted text-center"><?php echo $user['account_id']. "<br>" .$user['user_type'];?></p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#aboutMe" data-toggle="tab">About Me</a></li>
                  <li class="nav-item"><a class="nav-link" href="#editProfile" data-toggle="tab">Edit Profile</a></li>
                  <li class="nav-item"><a class="nav-link" href="#editPass" data-toggle="tab">Edit Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                    <!-- About Me -->
                  <div class="active tab-pane" id="aboutMe">
                    <strong><i class="fas fa-map-marker-alt mr-1"></i>Address</strong>
                    <p class="text-muted"><?php echo $user['address'] ?></p>
                    <hr>
                    <strong><i class="fas fa-solid fa-address-book"></i> Contact Number</strong>
                    <p class="text-muted">+63<?php echo $user['contact'] ?></p>
                    <hr>
                    <strong><i class="fas fa-solid fa-envelope mr-1"></i> Email Address</strong>
                    <p class="text-muted"><?php echo $user['email'] ?></p>
                  </div>

                  <!-- Edit Profile -->
                  <div class="tab-pane" id="editProfile">
                    <form action="" method="post" class="form-horizontal">
                      <input type="text" name="user_id" value="<?php echo $user['user_id']; ?>" hidden>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="First Name" name="first_name" value="<?php echo $user['first_name']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Middle Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Middle Name" name="middle_name" value="<?php echo $user['middle_name']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" placeholder="Last Name" name="last_name" value="<?php echo $user['last_name']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail" placeholder="Address" name="address" value="<?php echo $user['address']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email Address</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" name="email" value="<?php echo $user['email']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Contact Number" name="contact" value="<?php echo $user['contact']; ?>" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="edit" value="edit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->

                  <!-- Edit Profile -->
                  <div class="tab-pane" id="editPass">
                    <form action="" method="post" class="form-horizontal">
                      <input type="text" name="user_id" value="<?php echo $user['user_id']; ?>" hidden>
                      <input type="text" name="pass" value="<?php echo $user['password']; ?>" hidden>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName" name="old_pass" placeholder="Old Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName" name="new_pass" placeholder="New Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputName" name="confirm_pass" placeholder="Confirm Password" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-primary" name="edit_pass" value="edit_pass">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
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

<?php include ('includes/footer.php'); 

  include ('database/dbcon.php');
  #User Profile Edit
  if(isset($_POST['edit'])){
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    
    mysqli_query($con, "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', address = '$address', contact = '$contact', email = '$email'
                        WHERE user_id = '$user_id'");
                    echo "<script>window.location='user_profile.php?msg=success'</script>";
  }

  #User Password Edit
  if(isset($_POST['edit_passw'])){
    
    $user_id = $_POST['user_id'];
    $old_pass = $_POST['pass'];
    $password = $_POST['old_pass'];
    $new_password = $_POST['new_pass'];
    $confirm_password = $_POST['confirm_pass'];
    
    if ($old_pass != $password) {
        echo "<script>window.location='user_profile.php?msg=invalid_pass'</script>";
    }
    else{
        if($new_password != $confirm_password){
            echo "<script>window.location='user_profile.php?msg=invalid_pass_confirm'</script>";
        }else{       
            mysqli_query($con," UPDATE users SET password='$new_password', 
            confirm_password='$confirm_password' WHERE user_id = '$user_id' ");
            echo "<script>window.location='user_profile.php?msg=success_pass'</script>";
        }
        }
    }
?>
