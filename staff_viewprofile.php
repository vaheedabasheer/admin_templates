<?php
include 'connection.php';
session_start();
$id=$_SESSION['id'];
// var_dump($id);
// exit();
$data=mysqli_query($con,"SELECT * FROM `register` INNER JOIN login ON register.rid=login.rid  WHERE login.rid='$id'");
$row=mysqli_fetch_assoc($data);
$name=$row['name'];
// var_dump($name);
// exit();
$dob=$row['dob'];
$gender=$row['gender'];
$email=$row['email'];
$data1=mysqli_query($con,"SELECT * FROM `register` INNER JOIN fileup ON register.rid=fileup.rid  WHERE register.rid='$id'");
$row1=mysqli_fetch_assoc($data1);
// $file=$row1['file'];

// var_dump($file);
// exit();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
                 <!-- Sidebar Start -->
        <?php
        include 'staff_sidebar.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
 <?php
 include 'staff_nav.php';
 ?>
            <!-- Navbar End -->
            <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4 ">
                            <h1 class="mb-4 text-center">Profile</h1>
                            <form>
                            <div class="text-center "><img  class="rounded-circle" src="images/<?php echo $row1['file']; ?>"  height="200" width="200"></div>
                            <br><br>    
                            <div class="row mb-3">
                                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($name)?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="dob" class="col-sm-2 col-form-label">Date Of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date" class="form-control" id="dob" value="<?php echo htmlspecialchars($dob)?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="gender" value="<?php echo htmlspecialchars($gender)?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email)?>">
                                    </div>
                                </div>
                                                                <!-- <button type="submit" class="btn btn-primary">Sign in</button> -->
                            </form>
                        </div>
                    </div>


            
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>