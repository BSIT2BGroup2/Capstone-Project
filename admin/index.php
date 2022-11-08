<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('../database/dbcon.php');

    $count_airport = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS total FROM airports"));
    $count_airline = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS total FROM airlines"));
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Student Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Total of Students</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Student Card -->

            <!-- Airport Card -->
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Total of Airports</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-airplane"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $count_airport['total']; ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Airport Card -->

            <!-- Airline Card -->
            <div class="col-xxl-4 col-md-4">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Total of Airlines</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-airplane"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo $count_airline['total']; ?></h6>
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Airline Card -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>

  </main><!-- End #main -->

<?php
    include ('includes/footer.php');
?>