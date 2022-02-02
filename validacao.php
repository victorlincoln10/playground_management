<?php

  // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
  if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
      header("Location: index.php"); exit;
  }

  require_once "inc/conn.inc.php";

  $usuario = mysql_real_escape_string($_POST['login']);
  $senha = mysql_real_escape_string($_POST['senha']);



  ?>