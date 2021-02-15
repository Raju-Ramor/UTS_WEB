<?php
require_once "config.php";

try{
    $sql = 'SELECT * FROM `daftar`';

    $q = $database_connection ->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}