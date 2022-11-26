<?php 
    include ('../database/dbcon.php');
     #User Profile Edit
    if(isset($_POST['edit_profile'])){
        $user_id = $_POST['user_id'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $last_name = $_POST['last_name'];
        $address = $_POST['address'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        
        mysqli_query($con, "UPDATE users SET first_name = '$first_name', middle_name = '$middle_name', last_name = '$last_name', address = '$address', contact = '$contact', email = '$email'
                            WHERE user_id = '$user_id'");
                        echo "<script>window.location='../user_profile.php?msg=success'</script>";
    }

    #User Password Edit
    if(isset($_POST['edit_password'])){
        
        $user_id = $_POST['user_id'];
        $old_pass = $_POST['pass'];
        $password = $_POST['old_pass'];
        $new_password = $_POST['new_pass'];
        $confirm_password = $_POST['confirm_pass'];
        
        if ($old_pass != $password) {
            echo "<script>window.location='user_profile.php?msg=invalid_pass'</script>";
        }
        else{
            if($new_password != $confirm_password){
                echo "<script>window.location='../user_profile.php?msg=invalid_pass_confirm'</script>";
            }else{       
                mysqli_query($con," UPDATE users SET password='$new_password', 
                confirm_password='$confirm_password' WHERE user_id = '$user_id' ");
                echo "<script>window.location='../user_profile.php?msg=success_pass'</script>";
            }
            }
        }

        #Airline Details Edit
    if(isset($_POST['edit_airline'])){
        $airline_id = $_POST['airline_id'];
        $airline_name = $_POST['airline_name'];
        $iata_code = $_POST['iata_code'];
        $icao_code = $_POST['icao_code'];
        $airline_description = mysqli_real_escape_string($con, $_POST['airline_description']) ; 
        if(!empty($_FILES["image"]["name"])){
            $airline_img = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "../assets/airline_img/" . $airline_img;

            if(move_uploaded_file($tempname, $folder)){
                mysqli_query($con, "UPDATE airlines SET airline_name = '$airline_name', iata_code = '$iata_code', icao_code = '$icao_code', airline_description = '$airline_description', airline_img = '$airline_img'
                                WHERE airline_id = '$airline_id'");
                echo "<script>window.location='../airline.php?msg=edit'</script>";
            }
        }
    
        mysqli_query($con, "UPDATE airlines SET airline_name = '$airline_name', iata_code = '$iata_code', icao_code = '$icao_code', airline_description = '$airline_description'
                                WHERE airline_id = '$airline_id'");
                echo "<script>window.location='../airline.php?msg=edit'</script>";
        }
    
        #Airport Details Edit
    if(isset($_POST['edit_airport'])){
        $airport_id = $_POST['airport_id'];
        $airport_name = $_POST['airport_name'];
        $iata_code = $_POST['iata_code'];
        $city = $_POST['city'];
        $airport_description = $_POST['airport_description'];
            #foreach($_POST['airlines'] as $value){
            #  $airlines.= $value.", ";
            #}
        if(!empty($_FILES["image"]["name"])){
            $airport_img = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];
            $folder = "../assets/airport_img/" . $airport_img;

            if(move_uploaded_file($tempname, $folder)){
                mysqli_query($con, "UPDATE airports SET airport_name = '$airport_name', iata_code = '$iata_code', city = '$city', airport_description = '$airport_description', airport_img = '$airport_img'
                                WHERE airport_id = '$airport_id'");
                                echo "<script>window.location='../airport.php?msg=edit'</script>";
            }
        }
        
        mysqli_query($con, "UPDATE airports SET airport_name = '$airport_name', iata_code = '$iata_code', city = '$city', airport_description = '$airport_description'
                                WHERE airport_id = '$airport_id'");
                                echo "<script>window.location='../airport.php?msg=edit'</script>";
        }
?>