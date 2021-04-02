<?php 

include "database.php" ;



    if(isset($_POST['sendSolution'])){

       $_POST['sendSolution'];

$briefname =$_POST['briefname'];
$b_url =$_POST['b_url'];


    if(!empty($briefname) && !empty($b_url)){

     $S_insert ="INSERT INTO `solution`(`b_name`,`s_url`)VALUES('$briefname','$b_url')";
     mysqli_query($link,$S_insert);

    }else{
        header("location:student.php?msg=enter your brief name and brief URL");
    }die(!isset($send));






}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/font-awesome.css">
    <link rel="stylesheet" href="CSS/student.css" <?php echo time(); ?>>
    <title>Document</title>
</head>

<body>

        <header>
            <h2>BFSLearning</h2>
                <div class="navBar">
                    <a class="aboutUs" href="">About Us</a>

                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>

                    <div class="username">Username</div>
                    <details>
                           <summary></summary>
                             <a class="logout" href="#">Log Out</a>
                    </details>
                    
                </div>


        </header>
    
                    <h3 class="titles" id="uniqueTitle">Brief</h3>

        
                <div class="biefList">

                <div class="image_BriefName">

                <i class="fa fa-briefcase" id="iconBrief" aria-hidden="true"></i>

                <h4 class="briefName">brief name</h4>
                
                </div>

                </div>



                <div class="creation">

                <h3 class="titles">Solution Brief</h3>

                    <form action="student.php" method="post">

                        <input type="text" name="briefname">
                        <input type="text" name="b_url">
                        <input type="submit" name="sendSolution" value="send solution">
                        <?php if(isset($_GET['msg'])){  echo $_GET['msg']; } ?>

                    </form>




                </div>





        </div>

        <h3 class="titles" id="Titlevalidation">Validation list</h3>

        <div class="validation">

                <div>
                    <img src="" alt="">
                    <h4 class="briefName">brief name</h4>
                </div>




        </div>

</body>
</html>