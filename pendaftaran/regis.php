<?php 
include_once "config.php";

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $q = $database_connection->prepare("INSERT INTO `daftar` (`id`,  `email`, `username`, `password`) VALUES (NULL,  ?, ?, SHA1(?));");
$q->execute([ $email, $username,$password]);

      header('location: ../login.php');
    
?>