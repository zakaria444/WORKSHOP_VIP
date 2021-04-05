<?php
include_once('database.php');
$url=$_POST['url'];
$insert="INSERT INTO `brief`( name_b) VALUES ('$url')";
$query=mysqli_query($link, $insert);
header("location:former.php");

?>