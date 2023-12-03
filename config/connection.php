<?php
require __DIR__ .'../../vendor/autoload.php';



$dotenv=\Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$serverName=$_ENV['DB_SERVERNAME'];
$userName=$_ENV['DB_USERNAME'];
$password=$_ENV['DB_PASSWORD'];
$dbName=$_ENV['DB_NAME'];

$connexion=mysqli_connect($serverName, $userName, $password, $dbName);
if (!$connexion) {
    die('failed'.mysqli_connect_error());
}else{
    echo'connected';
}


?>