<?php
include 'connection.php';
session_destroy();
header("location:staff_login.php");
?>