<?php    

include "action/db_connect.php";
$id=$_GET['id'];
$sql="SELECT * FROM users WHERE company = 1 AND dept = $id";
$result = mysqli_query($connect, $sql);

echo"You have pick $id ";
// echo $tUsername;

?>

<!DOCTYPE html>



    <tbody>
        <?php
        if($result->num_rows > 0 ) {
            if($id == $id){
            while($row = $result->fetch_assoc()) {
                  echo "
                      <br> <a href='action/users_attend.php?id=".$row['id']."'>".$row['name']."</a>";
            
        }
    }
    }
            
        ?>


    
</html>