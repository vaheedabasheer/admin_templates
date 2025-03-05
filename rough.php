<?php
include 'connection.php';
session_start();
$id=$_SESSION['rid'];
$data=mysqli_query($con,"SELECT * FROM `register` INNER JOIN login ON register.rid=login.rid INNER JOIN fileup ON fileup.rid=login.rid WHERE $id='rid'");
$row=mysqli_fetch_assoc($data);
$name=$row['name'];
$dob=$row['dob'];
$gender=$row['gender'];
$email=$row['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Horizontal Form</h6>
                            <form>
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
                                                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
</body>
</html>