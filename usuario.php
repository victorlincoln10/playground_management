<?php

require_once 'inc/conn.inc.php';


    $login = $_POST['login'];
    $senha = $_POST['senha'];


    if(!$login == " " || !$senha == " ") {
        echo "Você deve digitar sua senha e login";
        exit;
    }

    $stmt = $conn->prepare("SELECT * FROM tb_admin WHERE login = :login AND senha = :senha");
    
    $stmt->bindValue("login", $login);
    $stmt->bindValue("senha", $senha);

    $results = $stmt->execute(); 

    if($results != 0) {
        
        if($senha === $senha) {
            
            $_SESSION['loginSession'] = $_POST['login'];
            
            header("location: index.php");
        }

    } else {
        return false;
        header("location: index.html");
    }



    

   

    


?>