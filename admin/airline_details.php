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
            <img src="assets/img/pal.png" class="card-img-top airport-pic" alt="..." style="width: 50%;">
            
            <div class="card-body">
                <h5 class="card-title">Philippine Airline</h5>
                <p class="card-text">Philippine Airlines (PAL), a trade name of PAL Holdings, Inc. (PSE: PAL) and also known historically 
                                        as Philippine Air Lines until 1970, is the flag carrier of the Philippines. Headquartered at the 
                                        PNB Financial Center in Pasay, the airline was founded in 1941 and is the first and oldest commercial 
                                        airline in Asia operating under its original name.</p>
            </div>
            <div class="card-footer">
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
            </div>
      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');
?>