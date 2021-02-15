<?php
require_once 'config.php';

try{
$sql = 'SELECT * FROM `daftar` ORDER BY `username` ASC';
$q = $database_connection -> query($sql);
$q->setFetchMode(PDO::FETCH_ASSOC);
}catch(PDOException $e){
die("Tidak Bisa Membuka Database $database :" . $e->getMessage());
}

?>