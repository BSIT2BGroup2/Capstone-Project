<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Airports <a href="add_airport.php" class="btn btn-primary"><i class="bi bi-plus"></i>Add Airport</a> </h1>
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
              $airport = mysqli_query($con, "SELECT * FROM airports");
              while($row = mysqli_fetch_array($airport)):
            ?>
            <div class="col-lg-3">
              <div class="card">
                <?php if($row['airport_img'] != null):?>
                  <img src="assets/img/<?php echo $row['airport_img']; ?>" class="card-img-top" alt="...">
                  <?php else:?>
                    <img src="assets/img/no-img.jpg" class="card-img-top" alt="...">
                  <?php endif;?>
                <div class="card-body">
                  <a href="airport_details.php<?php echo '?airport_id='.$row['airport_id'];?>"><h5 class="card-title"><?php echo $row['airport_name'];?></h5></a>
                </div>
                <div class="card-footer">
                  <p class="card-text">
                    <a href="edit_airport.php<?php echo '?airport_id='.$row['airport_id'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</a>
                  </p>
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