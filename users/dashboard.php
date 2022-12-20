<?php include ('includes/header.php'); 
    include ('includes/navbar.php');
    include ('includes/sidebar.php');
    include ('database/dbcon.php');

    $airports = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS total FROM airports"));
    $airlines = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS total FROM airlines"));
    $students = mysqli_fetch_array(mysqli_query($con, "SELECT COUNT(*) AS total FROM users WHERE user_type = 'Student'"));
        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Users Box -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3><?php echo $students['total']; ?></h3>

                                    <p>Users</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                            <div class="inner">
                                    <h3><?php echo $airports['total']; ?></h3>

                                <p>Airports</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-primary">
                            <div class="inner">
                                    <h3><?php echo $airlines['total']; ?></h3>

                                <p>Airlines</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-plane"></i>
                            </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>70</h3>

                                <p>Book Ticket</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-ticket"></i>
                            </div>
                            </div>
                        </div>
                    <!-- ./col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

<?php include ('includes/footer.php');?>