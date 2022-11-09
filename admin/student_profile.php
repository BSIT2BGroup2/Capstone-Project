<?php
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $id = $_GET['user_id'];

    $user = mysqli_query($con, "SELECT * FROM users WHERE user_id = '$id'");
    $row = mysqli_fetch_array($user);
?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>Student Profile</h1>
</div><!-- End Page Title -->

<section class="section profile">
  <div class="row">
    <div class="col-xl-4">

      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          <?php if($row['user_img'] != null): ?>
            <img src="assets/img/<?php echo $row['user_img'];?>" alt="Profile" class="rounded-circle">
          <?php else: ?>
            <img src="assets/img/no-profile.jpg" alt="Profile" class="rounded-circle">
          <?php endif; ?>
          <h2><?php echo $row['name']; ?></h2>
          <h3><?php echo $row['user_type']; ?></h3>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">
          <div class="tab-content pt-2">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              
              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Account ID</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['account_id']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['name']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Address</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['address']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Phone</div>
                <div class="col-lg-9 col-md-8">+63<?php echo $row['contact']; ?></div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Email</div>
                <div class="col-lg-9 col-md-8"><?php echo $row['email']; ?></div>
              </div>

            </div>

            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

            </div>

          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>
</section>

</main><!-- End #main -->
<?php
    include('includes/footer.php');
?>