<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Airlines <a href="#" class="btn btn-primary">Add Airline</a></h1>
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
            <div class="col-lg-3">
              <div class="card">
                <img src="assets/img/pal.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="airline_details.php"><h5 class="card-title">Philipine Airline</h5></a>
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