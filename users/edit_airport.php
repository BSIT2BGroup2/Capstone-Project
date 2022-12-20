<?php include ('includes/header.php'); 
        include ('includes/navbar.php');
        include ('includes/sidebar.php');
        include ('database/dbcon.php');
        $id = $_GET['airport_id'];
        $query = mysqli_query($con, "SELECT * FROM airports WHERE airport_id = '$id'");
        $airport = mysqli_fetch_array($query);
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Airport Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <form action="" method="post" novalidate  enctype="multipart/form-data" id="quickForm">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="airportName">Airport Name</label>
                                <input type="text" class="form-control" id="airportName" name="airport_name" value="<?php echo $airport['airport_name']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="IataCode">IATA Code</label>
                                <input type="text" class="form-control" id="IataCode" name="iata_code" value="<?php echo $airport['iata_code']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="City">City</label>
                                <input type="text" class="form-control" id="City" name="city"  value="<?php echo $airport['city']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Airport Logo</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image"  value="<?php echo $airport['airport_img']; ?>">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="airportDescription">Airport Description</label>
                            <textarea id="summernote" name=airport_description  value="<?php echo $airport['airport_description']; ?>">
                            </textarea>
                        </div>
                        
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary" name="edit_airport" value="edit_airport">Submit</button>
                    </div>
                    </div>
                </div>
            </div>
        </form>

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

<?php include ('includes/footer.php');
  
    #Add Airport
    if(isset($_POST['edit_airport'])){
      $airport_name = $_POST['airport_name'];
      $iata_code = $_POST['iata_code'];
      $city = $_POST['city'];
      $airport_description = $_POST['airport_description'];
      if(!empty($_FILES['image']['name'])){
          $airport_img = $_FILES['image']['name'];
          $tempname = $_FILES['image']['tmp_name'];
          $folder = '../dist/airport_img/'.$airport_img;

          if(move_uploaded_file($tempname, $folder)){
            mysqli_query($con, "UPDATE airports SET airport_name='$airport_name', iata_code='$iata_code', city='$city', airport_description='$airport_description', airport_img='$airport_img'
                          WHERE airport_id = '$id'");
              echo "<script>window.location='airports.php?msg=edit_success'</script>";
          }else{
              echo "<script>window.location='airports.php?msg=edit_error'</script>";
          }
      }else{
        mysqli_query($con, "UPDATE airports SET airport_name='$airport_name', iata_code='$iata_code', city='$city', airport_description='$airport_description'
                      WHERE airport_id = '$id'");
          echo "<script>window.location='airports.php?msg=edit_success'</script>";
      }
  }?>
