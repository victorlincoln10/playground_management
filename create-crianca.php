<?php

require_once "inc/conn.inc.php";

$stmt = $conn->prepare('INSERT INTO tb_admin(nome_crianca, contato_crianca, sexo_crianca, tempo, nome_responsavel) 
VALUES (:nome_crianca, :contato_crianca, :sexo_crianca, :tempo, :nome_responsavel)');

$nome_crianca = $_POST['nome_crianca'];
$contato_crianca = $_POST['contato_crianca'];
$sexo_crianca = $_POST['sexo_crianca'];
$tempo = $_POST['tempo'];
$nome_responsavel = $_POST['nome_responsavel'];

$stmt->bindParam(':nome_crianca', $nome_crianca);
$stmt->bindParam(':contato_crianca', $contato_crianca);
$stmt->bindParam(':sexo_crianca', $sexo_crianca);
$stmt->bindParam(':nome_responsavel', $nome_responsavel);

$results = $stmt->execute();

if ($results > 0) {
    "<script> 
    alert('Criança cadastrado com sucesso!')
    </script>";
    header("Location: ./index.php");
} else {
    echo 
    "<script> 
        alert('Inválido!')
    </script>";
    header("Location: ./index.php");

}

?>