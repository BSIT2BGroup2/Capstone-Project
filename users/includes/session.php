<?php
  session_start();
  if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    header("Location: users/index.php");
  }
?>