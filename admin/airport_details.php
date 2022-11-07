<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
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
            <img src="assets/img/naia.jpg" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            
            <div class="card-body">
                <h5 class="card-title">Ninoy Aquino Internationa Airport</h5>
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