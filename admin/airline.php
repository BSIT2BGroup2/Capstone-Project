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
              The Airline is been Deleted
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
        if($_GET['msg'] == 'edit'){
          echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-octagon me-1"></i>
              The Airline is been Updated
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
        }
      } 
    ?>

    <div class="pagetitle">
      <h1>Manage Airlines <a href="add_airline.php" class="btn btn-primary"><i class="bi bi-plus"></i>Add Airline</a></h1>
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
              $airline = mysqli_query($con, "SELECT * FROM airlines");
              while($row = mysqli_fetch_array($airline)):
            ?>
            <div class="col-lg-3">
              <div class="card">
                <?php if($row['airline_img'] != null):?>
                  <img src="assets/img/<?php echo $row['airline_img']; ?>" class="card-img-top" alt="...">
                <?php else:?>
                  <img src="assets/img/no-img.jpg" class="card-img-top" alt="...">
                <?php endif;?>
                <div class="card-body">
                  <a href="airline_details.php<?php echo '?airline_id='.$row['airline_id'];?>"><h5 class="card-title"><?php echo $row['airline_name'];?></h5></a>
                </div>
                <div class="card-footer">
                  <p class="card-text">
                    <a href="edit_airline.php<?php echo '?airline_id='.$row['airline_id'];?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i>Edit</a>
                    <button type="button" data-bs-toggle="modal" data-bs-target="#DeleteModal<?php echo $row['airline_id'];?>" class="btn btn-danger"><i class="bi bi-trash"></i>Delete</button>
                  </p>
                  </p>
                </div>
              </div>
            </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="DeleteModal<?php echo $row['airline_id'];?>" tabindex="1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Delete Airline</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are You Sure You Want to Delete this Arline (<?php echo $row['airline_name'];?>)
                      </div>
                      <div class="modal-footer">
                        <form action="delete.php" method="post">
                          <input type="text" name="airline_id" value="<?php echo $row['airline_id'];?>" hidden>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" name="delete_airline" value="delete_airline" class="btn btn-danger">Delete</button>
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