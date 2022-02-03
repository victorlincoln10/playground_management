<?php


require_once "inc/conn.inc.php";

/*=====================ADMIN===========================*/

if(isset($_GET['id_admin'])) {

    $id_admin = $_GET['id_admin'];
};

$stmt = $conn->prepare("DELETE FROM tb_admin WHERE id_admin = :id_admin");


$stmt->bindParam(':id_admin', $id_admin);
//LGPD - Lei Geral de Proteção de Dados
// Como alguém terceiro pode usar os seus dados. Os dados são seus.


if ($stmt->execute()) {
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
    header('Location: admin.php');
} else {
    echo "<script>alert('Dados não foram excluidos!');</script>";
    header('Location: admin.php');
}


/*=====================CRIANÇAS===========================*/
if(isset($_GET['id_crianca'])) {

    $id_crianca = $_GET['id_crianca'];
};

$stmt = $conn->prepare("DELETE FROM tb_clientes WHERE id_crianca = :id_crianca");

$stmt->bindParam(':id_crianca', $id_crianca);

if ($stmt->execute()) {
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
    header('Location: clientes.php');
} else {
    echo "<script>alert('Dados não foram excluidos!');</script>";
    header('Location: clientes.php');
}


/*=====================RESPONSAVEL===========================*/
if(isset($_GET['id_responsavel'])) {

    $id_responsavel = $_GET['id_responsavel'];
}


$stmt = $conn->prepare("DELETE FROM tb_responsavel WHERE id_responsavel = :id_responsavel");

$stmt->bindParam(':id_responsavel', $id_responsavel);

if ($stmt->execute()) {
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
    header('Location: responsavel.php');
} else {
    echo "<script>alert('Dados não foram excluidos!');</script>";
    header('Location: responsavel.php');
}