<?php 

include 'database.php';
$sql = "INSERT INTO users(fullname, email, phone)VALUES('".$_POST['fullname']."','".$_POST['email']."','".$_POST['phone']."')";
if(mysqli_query($con,$sql)){
	header('Location:index.php');
}else{
	echo"Error".mysqli_error($con);
}
?>