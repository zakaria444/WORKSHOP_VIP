<?php
include_once('database.php');
$id=(int)$_GET['id_b'];
echo $id ;
$sele="SELECT `name_b` FROM `brief` WHERE `id_brief`=$id ";
$quer=mysqli_query($link,$sele);
$row = mysqli_fetch_assoc($quer);


$name=$_POST['url'];
$update="UPDATE `brief` SET `name_b`='$name' WHERE `id_brief`=$id";
$query=mysqli_query($link,$update);



?>


<form action="trt.php?id_b=<?php echo $id ; ?>" method="POST">
<input class=main_email type="url"  name="url" placeholder="url" value="<?php echo $row['name_b'] ;  ?>">
<button  name="update" type="submit">UPdate</button>
</form>


