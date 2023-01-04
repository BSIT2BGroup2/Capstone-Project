<?php include ('includes/header.php'); 
        include ('database/dbcon.php');
        $id = $_GET['airline_id'];
        $query = mysqli_query($con,"SELECT * FROM airlines WHERE airline_id = '$id'");
        $airline = mysqli_fetch_array($query);
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Airline Form</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <form action="" method="post"  enctype="multipart/form-data" id="quickForm">
            <div class="card card-default">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="AirlineName">Airline Name</label>
                                <input type="text" class="form-control" id="AirlineName" name="airline_name" value="<?php echo $airline['airline_name']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="IataCode">IATA Code</label>
                                <input type="text" class="form-control" id="IataCode" name="iata_code" value="<?php echo $airline['iata_code']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="IcaoCode">ICAO Code</label>
                                <input type="text" class="form-control" id="IcaoCode" name="icao_code" value="<?php echo $airline['icao_code']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Airline Logo</label>
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="<?php echo $airline['airline_img']; ?>">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="AirlineDescription">Airline Description</label>
                            <textarea id="summernote" name=airline_description cols="30" rows="2"><?php echo $airline['airline_description']; ?>
                            </textarea>
                        </div>
                        
                      <div class="card-footer">
                      <button type="submit" class="btn btn-primary" name="edit_airline" value="edit_airline">Submit</button>
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

<?php 
  include ('includes/footer.php'); 
  include ('database/dbcon.php');
  

    #Add Airline
    if(isset($_POST['edit_airline'])){
      $airline_name = $_POST['airline_name'];
      $iata_code = $_POST['iata_code'];
      $icao_code = $_POST['icao_code'];
      $airline_description = addslashes(htmlentities($_POST['airline_description']));
      if(!empty($_FILES['image']['name'])){
          $airline_img = $_FILES['image']['name'];
          $tempname = $_FILES['image']['tmp_name'];
          $folder = '../dist/airline_img/'.$airline_img;

          if(move_uploaded_file($tempname, $folder)){
              mysqli_query($con, "UPDATE airlines SET airline_name='$airline_name', iata_code='$iata_code', icao_code='$icao_code', airline_description='$airline_description', airline_img='$airline_img'
                            WHERE airline_id = '$id'");
              echo "<script>window.location='airline.php?msg=edit_success'</script>";
          }else{
              echo "<script>window.location='airline.php?msg=edit_error'</script>";
          }
      }else{
        mysqli_query($con, "UPDATE airlines SET airline_name='$airline_name', iata_code='$iata_code', icao_code='$icao_code', airline_description='$airline_description'
                      WHERE airline_id = '$id'");
          echo "<script>window.location='airline.php?msg=edit_success'</script>";
      }
  }
?>