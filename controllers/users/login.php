<?php

require __DIR__ .'/../../config/connection.php';
include (__DIR__ .'/../../models/users.php') ;
include('../../views/login.php');

if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = login($email, $password, $connexion);

    if ($user) {
        
        header("Location: ../../views/adminPannel.php");
      
    } else {
        
        echo 'Identifiants incorrects.';
    }
}
?>