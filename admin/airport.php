<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');
?>

<main id="main" class="main">

    <?php
      if(isset($_GET['msg'])){
        if($_GET['msg'] == 'delete'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              The Airport is been Deleted
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($_GET['msg'] == 'edit'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              The Airport is been Updated
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($_GET['msg'] == 'no_img'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              The Airport is been Added but no Image
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($_GET['msg'] == 'img_success'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              The Airport is been Added
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($_GET['msg'] == 'img_err'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              Error on Uploading Image
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      } 
        ?>

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
                  <img src="assets/airport_img/<?php echo $row['airport_img']; ?>" class="card-img-top" alt="...">
                  <?php else:?>
                    <img src="assets/img/no-img.jpg" class="card-img-top" alt="...">
                  <?php endif;?>
                <div class="card-body">
                  <a href="airport_details.php<?php echo '?airport_id='.$row['airport_id'];?>"><h5 class="card-title"><?php echo $row['airport_name'];?></h5></a>
                </div>
                <div class="card-footer">
                  <p class="card-text">
                    <a href="edit_airport.php<?php echo '?airport_id='.$row['airport_id'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal<?php echo $row['airport_id'];?>" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                  </p>
                </div>
              </div>
            </div>

              <!-- Delete Modal -->
              <div class="modal fade" id="DeleteModal<?php echo $row['airport_id'];?>" tabindex="1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Basic Modal</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Are You Sure You Want to Delete this Airport (<?php echo $row['airport_name'];?>)
                    </div>
                    <div class="modal-footer">
                      <form action="function/delete.php" method="post">
                        <input type="text" name="airport_id" value="<?php echo $row['airport_id'];?>" hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="delete_airport" value="delete_airport" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div><!-- End Delete Modal-->

            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');

?>