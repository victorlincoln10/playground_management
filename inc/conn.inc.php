<?php

    try{

        $conn = new PDO("mysql:host=localhost;dbname=db_park", "root", "");
    
    } catch(PDOException $e) {
       
        $e->getMessage();
   
    }
   
    return $conn;
