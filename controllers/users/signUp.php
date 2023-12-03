<?php
      require __DIR__ .'/../../config/connection.php';
     include (__DIR__ .'/../../models/users.php') ;
     
        include(__DIR__ .'../../views/signUp.php');

        if(isset($_POST["addUser"])){
            $fullname =$_POST['fullname'];
            $email    =$_POST['email'];
            $password = password_hash($_POST["password"],PASSWORD_BCRYPT); 
            $resultat=signup($fullname,$email, $password,$connexion);
           // Vérifier si l'inscription a réussi
if ($resultat) {
     // Rediriger vers la page de connexion après l'inscription réussie
     header("Location: ../../views/login.php");
      // Assurez-vous de terminer le script après la redirection
 } else {
     // Gérer l'échec de l'inscription (peut-être afficher un message d'erreur, etc.)
     echo 'Erreur lors de l\'inscription.';
 }
        }

        ?>

<!-- // controller.php

include('model.php');
include('view.php');

function processSignup($connexion) {
    // Récupérer les données du formulaire
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Valider et nettoyer les données
    // ...

    // Appeler la fonction du modèle pour créer un nouvel utilisateur
    $result = createUser($connexion, $firstName, $lastName, $email, $password);

    // Vous pouvez ajouter d'autres logiques de traitement ici

    return $result;
} -->
