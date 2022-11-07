<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
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
            <div class="col-lg-3">
              <div class="card">
                <img src="assets/img/naia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="airport_details.php"><h5 class="card-title">Ninoy Aquino Internationa Airport</h5></a>
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