<?php 
    include ('../database/dbcon.php');
    
    #Airport Delete
    if(isset($_POST['delete_airport'])){
        $airport_id = $_POST['airport_id'];
        mysqli_query($con,"DELETE FROM airports WHERE airport_id = '$airport_id' ");
  
        echo "<script>window.location='../airport.php?msg=delete'</script>";
      }

    #Airline Delete
      if(isset($_POST['delete_airline'])){
        $airline_id = $_POST['airline_id'];
        mysqli_query($con,"DELETE FROM airlines WHERE airline_id = '$airline_id' ");
  
        echo "<script>window.location='../airline.php?msg=delete'</script>";
      }
?>