<?php
session_start();
require __DIR__ .'/../../config/connection.php';
include (__DIR__ .'/../../models/users.php') ;
include('../../views/login.php');

if (isset($_POST["login"])) {
 
    
    $email =filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        echo("$email is a valid email address");
      } else {
        echo("$email is not a valid email address");
      }
    $password = $_POST['password'];


    $user = login($email, $password, $connexion);   


if ($user) {
    $_SESSION['role'] = $user['role']; 
    
    if ( $_SESSION['role'] == 'admin') {
        header("Location: ../../views/adminPannel.php");
        exit();
    } else if ( $_SESSION['role'] == 'Client') {
        header("Location: ../../views/services.php");
        exit();
    }
} else {
    echo 'Identifiants incorrects.';
}
}
?>