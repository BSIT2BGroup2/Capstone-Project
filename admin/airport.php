<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Aiports Tables</h1>
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
            <h5 class="card-title">Manage Airports <a href="#" class="btn btn-primary">Add Airport</a></h5>
          </div>
          <div class="row">
            <div class="col-lg-3">
              <div class="card">
                <img src="assets/img/naia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ninoy Aquino Internationa Airport</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <div class="card-footer">
                <p class="card-text">
                  <a href="#" class="btn btn-primary">View</a>
                  <a href="#" class="btn btn-warning">Edit</a>
                  <a href="#" class="btn btn-danger">Delete</a>
               </p>
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