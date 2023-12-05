<?php
        require '../../config/connection.php';
    
        function signup($fullname,$email,$role,$password,$connexion){
            
            $query = "INSERT INTO `user`(`name`, `email`, `role`,`password`) VALUES ('$fullname','$email','$role','$password')";
            $result = mysqli_query($connexion,$query);
           
             return $result;
        } 


       function login($email, $password, $connexion) {
    $query = "SELECT * FROM `user` WHERE email = '$email' ";
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

    




        