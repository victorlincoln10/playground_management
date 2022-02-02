<?php



//verifica se a variavel existe, e se é está vazia
if(isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

    require_once 'inc/conn.inc.php';
    require 'Usuario.php';

    $u = new Usuario();
    
    $login = addslashes($_POST['login']);
    $senha = addslashes($_POST['senha']);
    
    $u->loginUsuario($login, $senha);

} else {

    header('location: login.html');
}






 
?>






