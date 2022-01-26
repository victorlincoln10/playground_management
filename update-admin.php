<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=db_park", "root", "");
require_once "inc/conn.inc.php";
//$id = addslashes($_GET["id"]);
$id = 2;
$stmt = $conn->prepare("update tb_admin set login=:login, senha=:senha,nome=:nome, email=:email, cpf=:cpf, celular=:celular where id_admin=:id_admin");

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

if ($stmt->execute()) {
    echo "Dados alterados com sucesso!";
}
