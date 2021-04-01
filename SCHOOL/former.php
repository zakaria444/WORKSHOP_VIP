<?php 
include_once('database.php');
// $url=$_POST['url'];
$chek="SELECT * FROM `brief`";
$con=mysqli_query($link,$chek);

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
 <p class=>Students</p>
</div>
<div class=main_main>

<div class=main_left>

            <ul>
            <?php
    foreach ($con as $row)
    {

    echo $row["name_b"];
    
    } 


    // ?>

                   
                
            </ul>
        
</div>
<form class=main_auto action=""  >
    <p class=mainp>Invitation</p>
    <input class=main_email type="email"  name="email" placeholder="EMAIL">
    <button class=main_butt type="submit">Invite</button>
</form>
<div class=main_right></div>


</div>

<div class=main_brief>
<form class=brief action="connexion.php" method="POST">
    <p class=mainp>Create your Brief</p>
    <div class=input>
    <input class=main_email type="url"  name="url" placeholder="url">
    <a href="#" class=apload>Apload a file</a>
</div>
    <button class=main_butt type="submit">Invite</button>
</form>
</div>
<div class=main_brief>
<form class=brief>
    <p class=mainp>Validation</p>
    <div class=input>
    <input class=main_email type="text"  name="email" placeholder="Brief name">
    <input class=main_email type="text"  name="email" placeholder="Student Username">
    
    
    
</div>
    <button class=main_inv type="submit">Invite</button>
</form>
</div>



</main>
<div></div>

    
</body>
</html>