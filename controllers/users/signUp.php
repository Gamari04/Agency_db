<?php
      require __DIR__ .'/../../config/connection.php';
     include (__DIR__ .'/../../models/users.php') ;
     
        include(__DIR__ .'../../views/signUp.php');

        if(isset($_POST["addUser"])){
            $fullname =$_POST['fullname'];
            $email    =$_POST['email'];
            $role     ='Client';
            $password = password_hash($_POST["password"],PASSWORD_BCRYPT); 
            $resultat=signup($fullname,$email,$role, $password,$connexion);
           
if ($resultat) {
    
     header("Location: ../../views/login.php");
    
 } 
        }
 ?>


