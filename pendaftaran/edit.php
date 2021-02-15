<?php
require_once "pendaftaran/config.php";
$id_register= $_POST["id_reg"];
$email= $_POST["email"];
$username= $_POST["username"];
$password= $_POST["password"];

$q = $database_connection->prepare("UPDATE `daftar` SET  `email` = ?, `username`=?, `password`=?  WHERE `daftar`.`id` = ?");
$q->execute([$email, $username, $password, $id_register]);
header("Location: ../profil.php");
?>