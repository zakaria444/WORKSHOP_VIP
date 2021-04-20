<?php 
include_once('database.php');
// $url=$_POST['url'];
$chek="SELECT * FROM `brief`";
$con=mysqli_query($link,$chek);


$sele="SELECT * FROM `student`";
$stude=mysqli_query($link,$sele);

$solution1="SELECT * FROM `solution`";
$solution=mysqli_query($link,$solution1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/former.css?v=<?php echo time();?>">
    <title>PAGE FORMER</title>
</head>
<body>
    <div class =headerz >
<h3 class=logoz>BFSlearning</h3>
<div class=detailsz>
<a class=logout href="#"> About us</a>
<details>
<summary class = summaryz>username</summary>
<a class=logout href="#"> logout</a>
</details>
</div>
</div>
<main>
<div class=header_main>
 <p class=title_brif>Brifes</p>
 <p class=title_brif>Students</p>
</div>
<div class=main_main>

<div class=main_left>

<ul>
            <?php foreach ($con as $row): ?>
                <li><?php echo $row['name_b']; ?></li>
            <a href="trt.php?id_b=<?php echo $row['id_brief'] ?>"
            >Update</a>
            <?php endforeach; ?>
            
            
</ul>
            
        
</div>

<form class=main_auto action="invet.php" method="POST" >
    <p class=mainp>Invitation</p>
    
    <input class=main_email type="email"  name="email" placeholder="EMAIL">
    <input class="pd" type="password" name="pswd" placeholder="Password">
    <button class=main_butt type="submit">Invite</button>
</form>
<div class=main_right></div>
            <?php
    foreach ($stude as $row)
    {
    echo $row["name_s"];
    
    } 
     ?>
  </ul>
</div>

<div class=main_brief>
<form class=brief action="connexion.php" method="POST">
    <p class=mainp>Create your Brief</p>
    <div class=input>
        <div>  <input  class="nmbrf" type="text" name="nmbrf" placeholder="Name of Brief "></div>
    <input class=main_email type="url"  name="url" placeholder="url">
    <!-- <a href="#" class=apload>Apload a file</a> -->
</div>
    <button class=main_butt type="submit">Invite</button>
</form>
</div>
<div class=main_brief>



<form class="brief" action="validation.php" method="POST">
    <p class="mainp">Validation</p>
    <?php
    foreach ($solution as $row) {
   

    echo $row["b_name"];
    echo $row["s_url"];

    } 
     ?>
    <div class="input">

    <!-- <input class=main_email type="text"  name="email" placeholder="Brief name"> -->
    <select name="val">
    <option name="valide" value="Valide">Valide</option>
    <option  name="invalide" value="Invalide" >Invalide</option>
</select>
    <button class=main_inv type="submit" name="submit">Invite</button>
</form>

</div>



</main>
<div></div>

    
</body>
</html>