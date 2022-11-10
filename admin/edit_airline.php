<?php 
    include ('includes/header.php');
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $id = $_GET['airline_id'];

    $airline = mysqli_query($con, "SELECT * FROM airlines WHERE airline_id = '$id'");
    $row = mysqli_fetch_array($airline);
?>

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit <?php echo $row['airline_name']; ?> Details</h1>
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
                    <input type="text" class="form-control" id="floatingName" name="airline_name" placeholder="Airline Name" value="<?php echo $row['airline_name'];?>" required>
                    <label for="floatingName">Airline Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="floatingIata" name="iata_code" placeholder="IATA Code" value="<?php echo $row['iata_code'];?>" required>
                    <label for="floatingIata">IATA Code</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity"  name="icao_code" placeholder="ICAO"value="<?php echo $row['icao_code'];?>" required>
                      <label for="floatingCity">ICAO</label>
                    </div>
                  </div>
                </div>
                <!-- 
                <div class="col-12">
                  <label for="inputNumber" class="col-sm-2 col-form-label">Airline Picture</label>
                    <div class="col-sm-12">
                      <input class="form-control" type="file" id="formFile"  name="airline_img" value="<?php echo $row['airline_img'];?>">
                    </div>
                  </div> -->
                <div class="col-12">
                  <div class="form-group">
                      <label for="title" class="text-label">Description</label>
                      
                        <textarea class="form-control" placeholder="Description"  name="airline_description" style="height: 100px;" value="<?php echo $row['airline_description'];?>" required></textarea>
                      
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
      $airline_name = $_POST['airline_name'];
      $iata_code = $_POST['iata_code'];
      $icao_code = $_POST['icao_code'];
      $airline_description = mysqli_real_escape_string($con, $_POST['airline_description']) ; 

      mysqli_query($con, "UPDATE airlines SET airline_name = '$airline_name', iata_code = '$iata_code', icao_code = '$icao_code', airline_description = '$airline_description'
                            WHERE airline_id = '$id'");
                        echo "<script>alert('Airline successfully updated!'); window.location='airline.php'</script>";
    }
?>