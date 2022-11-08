<?php
include('database/dbcon.php');
include('includes/session.php');

$logout_query=mysqli_query($con,"select * from users where user_id='$id'");
$row=mysqli_fetch_array($logout_query);
$user=$row['name'];
session_start();
session_destroy();

header('location:index.php?msg=logout');

?>