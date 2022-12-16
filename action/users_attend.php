<?php 

require_once 'db_connect.php';

if($_GET) {
    $id=$_GET['id'];
    $attend_status = 'Yes';


	$sql  = "UPDATE users SET attend_status = '$attend_status' WHERE id = '$id'" ;
    $sql2 = "SELECT * FROM users WHERE id='$id' AND company != 1";
    $result = mysqli_query($connect, $sql2);
    
	if($connect->query($sql) === TRUE) {
		echo "THIS IS WHERE YOU PUT YOUR ACCOMPANY <br>";
            

        echo' <form action="complete.php" method="get">
        <input type = "hidden" name="id" value='.$id.'><br>
        <input type="radio" name="accompany" value="alone" onchange="this.form.submit()"> Alone <br>
        <input type="radio" name="accompany" value="spouse" onchange="this.form.submit()"> Spouse <br>
        <input type="radio" name="accompany" value="spouse_child" onchange="this.form.submit()"> Spouse and Child <br>


       
         </form>';
       
        if ($result->num_rows > 0){
            echo "<script>window.alert('yay thank you');
            window.location.href='../company.php';</script>";
        }
	} 
	else {
		echo "Erorr while updating record : ". $connect->error;
	}



   
 


}
?>