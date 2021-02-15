<?php
    
        $database_host = "localhost";
        $database_username = "root";
        $database_password = "";
        $database = "wisata";

    
        try{
            //sintaks berhasil?  
            $database_connection= new PDO("mysql:host=$database_host;dbname=$database",
            $database_username, $database_password); 
            $cek = "Koneksi Berhasil";
           //  echo $cek;
           }catch(PDOException $x){
           die($x->getMessage());
           }
        
     
     
    ?>