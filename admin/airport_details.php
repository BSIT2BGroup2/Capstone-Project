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
                <p class="card-text">Ninoy Aquino International Airport or NAIA (IATA: MNL, ICAO: RPLL), also known as Manila International Airport or 
                                    simply Manila Airport, is one of the two international airports serving the Metro Manila Area and the main 
                                    international gateway to the Philippines.<br>
                                    It is named after Senator Benigno "Ninoy" Aquino Jr., who was murdered at the airport in 1983. NAIA is located 
                                    along the border between Pasay and Parañaque cities in Metro Manila, about 7 km (3.4 miles) south of the city 
                                    and southwest of Makati Central Business District. MNL Airport is a hub for Cebu Pacific, Cebgo, Philippine Airlines, 
                                    PAL Express and a focus city for Philippines AirAsia.</p>
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