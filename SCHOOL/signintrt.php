<?php
include_once('database.php');
if (isset($_REQUEST["btn"])) {
 
     if(isset($_POST['user']) && isset($_POST['pswdee'])){
        $user= htmlspecialchars($_REQUEST['user']);
        $pswdee= htmlspecialchars($_REQUEST['pswdee']);
        $query = "SELECT * FROM former WHERE email_f='$user'AND password_f='$pswdee'";
        $results = mysqli_query($link, $query);
        $row= mysqli_num_rows($results);
if(mysqli_num_rows($results)  > 0){

    header('location:former.php');
}
$query_student = "SELECT * FROM student WHERE email_s='$user'AND password_s='$pswdee'";
        $results_student = mysqli_query($link, $query_student);
       if(mysqli_num_rows($result_student) > 0 ){

        header('location:signin.php');
        }
       




}

}




?>