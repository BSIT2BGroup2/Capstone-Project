<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Manage Students</h1>
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
            <div class="col-lg-6">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assets/img/no-profile.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <a href="student_profile.php"><h5 class="card-title"> Clive Denzer Saludes</h5></a>
                      <p class="card-text">1st Year BS Information Technology Major in Web and Mobile Application Development</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card mb-3">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="assets/img/no-profile.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Clive Denzer Saludes</h5>
                      <p class="card-text">1st Year BS Information Technology Major in Web and Mobile Application Development</p>
                    </div>
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