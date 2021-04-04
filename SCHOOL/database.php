<?php

// se connecter à MySQL
$link = mysqli_connect('localhost', 'root', '', 'SCHOOL' );

// tester la connexion
if(mysqli_connect_error()){
    echo 'erreur de connexion : '. mysqli_connect_error();
    die();
}