<?php
   require __DIR__ .'/../../config/connection.php';
   include (__DIR__ .'/../../models/admin.php') ;
   include(__DIR__ .'/../../views/adminPannel.php');
   
if (isset($_POST["submit"])) {
    $fullname =$_POST["fullname"];
    $email = $_POST["email"];
    $role = 'Client';

    $result = addClient($connexion, $fullname, $email, $role);

    if ($result) {
        header("location:../../views/adminPannel.php?msg=added to the database successfully");
    } else {
        echo "error";
    }
}
?>