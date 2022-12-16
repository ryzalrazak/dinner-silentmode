<?php 

require_once 'db_connect.php';

if($_GET) {
	$id=$_GET['id'];
    $accompany=$_GET['accompany'];

	

	$sql  = "UPDATE users SET accompany = '$accompany' WHERE id = '$id'";
	if($connect->query($sql) === TRUE) {
		echo "<script>window.alert('Yay dah check in');
         window.location.href='../company.php';</script>";
       
	} 
	else {
		echo "Erorr while updating record : ". $connect->error;
	}


}

?>