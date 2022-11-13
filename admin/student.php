<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');
?>

<main id="main" class="main">

<?php 

  if(isset($_GET['msg'])){
    if($_GET['msg'] == 'success'){
      echo '
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-exclamation-octagon me-1"></i>
          The Student is been Added
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
  }

?>

    <div class="pagetitle">
      <h1>Manage Students <a href="add_student.php" class="btn btn-primary"><i class="bi bi-plus"></i>Add Student</a> </h1>
      <!--<nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav> End Page Title -->
            
    </div>

    <section class="section">
      <div class="row align-items-top">
        <div class="card">
          <div class="card-body">
          </div>
          <div class="row">
            <?php 
              $student = mysqli_query($con, "SELECT * FROM users");
              while($row = mysqli_fetch_array($student)):
            ?>
            <div class="col-lg-6">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <?php if($row['user_img'] != null): ?>
                      <img src="assets/img/<?php echo $row['user_img'];?>" class="img-fluid rounded-start" alt="...">
                    <?php else: ?>
                      <img src="assets/img/no-profile.jpg" class="img-fluid rounded-start" alt="...">
                    <?php endif; ?>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="student_profile.php<?php echo '?user_id='.$row['user_id'];?>"><h5 class="card-title"><?php echo $row['first_name']." ". $row['middle_name']." ".$row['last_name'];?></h5></a>
                      <p class="card-text"><?php echo $row['account_id']; ?> <br> <?php echo $row['user_type']; ?> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');
?>