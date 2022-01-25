<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=fiap_db", "fiap", "fiap");
require_once "inc/conn.inc.php";

$stmt = $conn->prepare("insert into admin(login, senha, nome, email, cpf, celular) values (:login, :senha, :nome, :email, :cpf, :celular)");


$login = "admin";
$senha = "Unidade Lins";
$nome = "john kevin";
$email = "kevinbfv@gmail.com";
$cpf = "000-555-533-33";
$celular = "2021-10-26 21:30";
$data = "2022-10-26 21:30";

$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha", $senha);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":email", $cpf);
$stmt->bindParam(":cpf", $celular);
$stmt->bindParam(":celular", $data);

if ($stmt->execute()) {
    echo "Dados cadastrados com sucesso!";
}
