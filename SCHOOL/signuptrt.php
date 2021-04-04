<?php
include_once('database.php');

$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];

$user = $_POST['name'];
        $eml =  $_POST['email'];
        $pswd =  $_POST['pwd'];
if (isset($_POST['regeistre'])) {

   if (!empty($_POST['name']) && !empty($_POST['email'])   && !empty($_POST['pwd'])  ) {
        $user = $_POST['name'];
        $eml =  $_POST['email'];
        $pswd =  $_POST['pwd'];
        
        $uq = "INSERT INTO `former`(`name_f`, `email_f`, `password_f`)
            VALUES('$user' , '$eml','$pswd')";
      mysqli_query($link, $uq);
        header('Location: former.php');
    }
   
    else{
        header('Location:signup.php');
    }
}


?>