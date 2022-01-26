<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=fiap_db", "root", "");
require_once "inc/conn.inc.php";

$stmt = $conn->prepare("INSERT INTO tb_admin(login, senha, nome, email, cpf, celular) VALUES (:login, :senha, :nome, :email, :cpf, :celular)");


$login = $_POST['login'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$celular = $_POST['celular'];


$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":cpf", $cpf);
$stmt->bindParam(":celular", $celular);

$results = $stmt->execute();

if ($results > 0) {
    "<script> 
    alert('Admin cadastrado com sucesso!')
    </script>";
    header("Location: ./index.php");
} else {
    echo 
    "<script> 
        alert('Inválido!')
    </script>";
    header("Location: ./index.php");

}

