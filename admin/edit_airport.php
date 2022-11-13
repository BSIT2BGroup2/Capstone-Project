<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $id = $_GET['airport_id'];

    $airport = mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$id'");
    $row = mysqli_fetch_array($airport);
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit <?php echo $row['airport_name']; ?> Details</h1>
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
          <div class="row"><!-- Floating Labels Form -->
              <form class="row g-3 needs-validation" novalidate action="edit.php" method="post">
                <input type="text" name="airport_id" value="<?php echo $row['airport_id']; ?>" hidden>
                <div class="col-md-12">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" name="airport_name" placeholder="Airport Name" value="<?php echo $row['airport_name']; ?>" required>
                    <label for="floatingName">Airport Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingIata"  name="iata_code" placeholder="IATA Code" value="<?php echo $row['iata_code']; ?>" required>
                    <label for="floatingIata">IATA Code</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" name="city" placeholder="City"  value="<?php echo $row['city']; ?>" required>
                      <label for="floatingCity">City</label>
                    </div>
                  </div>
                </div>
                <!--
                <div class="col-12">
                  <label class="col-sm-2 col-form-label">Airlines</label>
                    <div class="col-sm-12">
                      <select class="form-select" multiple aria-label="multiple select example"  name="airlines[]" required>
                        <option disabled>Hold Crtl button to Select Multiple Airline</option>
                        <?php 
                          $airline = mysqli_query($con, "SELECT * FROM airlines");
                          while ($row = mysqli_fetch_array($airline)):
                        ?>
                          <option Value="<?php echo $row['airline_id'];?>"><?php echo $row['airline_name']; ?></option>
                        <?php  endwhile; ?>
                      </select>
                    </div>
                </div>
                <div class="col-12">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Airport Picture</label>
                    <div class="col-sm-12">
                      <input class="form-control" type="file" id="formFile"  name="airport_img" value="<?php echo $row['airport_img']; ?>">
                    </div>
                  </div> -->
                <div class="col-12">
                  <div class="form-group">
                      <label for="title" class="text-label">Description</label>
                        <textarea class="form-control" placeholder="Description"  name="airport_description" style="height: 100px;" value="<?php echo $row['airport_description']; ?>"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <a href="airport.php" class="btn btn-secondary"><i class="bi bi-pencil-square"></i>Cancel</a>
                  <button type="submit" class="btn btn-primary" name="edit_airport" value="edit_airport">Submit</button>
                </div>
              </form><!-- End floating Labels Form -->
          </div>
        </div>
      </div>
    </section>

</main><!-- End #main -->

<?php
    include ('includes/footer.php');

    

    
?>