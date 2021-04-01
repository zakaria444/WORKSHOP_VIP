<?php
include_once('database.php');

?>

<!DOCTYPE htm
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Sign-in</title>
    <link rel="stylesheet" href="signin.css echo time(); ?>">
    <link rel="stylesheet" href="signin.css">
  </head>
  <body>
    <img class="imglogo" src="img/o.png" alt="logo">  
    <a href="signup.php"><input class="signupi" type="submit"  nam="insrc"  value="SIGN-UP"></a>

  <form action="signintrt.php" method="post">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" name="user" placeholder="Username">
  </div>

  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" name="pswdee" placeholder="Password">
  <input type="submit"  name="btn" class="btn" value="Sign in">
</div>
</form>
  </body>
</html>