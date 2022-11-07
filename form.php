
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
                <nav class="navbar navbar-light main-bar navbar-expand-lg">
                    <div class="row">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span>
                            <h4>Flight Booking Training System</h4>
                        </span>
                    </div>
                </nav>
                <!-- Navbar End-->
                <aside class="book-info">
                    <br>
                    <h4>Your Booking</h4>
                    <div>
                        <h6>1 Travaler<p>1 Adult</p></h6>
                        
                    </div>
                    <div>
                        <p>Wed 23 Nov 2022 <br>
                            <strong>10:00</strong> Manila (MNL) <br>
                            <strong>11:30</strong> Palawan (PPS) <br>
                            Total Duration 01h30m <br>
                            Fare Type: Economy</p>
                    </div>
                    <div>
                        
                        <p>Sat 26 Nov 2022 <br>
                            <strong>20:30</strong> Palawan (PPS) <br>
                            <strong>22:00</strong> Manila (MNL) <br>
                            Total Duration 01h30m <br>
                            Fare Type: Economy</p>
                    </div>
                </aside>
                
                <main  class="passenger-form">
                    <div class="container passenger">
                        <div class="card">
                            <div class="card-body">
                                <form action="">

                                    <!-- Adult Passenger Form-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Adult Passenger 1</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <p>Personal Information</p>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">Title</span>
                                                    <select name="" id="" class="form-control">
                                                        <option>---</option>
                                                        <option>Mr</option>
                                                        <option>Ms</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Date of Birth</span>
                                                    <input type="date" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">First/Given Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your First/Given Name">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Last Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your Last Name">
                                                </div>
                                            </div>
                                            <!-- <hr class="sidebar-divider">
                                            <div class="card-title">
                                                <p>Identification Document</p>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">Document Type</span>
                                                    <select name="" id="" class="form-control">
                                                        <option>---</option>
                                                        <option>Passenger Passport</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Document Number</span>
                                                    <input class="form-control" type="text" placeholder="Enter the Document Number">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Expiration Date</span>
                                                    <input type="date" name="" id="" class="form-control">
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>

                                    <!-- Child Passenger Form-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Child Passenger 1</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <p>Personal Information</p>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">Title</span>
                                                    <select name="" id="" class="form-control">
                                                        <option>---</option>
                                                        <option>Mist</option>
                                                        <option>Mstr</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Date of Birth</span>
                                                    <input type="date" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">First/Given Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your First/Given Name">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Last Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your Last Name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Infant Passenger Form-->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Infant Passenger 1</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">First/Given Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your First/Given Name">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Last Name</span>
                                                    <input class="form-control" type="text" placeholder="Enter your Last Name">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">Date of Birth</span>
                                                    <input type="date" name="" id="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Conformation -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Contact Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">E-mail</span>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Enter the Email Address">
                                                    <span class="form-label">Re-enter E-mail</span>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Please Confirm your E-mail">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Contact No.</span>
                                                    <input class="form-control" type="text" placeholder="Enter the Contact Number">
                                                </div>
                                            </div>
                                            <hr class="sidebar-divider">
                                            <div class="card-title">
                                                <h6>Emergency Contact</h6>
                                            </div>
                                            <div class="row">
                                                <div class="form-group">
                                                    <span class="form-label">Emergency Name</span>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Enter an Emergency Name">
                                                </div>
                                                <div class="form-group">
                                                    <span class="form-label">Emergency Contact Number</span>
                                                    <input class="form-control" type="text" placeholder="Enter the Emergency Contact Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="form-control form-control-sm submit-btn btn" >Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>

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