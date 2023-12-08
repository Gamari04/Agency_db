<?php

        require '../../config/connection.php';
    
        function signup($fullname,$email,$role,$password,$connexion){
            
            $query = "INSERT INTO `user`(`name`, `email`, `role`, `password`) VALUES (?, ?, ?, ?)";
            $stmt = mysqli_prepare($connexion, $query);
            mysqli_stmt_bind_param($stmt, 'ssss', $fullname, $email, $role, $password);
            $result = mysqli_stmt_execute($stmt);
        
           
             return $result;
        } 

        

       function login($email, $password, $connexion) {
    $query = "SELECT * FROM `user` WHERE email = '$email' LIMIT 1 ";
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

    




        