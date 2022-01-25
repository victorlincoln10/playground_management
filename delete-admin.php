<?php


require_once "inc/conn.inc.php";

$stmt = $conn->prepare("delete from tb_admin where id=:id_admin");

$id = $_POST['id_admin'];

$stmt->bindParam(':id_admin', $id_admin);
//LGPD - Lei Geral de Proteção de Dados
// Como alguém terceiro pode usar os seus dados. Os dados são seus.

if ($stmt->execute()) {
    echo "<script>alert('Dados excluídos com sucesso!');</script>";
}
