<?php 
    include ('../database/dbcon.php');

    #Add Airports
    if(isset($_POST['add_airport'])){
      
        $airport_name = $_POST['airport_name'];
        $iata_code = $_POST['iata_code'];
        $city = $_POST['city'];
        $airport_description = $_POST['airport_description'];
  
        if(!empty($_FILES["image"]["name"])){
          $airport_img = $_FILES["image"]["name"];
          $tempname = $_FILES["image"]["tmp_name"];
          $folder = ".assets/img/" . $airport_img;
  
          if(move_uploaded_file($tempname, $folder)){
            mysqli_query($con, "INSERT INTO airports (airport_name, iata_code, city, airport_description, airport_img)
            VALUES('$airport_name', '$iata_code', '$city', '$airport_description', '$airport_img')");
            echo "<script>window.location='../airport.php?msg=img_success'</script>";
          }else{
            echo "<script>window.location='../airport.php?msg=img_err'</script>";
          }
  
        }else{
          mysqli_query($con, "INSERT INTO airports (airport_name, iata_code, city, airport_description)
          VALUES('$airport_name', '$iata_code', '$city', '$airport_description')");
            echo "<script>window.location='../airport.php?msg=no_img'</script>";
          
        }
       
  
    }

    #Add Airlines
    if(isset($_POST['add_airline'])){
      $airline_name = $_POST['airline_name'];
      $iata_code = $_POST['iata_code'];
      $icao_code = $_POST['icao_code'];
      $airline_description = $_POST['airline_description']; 

      mysqli_query($con, "INSERT INTO airlines (airline_name, iata_code, icao_code, airline_description)
                        VALUES ('$airline_name','$iata_code','$icao_code','$airline_description')");
                        echo "<script>alert('Airline successfully added!'); window.location='airline.php'</script>";
    }

    if(isset($_POST['add_user'])){
      $account_id = $_POST['account_id'];
      $first_name = $_POST['first_name'];
      $middle_name = $_POST['middle_name'];
      $last_name = $_POST['last_name'];
      $address = $_POST['address'];
      $contact = $_POST['contact'];
      $email = $_POST['email'];
      $user_type = "Student";

      mysqli_query($con, "INSERT INTO users (account_id, first_name, middle_name, last_name, address, contact, email, user_type, password, confirm_password)
                    VALUES ('$account_id','$first_name','$middle_name','$last_name','$address','$contact','$email','$user_type','$account_id','$account_id')");
            echo "<script>window.location='../student.php?msg=success'</script>";
                    
    }
?>