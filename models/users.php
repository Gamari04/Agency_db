<?php
        require '../../config/connection.php';
    
        function signup($fullname,$email,$password,$connexion){
            
            $query = "INSERT INTO `user`(`name`, `email`, `password`) VALUES ('$fullname','$email','$password')";
            $result = mysqli_query($connexion,$query);
        return $result;
        }

        // users.php (models/users.php)

       function login($email, $password, $connexion) {
    $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($connexion, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        
        if (password_verify($password, $user['password'])) {
            return $user;
        }
    }

    return false;
}

?>

    
<!-- function createUser($connexion, $firstName, $lastName, $email, $password) {
    // Valider et nettoyer les données si nécessaire

    // Hasher le mot de passe
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Préparer et exécuter la requête SQL
    $query = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($connexion, $query);

    mysqli_stmt_bind_param($stmt, 'ssss', $firstName, $lastName, $email, $hashedPassword);
    $result = mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    return $result;
} -->




        