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
    
            <h3 id="uniqueTitle">Briefs</h3>

        
                <div class="biefList">

                    <div class="containerdiv1">

                    <?php 

                        $select1 = "SELECT b_name from brief";

                        $result = mysqli_query($link,$select1);

                        if ($execution_results = mysqli_num_rows($result) > 0) {
                            

                            while($row = mysqli_fetch_assoc($result)) {
                                ?>
                             <tr>
                                <td><?= $row['id'] ?></td>
                                

                                

                        
                            
                          
                        

                   
                    
                    </div>

                </div>



                

                

                <form class="creation" action="student.php" method="post">

                        <h3 class="titles" id="Titlesolution">Solution Brief</h3>

                        <input class="briefname" type="text" name="briefname" placeholder="brief name">
                        <input class="b_url" type="text" name="b_url" placeholder="brief URL">
                        <input class="sendSolution" type="submit" name="sendSolution" value="send solution">
                        <p class="pnotice"><?php if(isset($_GET['msg'])){  echo $_GET['msg']; } ?></p>

                </form>




                





        

        <h3 class="titles" id="titlevalidation">Validation list</h3>

        <div class="validation">

            <div class="containerdiv2" >

                <div class="image_BriefName2">

                    <i class="fa fa-briefcase" id="iconBrief" aria-hidden="true"></i>
                    
                    <h4 class="briefName">brief name</h4>

                </div>

            </div>


        </div>

</body>
</html>