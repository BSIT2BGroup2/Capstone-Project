<?php 
    include('database/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flight Booking Training System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                <!-- Navbar -->
                <nav class="navbar navbar-light main-bar">
                    <div class="row">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span>
                            <h4>Flight Booking Training System</h4>
                        </span>
                    </div>
                </nav>
                
                <nav class="navbar navbar-light form-bar">
                    <div class="container-fluid">
                        <div class="rower">
                        <div class="row align-items-start">
                            <div class="col">
                                        <form action="" method="post">
                                            <div class="row flight-type">
                                                <div class="col-1">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flight_type" id="flexRadioDefault1" value="return" onclick="document.getElementById('return_date').disabled = false;" checked>
                                                        <label class="form-label" for="flexRadioDefault1">
                                                          Return
                                                        </label>
                                                      </div>
                                                </div>
                                                <div class="col-2">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flight_type" id="flexRadioDefault1" value="one_way" 
                                                        onclick="document.getElementById('return_date').disabled = true;">
                                                        <label class="form-label" for="flexRadioDefault1">
                                                        One-Way
                                                        </label>
                                                      </div>
                                                </div>
                                            </div>
                                            <div class="row rower1">
                                                <div class="col columns">
                                                    <div class="form-group flight">
                                                        <span class="form-label">Flying from</span>
                                                        <input class="form-control form-control-sm" list="location" id="input" name="origin">
                                                        <datalist id="location">
                                                            <?php 
                                                                $airport = mysqli_query($con, "SELECT * FROM airports");
                                                                while($row = mysqli_fetch_array($airport)):
                                                            ?>
                                                                <option value="<?php echo $row['iata_code']; ?>"><?php echo $row['airport_name']. ' - '. $row['city']; ?></option>
                                                            <?php endwhile; ?>
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group flight">
                                                        <span class="form-label">Flyning to</span>
                                                        <input class="form-control form-control-sm" list="location" id="input" name="destination">
                                                        <datalist id="location">
                                                            <?php 
                                                                $airport = mysqli_query($con, "SELECT * FROM airports");
                                                                while($row = mysqli_fetch_array($airport)):
                                                            ?>
                                                                <option value="<?php echo $row['iata_code']; ?>"><?php echo $row['airport_name']. '-'. $row['country_name']; ?></option>
                                                            <?php endwhile; ?>
                                                        </datalist>
                                                    </div>
                                                </div>
                                                <div class="col columns">
                                                    <div class="form-group dates">
                                                        <span class="form-label">Departing</span>
                                                        <input class="form-control form-control-sm" type="date" name="departing_date">
                                                    </div>
                                                </div>
                                                <div class="col columns dates">
                                                    <div class="form-group">
                                                        <span class="form-label">Returning</span>
                                                        <input class="form-control form-control-sm" type="date" name="return_date">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row rower2">
                                                <div class="col">
                                                    <div class="form-group flight-type">
                                                        <span class="form-label">Travel Class</span>
                                                        <select class="form-control form-control-sm" name="travel_class">
                                                            <option>Economy class</option>
                                                            <option>Business class</option>
                                                            <option>First class</option>
                                                        </select>
                                                        <span class="select-arrow"></span>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <span class="form-label">Adults <sub> (18+ years old)</sub></span>
                                                        <input class="form-control form-control-sm" type="number" name="adult" placeholder="1" min="1" value="1">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <span class="form-label">Children <sub>(2 - 12 years old)</sub></span>
                                                        <input class="form-control form-control-sm" type="number" name="child" placeholder="0" min="0">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <span class="form-label">Infant <sub>(2 - 12 months)</sub></span>
                                                        <input class="form-control form-control-sm" type="number" name="infant" placeholder="0" min="0">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <button class="form-control form-control-sm submit-btn btn" type="submit" name="submit">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End-->

                
            <?php 
                if(!isset($_POST['submit'])){
            ?>
                <main>
                    <div class="container">
                        <h2>Flight Search</h2>
                        <p>To start search enter Flying from and Flying to destinations.</p>
                    </div>
                    <?php 
                    }else{
                        
                        $origin = $_POST['origin'];
                        $destination = $_POST['destination'];
                        $departing_date = $_POST['departing_date'];
                        $return_date = $_POST['return_date'];
                        $adult = $_POST['adult'];
                        $child = $_POST['child'];
                        $infant = $_POST['infant'];
                        $flight_type = $_POST['flight_type'];
                        $travel_class = $_POST['travel_class'];

                        # Real Time Flight API
                        $queryString = http_build_query([
                            'access_key' => 'aa0fd0c2bef4782274efcc297d8ddc8e'
                        ]);
                        
                        $ch = curl_init(sprintf('%s?%s', 'http://api.aviationstack.com/v1/flights', $queryString));
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        
                        $json = curl_exec($ch);
                        
                        #print($json);
                        
                        curl_close($ch);
                        
                        $flights_data = json_decode($json, true);
                        
                    ?>
                    <div class="container">
                        <h2>Flights Found</h2>
                        <form action="">
                            <div class="table-responsive">
                                    <?php foreach($flights_data['data'] as $flights):
                                        if ($flights['departure']['iata'] == $origin) {
                                            if($flights['arrival']['iata'] == $destination) {
                                                ?>      
                                <div class="card">
                                    <div class="card-body">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Departure</th>
                                                    <th colspan="3" class="text-center"><?php echo $flights['flight_date']; ?></th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                                <td class="air text-break"><?php echo $flights['airline']['name']; ?></td>
                                                <div class="time">
                                                    <td class="text-right"><span class="text"><strong><?php echo $flights['departure']['iata']. ', ' .$flights['departure']['scheduled']; ?></strong></span><br><p><?php echo $flights['departure']['airport']; ?></p></td>
                                                    <td class="text-center"><?php echo $flights['departure']['scheduled']; ?></td>
                                                    <td class="text-left"><span class="text"><strong><?php echo $flights['arrival']['iata']. ', ' .$flights['arrival']['scheduled']; ?></strong></span><br><p><?php echo $flights['arrival']['airport']; ?></p></td>
                                                </div>
                                                    <td>
                                                        <div class="form-group">
                                                            <button class="form-control form-control-sm submit-btn btn" >Book</button>
                                                        </div></td>
                                            </tbody>
                                            <thead>
                                                <tr>
                                                    <th>Return</th>
                                                    <th colspan="3" class="text-center"><?php echo $flights['flight_date']; ?></th>
                                                </tr>
                                            </thead>    
                                            <tbody>
                                                <td class="air text-break"><?php echo $flights['airline']['name']; ?></td>
                                                <div class="time">
                                                    <td class="text-right"><span class="text"><strong><?php echo $flights['arrival']['iata']. ', ' .$flights['arrival']['scheduled']; ?></strong></span><br><p><?php echo $flights['arrival']['airport']; ?></p></td>
                                                    <td class="text-center"><?php echo $flights['departure']['scheduled']; ?></td>
                                                    <td class="text-left"><span class="text"><strong><?php echo $flights['departure']['iata']. ', ' .$flights['departure']['scheduled']; ?></strong></span><br><p><?php echo $flights['departure']['airport']; ?></p></td>
                                                </div>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                                        <?php
                                                    }
                                                }
                                            
                                            endforeach; ?>
                            </div>
                        </form>
                    </div>
                </main>
            <?php
                }
            ?>


            </div>
        </div>
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>