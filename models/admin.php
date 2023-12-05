<?php

require '../../config/connection.php';


function addClient($connection, $fullname, $email, $role) {
    $query = "INSERT INTO `user`(`fullname`, `email`, `role`) VALUES ('$fullname','$email','$role')";
    $result = mysqli_query($connection, $query);
    return $result;
}
?> 