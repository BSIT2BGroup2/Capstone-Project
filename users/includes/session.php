<?php 
session_start(); 
if (!isset($_SESSION['user_id'])){
    header('location:dashboard.php');
}else{
    header('location:index.php');
}
$id=$_SESSION['user_id'];
?>