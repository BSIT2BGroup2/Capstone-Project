<!DOCTYPE html>
<html>
<head>

</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="img" value="">
        <button type="submit" name="submit" value="submit">Submit</button>
    </form>
        <?php
            include ('../admin/database/dbcon.php');
            $query = "SELECT * FROM airports";
            $result = mysqli_query($con, $query);

            while ($data = mysqli_fetch_assoc($result)):
        ?>
            <img src="../admin/assets/img/<?php echo $data['airport_img']; ?>" alt="">
            <?php endwhile; ?>
    
</body>
</html>

<?php 
    error_reporting(0);
    $msg = "";

    if(isset($_POST['submit'])){
        $filename = $_FILES['img']['name'];
        $tempname = $_FILES['img']['tmp_name'];
        $folder = "../admin/assets/img/". $filename;

        echo $filename." ".$tempname." ".$folder;

        $sql = "INSERT INTO airports (airport_img) VALUES ('$filename')";

        if(move_uploaded_file($tempname, $folder)){
            mysqli_query($con, $sql);
            echo"<h3> Image Uploaded Successfully </h3>";
        }else{
            echo"<h3> Failed to Upload Image </h3>";
        }
    }
?>