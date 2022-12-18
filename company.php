<?php   
echo"PICK YOUR COMPANY"; 

include "action/db_connect.php";

$sql="SELECT * FROM company";
$result = mysqli_query($connect, $sql);
// echo $tUsername;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Company </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/newstyles.css" rel="stylesheet" />

    </head>
    <body >

        <div class="sidenav" style="padding-left: 20px;padding-right: 20px;padding-top: 60px;">
            <img src="assets/img/Logo-dinner.png" alt="silentmode dinner" >
            
        </div>
        
        <div class="main">
            
            <div style="padding-top: 5cm; padding-left: 1cm; ">
                <h2 style="text-align: center;">I am from ...</h2>

                <?php
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                          echo "
                           <a href='Department.php?comp_name=".$row['comp_name']."' class='btn btn-outline-warning' role='button' style=' margin-bottom: 10px;' >".$row['comp_name']."</a>
                             ";
                    }
                  } else {
                    echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
                  }
                ?>
                <!-- <a href="Department.html" class="btn btn-outline-warning" role="button">Link Button</a>
                
                <button type="button" class="btn btn-outline-warning" style="  margin-bottom: 10px;">Warning</button> -->
                

            </div>
        </div>
    </body>
</html>
