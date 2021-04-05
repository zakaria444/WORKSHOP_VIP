<?php
include_once('database.php');
$email=$_POST['email'];
$psw=$_POST['pswd'];
$insert="INSERT INTO `student`( `email_s`,`password_s`) VALUES ('$email','$psw')";
$query=mysqli_query($link, $insert);
header("location:former.php");

?>