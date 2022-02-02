<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=fiap_db", "root", "");

/* ================ TABELA ADMIN ================ */
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
    exit;
} else {
    echo 
    "<script> 
        alert('Inválido!')
    </script>";
    header("Location: ./index.php");

}

/* ================ TABELA CLIENTES ================ */

$stmt = $conn->prepare('INSERT INTO tb_clientes(nome_crianca, contato_crianca, sexo_crianca, idade_crianca, tempo, nome_responsavel) 
VALUES (:nome_crianca, :contato_crianca, :sexo_crianca, :idade_crianca, :tempo, :nome_responsavel)');

$nome_crianca = $_POST['nome_crianca'];
$contato_crianca = $_POST['contato_crianca'];
$sexo_crianca = $_POST['sexo_crianca'];
$idade_crianca = $_POST['idade_crianca'];
$tempo = $_POST['tempo'];
$nome_responsavel = $_POST['nome_responsavel'];

$stmt->bindParam(':nome_crianca', $nome_crianca);
$stmt->bindParam(':contato_crianca', $contato_crianca);
$stmt->bindParam(':sexo_crianca', $sexo_crianca);
$stmt->bindParam(':idade_crianca', $idade_crianca);
$stmt->bindParam(':tempo', $tempo);
$stmt->bindParam(':nome_responsavel', $nome_responsavel);

$results = $stmt->execute();

if ($results > 0) {
    "<script> 
    alert('Criança cadastrado com sucesso!')
    </script>";
    header("Location: ./clientes.php");
    exit;
} else {
    echo 
    "<script> 
        alert('Inválido!')
    </script>";
    header("Location: ./clientes.php");
    exit;

}

/* ================ TABELA RESPONSAVEL ================ */


$stmt = $conn->prepare("INSERT INTO tb_responsavel (nome_responsavel, , cpf_responsavel, rg_responsavel, enndereco_responsavel) VALUES (:nome_responsavel, :cpf_responsavel, :rg_responsavel, :endereco_responsavel)");

$nome_responsavel = $_POST['nome_responsavel'];
$cpf_responsavel = $_POST['cpf_responsavel'];
$rg_responsavel = $_POST['rg_responsavel'];
$endereco_responsavel = $_POST['endereco_responsavel'];


$stmt->bindParam(':nome_responsavel', $nome_responsavel);
$stmt->bindParam(':cpf_responsavel', $cpf_responsavel);
$stmt->bindParam(':rg_responsavel', $rg_responsavel);
$stmt->bindParam(':endereco_responsavel', $endereco_responsavel);


$results = $stmt->execute();

if ($results > 0) {
    "<script> 
    alert('Admin cadastrado com sucesso!')
    </script>";
    header("Location: ./responsavel.php");
    exit;
} else {
    echo 
    "<script> 
        alert('Inválido!')
    </script>";
    header("Location: ./responsavel.php");
    exit;

}




?>