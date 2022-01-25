<?php
//$conn não é mais uma variável, agora é um objeto.
//$conn = new PDO("mysql:host=localhost;dbname=fiap_db", "fiap", "fiap");
require_once "inc/conn.inc.php";
//$id = addslashes($_GET["id"]);
$id = 2;
$stmt = $conn->prepare("update tb_events set title=:title, local_event=:local_event,start_at=:start_at, end_at=:end_at, site=:site where id=:id");


$title = "Fiap Summit 2021";
$local_event = "Unidade Lins";
$start_at = "2021-10-27 19:30";
$end_at = "2021-10-27 21:30";
$site = "https://www.fiap.com.br";

$stmt->bindParam(":title", $title);
$stmt->bindParam(":local_event", $local_event);
$stmt->bindParam(":start_at", $start_at);
$stmt->bindParam(":end_at", $end_at);
$stmt->bindParam(":site", $site);
$stmt->bindParam(":id", $id);

if ($stmt->execute()) {
    echo "Dados alterados com sucesso!";
}
