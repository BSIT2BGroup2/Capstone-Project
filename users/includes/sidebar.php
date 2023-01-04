<?php
    include ('database/dbcon.php');
    include ('includes/session.php');
    $id = $_SESSION['user_id'];
    $query = mysqli_query($con, "SELECT * FROM users WHERE user_id='$id'");
    $user = mysqli_fetch_array($query); 
    
?>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index.php" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light"><?php echo $user['user_type']; ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/images/no-profile.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="user_profile.php<?php echo '?id='.$id; ?>" class="d-block"><?php echo $user['first_name']." ".$user['last_name']; ?></a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="airports.php" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>Airports</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="airline.php" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>Airlines</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="flight_schedule.php" class="nav-link">
                        <i class="nav-icon fas fa-plane"></i>
                        <p>Flight Schedule</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tickets-airline"></i>
                        <p>
                            Manage Tickets
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="round_trip.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Round Trip</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="one_way.php" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>One-way Trip</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">USERS</li>
                <li class="nav-item">
                    <a href="student.php" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Students</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="nav-icon fas fa-log-out"></i>
                        <p>Log Out</p>
                    </a>
                </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>