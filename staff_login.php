<?php
include 'connection.php';
session_start();
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    // var_dump($pass);
    // exit();
   
    $data=mysqli_query($con,"SELECT * FROM  `login` WHERE email='$email' AND password='$pass'");
    $ses=mysqli_fetch_assoc($data);
    $id=$ses['rid'];
    // var_dump($id);
    // exit();
    $data1=mysqli_query($con,"SELECT * FROM `register` INNER JOIN `login` ON register.rid=login.rid WHERE login.rid='$id'");
    $ses1=mysqli_fetch_assoc($data1);
    $_SESSION['name']=$ses1['name'];
    $_SESSION['id']=$ses1['rid'];

    // $name= $_SESSION['name'];
    // var_dump($name);
    // exit();
   if(mysqli_num_rows($data)>0)
    { 
        $type=$ses1['type'];
        // var_dump($type);
        // exit();
        // $a=$ses['email'];
        // var_dump($a);
        // exit();
        // $_SESSION['email']=$ses['email']; 
        
if($type=='admin')
{
    $data3=mysqli_query($con,"SELECT * FROM `register` INNER JOIN fileup ON register.rid=fileup.rid WHERE register.rid='$id'");
    if(mysqli_num_rows($data3)>0)
    {
       
        $ses1=mysqli_fetch_assoc($data3);
        // $name=$ses1['name'];
        //  var_dump($name);
        // exit();
        
        $_SESSION['id']=$ses1['rid'];
        $_SESSION['file']=$ses1['file'];
        $_SESSION['name']=$ses1['name'];
        $name=$ses1['name'];
        $type=$ses1['type'];
        header("location:admin_index.php");

    }
    else
    {
        header("location:admin_index.php");

    }

}
else{

    $data2=mysqli_query($con,"SELECT * FROM `register` INNER JOIN fileup ON register.rid=fileup.rid WHERE register.rid='$id'");
   $ses1=mysqli_fetch_assoc($data2);
    // $_SESSION['id']=$ses1['rid'];
    // $i=$ses1['rid'];
    // var_dump($i);
    // exit();
    $_SESSION['file']=$ses1['file'];
    // $_SESSION['name']=$ses1['name'];
    $name=$ses1['name'];
    $type=$ses1['type'];
    header("location:staff_index.php");
    

}    
    }
    else
    {
        echo "<script>alert ('invalid email or password');</script>";
        
    }
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


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                            </a>
                            <h3>Sign In</h3>
                        </div>
                        <form action="" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password" required>
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div>
                        <button  name="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                        </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="registration.php">Sign Up</a></p>
                    </div>
                </div>
            </div>
        </div>
       
        <!-- Sign In End -->
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