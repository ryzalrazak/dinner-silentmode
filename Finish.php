<?php   


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
        <title>Finish</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        
        <!-- Masthead-->
        <div style="width:mx-auto; height:mx-auto;" >
            <header class="masthead"  >
                <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center" >
                    <div class="d-flex justify-content-center">
                        <div class="center">
                            <img src="assets/img/Logo-dinner.png" alt="silentmode dinner" >
                            <div class="d-flex justify-content-center">
                                <div class="text-center">
                                    <h1 class="mx-auto my-0 text-uppercase">THANKYOU</h1>
                                    
                                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Get ready to pose at 360 photo booth</h2>
                                    <a class="btn btn-primary" href="index.php">lets Rock</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>
        </div>
       
        
    </body>
</html>
