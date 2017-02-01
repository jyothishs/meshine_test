<?php
session_start();
include ('../config/databases.php');

if(!empty($_POST['username']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['hobbie']) && !empty($_POST['file']) && !empty($_POST['country']))

	 {
	


$fname=$_POST['username'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$hobbies=$_POST['hobbie'];
$file=$_POST['file'];
$country=$_POST['country'];
mysqli_query($con,"update table employe_tb values(null,'$fname','$phone','$email','$gender','$hobbies','$file','$country')");
}
else
{
	echo "not";
}

?>