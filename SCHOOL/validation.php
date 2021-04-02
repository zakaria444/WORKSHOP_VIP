<?php
include_once('database.php');


$val=$_POST['val'];


        $insert="INSERT INTO `validation`(`validation`) VALUES ('$val')";
         $query=mysqli_query($link, $insert);

    

// header("location:former.php");



?>