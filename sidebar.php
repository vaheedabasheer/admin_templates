<?php
include 'connection.php';
session_start();
$id=$_SESSION['rid'];
$file=$_SESSION['file'];
$name=$_SESSION['name'];
?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="images/<?php echo $file;?>"   alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $name;?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Registration</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Staff Slary</a>
                        <div class="dropdown-menu bg-transparent border-0">
                         <!-- <a href="button.html" class="dropdown-item">Buttons</a> -->
                            <a href="salary_add.php" class="dropdown-item">Add staff Salary</a>
                            <a href="salary_view.php" class="dropdown-item">View Staff Salary </a> 
                        </div>
                    </div>
                    <a href="registration_view.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>view Registration</a>
                    <a href="file_uploading.php" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>File Uploading</a>
                    <a href="view.php" class="nav-item nav-link"><i class="far fa-file-alt me-2"></i>View</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a> -->
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> --> 
                    <div class="nav-item dropdown">
                        <!-- <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a> -->
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>