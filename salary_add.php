<?php
include 'connection.php';
$data=mysqli_query($con,"SELECT * FROM register ");
if(isset($_POST['submit']))
{
$rid=$_POST['sel'];

$month=$_POST['month'];

$job=$_POST['job'];

$salary=$_POST['salary'];
// var_dump($salary);
// exit();
mysqli_query($con,"INSERT INTO `salary`(`rid`, `month`, `salary`, `job`) VALUES ('$rid','$month','$salary','$job')");

echo "<script>alert ('inserted successfully');</script>";
}
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
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <?php
        include 'sidebar.php';
        ?>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
 <?php
 include 'navbar.php';
 ?>
            <!-- Navbar End -->
             <form action="" method="POST"> 
            
            <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4 text-center">Staff Salary Insertion</h6>
                            <ul class="list-group list-group-flush">
                                <table>
                                 
                                <select class="form-select mb-3" aria-label="Default select example" name="sel" required>
                                <option >   Name</option>
                       <?php
                       while($row=mysqli_fetch_assoc($data)){
                       ?>
                                <option value="<?php echo $row['rid'];?>"><?php echo $row['name'];?></option>
                               <?php
                       }
                               ?>
                            </select>
                                </div>
                                <div class="row mb-3">
                                    <label for="month" class="col-sm-2 col-form-label">Month</label>
                                    <div class="col-sm-10">
                                        <input type="month" name="month" class="form-control" id="month" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="job" class="col-sm-2 col-form-label">Job</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="job" class="form-control" id="job" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="Salary" class="col-sm-2 col-form-label">Salary</label>
                                    <div class="col-sm-10">
                                        <input type="number" name="salary" class="form-control" id="Salary" required>
                                    </div>
                                </div>
                              
                                <tr>
                                <td> </td>
                               <td> 
                              
                               <button class="btn btn-outline-danger w-100 m-2"  type="submit" name="submit">Add</button>
                    </td>  
                            </tr>
                                </table>
                                </form>  
                            </ul>
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