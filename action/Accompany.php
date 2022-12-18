<?php 

require_once 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Accompany </title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link href="css/newstyles.css" rel="stylesheet" />

    </head>
    <body >

        <div class="sidenav" style="padding-left: 20px;padding-right: 20px;padding-top: 60px;">
            <img src="../assets/img/Logo-dinner.png" alt="silentmode dinner" >
            
        </div>
        
        <div class="main">
            
            <div style="padding-top: 5cm; padding-left: 1cm; ">
                <h2 style="text-align: center;">Who are you with?</h2>

                <?php 
                if($_GET) {
                    $id=$_GET['id'];
                    $attend_status = 'Yes';
                
                
                    $sql  = "UPDATE users SET attend_status = '$attend_status' WHERE id = '$id'" ;
                    $sql2 = "SELECT * FROM users WHERE id='$id' AND company != 1";
                    $result = mysqli_query($connect, $sql2);
                    
                    if($connect->query($sql) === TRUE) {
                
                        echo' <form action="complete.php" method="get">
                        <input type = "hidden" name="id" value='.$id.'><br>
                        <input type="radio" name="accompany" value="alone" onchange="this.form.submit()"> Alone <br>
                        <input type="radio" name="accompany" value="spouse" onchange="this.form.submit()"> Spouse <br>
                        <input type="radio" name="accompany" value="spouse_child" onchange="this.form.submit()"> Spouse and Child <br>
                
                
                       
                         </form>';
                       
                        if ($result->num_rows > 0){
                            echo "<script>window.alert('yay thank you');
                            window.location.href='../Finish.php';</script>";
                        }
                    } 
                    else {
                        echo "Erorr while updating record : ". $connect->error;
                    }
                
                }
                 
                ?>
            </div>
        </div>
    </body>
</html>
