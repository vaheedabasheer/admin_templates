<?php
include 'connection.php';
$id=$_GET['rid'];
// var_dump($id);
// exit();
mysqli_query($con,"UPDATE register SET status='Approved' WHERE register.rid='$id'");
echo "<script>window.location.href='registration_view.php';</script>";

?>