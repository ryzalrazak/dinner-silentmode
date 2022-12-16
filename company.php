<?php   
echo"PICK YOUR COMPANY"; 

include "action/db_connect.php";

$sql="SELECT * FROM company";
$result = mysqli_query($connect, $sql);
// echo $tUsername;

?>

<!DOCTYPE html>


        <?php
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                  echo "
                      
                  <br>  <a href='department.php?comp_name=".$row['comp_name']."'>".$row['comp_name']."</a>
                     ";
            }
          } else {
            echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
          }
        ?>

    


    
</html>