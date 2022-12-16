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


        <?php
        if($result->num_rows > 0 ) {
            if($comp_name == 'Silentmode Sdn Bhd'){
            while($row = $result->fetch_assoc()) {
                  echo "
                    
                  <br> <a href='users_silentmode.php?id=".$row['id']."'>".$row['dept_name']."</a>

                      ";
            }
        }
    }
        if($comp_name == 'Celebshare'){
            
            while($row = $result2->fetch_assoc()) {
                
                echo "
                    
                    <br> <a href='action/users_attend.php?id=".$row['id']."'>".$row['name']."</a>
";
          }
        }
        else if ($comp_name == 'Terato'){
            while($row = $result3->fetch_assoc()) {
                
                echo "
                  
                    <br> <a href='action/users_attend.php?id=".$row['id']."'>".$row['name']."</a>
";
          }
        }
    
       
        ?>

    
    
</html>