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
              <form class="row g-3 needs-validation" novalidate action="" method="post">
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
                        <textarea class="form-control" placeholder="Description"  name="airport_description" style="height: 100px;" value="<?php echo $row['airport_description']; ?>" required></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End floating Labels Form -->
          </div>
        </div>
      </div>
    </section>

</main><!-- End #main -->

<?php
    include ('includes/footer.php');

    

    if(isset($_POST['submit'])){
      $airport_name = $_POST['airport_name'];
      $iata_code = $_POST['iata_code'];
      $city = $_POST['city'];
      $airport_description = $_POST['airport_description'];
        #foreach($_POST['airlines'] as $value){
        #  $airlines.= $value.", ";
        #}
      
      mysqli_query($con, "UPDATE airports SET airport_name = '$airport_name', iata_code = '$iata_code', city = '$city', airport_description = '$airport_description'
                             WHERE airport_id = '$id'");
      echo "<script>alert('Airport successfully Updated!'); window.location='airport.php'</script>";
    }
?>