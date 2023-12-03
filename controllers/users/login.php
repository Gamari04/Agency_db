<?php
if (isset($_POST["login"])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = login($email, $password, $connexion);

    if ($user) {
        // Authentification réussie
        // Rediriger l'utilisateur vers la page d'accueil ou autre
        header("Location: ../../views/about.php");
        exit();
    } else {
        // Informations de connexion incorrectes
        echo 'Identifiants incorrects.';
    }
}
?>