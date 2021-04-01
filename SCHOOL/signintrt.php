<?php
include_once('database.php');
if (isset($_REQUEST["btn"])) {
 
    // if(isset($_POST['email']) && isset($_POST['password'])){
        $user= htmlspecialchars($_REQUEST['user']);
        $pswdee= htmlspecialchars($_REQUEST['pswdee']);
        $query = "SELECT * FROM former WHERE email_f='$user'AND password_f='$pswdee'";
        $query1 = "SELECT * FROM student WHERE email_s='$user'AND password_s='$pswdee'";
        $results = mysqli_query($link, $query);
        $row= mysqli_num_rows($results);
        $results1 = mysqli_query($link, $query1);
        $row1= mysqli_num_rows($results1);
            
    
    if($row > 0){
        header('location:former.php');

       }
       
       else{
        header('location:signin.php');
       }

if($row1 > 0){
    header('location:student.php');

   }
   
   else{
    header('location:signin.php');
   }

}




?>