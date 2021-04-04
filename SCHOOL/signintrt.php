<?php
include_once('database.php');
if (isset($_REQUEST["btn"])) {
 
     if(isset($_POST['user']) && isset($_POST['pswdee'])){
        $user= htmlspecialchars($_REQUEST['user']);
        $pswdee= htmlspecialchars($_REQUEST['pswdee']);
        $query1 = "SELECT * FROM student WHERE email_s='$user'AND password_s='$pswdee'";
        $results = mysqli_query($link, $query);
        $row= mysqli_num_rows($results);
       

    if($row > 0){
        header('location:former.php');

       }
       
       else{
        header('location:signin.php');
       }


}

}




?>