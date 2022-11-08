<?php 
session_start(); 
if (!isset($_SESSION['user_id'])){
header('location:dashbaord.php');
}
$id=$_SESSION['user_id'];
?>