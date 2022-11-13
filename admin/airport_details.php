<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $id = $_GET['airport_id'];

    $airport = mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$id'");
    $row = mysqli_fetch_array($airport);
?>
<style>
    .airport-pic{
        image-rendering: smooth;
        margin-left: 23%;
    }
</style>
<main id="main" class="main">

    <section class="section">
        <div class="row align-items-top">
            <?php if($row['airport_img'] != null):?>
                <img src="assets/img/<?php echo $row['airline_img'] ?>" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            <?php else: ?>
                <img src="assets/img/no-img.jpg" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            <?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['airport_name'];?></h5>
                <p class="card-text"><?php echo $row['airport_description'] ?></p>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Airport Details</h5>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">Airport Name</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $row['airport_name'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">IATA Code</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $row['iata_code'];?></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-md-3 label ">City</div>
                        <div class="col-lg-1 col-md-1 label ">:</div>
                        <div class="col-lg-9 col-md-8"><?php echo $row['city'];?></div>
                    </div>
                </div>
            </div>

            <div class="card-footer">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Airlines</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img src="assets/img/pal.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="airport_details.php"><h5 class="card-title">Philippine Airlines</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');
?>