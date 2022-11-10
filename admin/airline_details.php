<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $id = $_GET['airline_id'];

    $airline = mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$id'");
    $row = mysqli_fetch_array($airline);
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
            <?php if($row['airline_img'] != null):?>
                <img src="assets/img/<?php echo $row['airline_img']; ?>" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            <?php else: ?>
                <img src="assets/img/no-img.jpg" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            <?php endif; ?>
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['airline_name']; ?></h5>
                <p class="card-text"><?php echo $row['airline_description']; ?></p>
            </div>
            <!-- <div class="card-footer">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Airports</h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <img src="assets/img/naia.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="airport_details.php"><h5 class="card-title">Ninoy Aquino International Airport</h5></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');
?>