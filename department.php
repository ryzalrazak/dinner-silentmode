<?php    

include "action/db_connect.php";

$sql="SELECT * FROM department";
$sql2="SELECT * FROM users WHERE company = 2";
$sql3="SELECT * FROM users WHERE company = 3";
$result3 = mysqli_query($connect, $sql3);
$result2 = mysqli_query($connect, $sql2);
$result = mysqli_query($connect, $sql);
$comp_name=$_GET['comp_name'];
echo"You have pick $comp_name ";
// echo $tUsername;

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Department </title>
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
               
                
                <!-- loop sini -->
                <?php
                if($result->num_rows > 0 ) {
                    if($comp_name == 'Silentmode'){
                ?>
                <h2 style="text-align: center;">Which Department are you from? </h2>
                <?php
                    while($row = $result->fetch_assoc()) {
                          echo "
                            
                          <a href='Staff.php?id=".$row['id']."' class='btn btn-outline-warning' role='button' style=' margin-bottom: 10px;'>".$row['dept_name']."</a>
        
                              ";
                        }
                    }
                }   
                if($comp_name == 'Celebshare'){
                 ?>
                  <h2 style="text-align: center;">Who are you? </h2>  
                <?php
                    while($row = $result2->fetch_assoc()) {
                        
                        echo "
                            
                         <a href='action/Accompany.php?id=".$row['id']."' class='btn btn-outline-warning' role='button' style=' margin-bottom: 10px;'>".$row['name']."</a>
                        ";
                  }
                }
                else if ($comp_name == 'Terato'){
                ?>
                  <h2 style="text-align: center;">Who are you? </h2>  
                <?php
                    while($row = $result3->fetch_assoc()) {
                        
                        echo "
                          
                         <a href='action/Accompany.php?id=".$row['id']."' class='btn btn-outline-warning' role='button' style=' margin-bottom: 10px;'>".$row['name']."</a>
                        ";
                  }
                }
            
               
                ?>
                

            </div>
        </div>
    </body>
</html>
