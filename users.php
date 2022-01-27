<?php

require_once 'inc/con.inc.php';

$login = $_POST['login'];
$senha = $_POST['senha'];

 
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($dados['enviarLogin'])) {
    //var_dump($dados);
    $query_usuario = "SELECT * FROM tb_login WHERE login =:login LIMIT 1";
    $result_usuario = $conn->prepare($query_usuario);
    $result_usuario->bindParam(':login', $dados['login'], PDO::PARAM_STR);
    $result_usuario->execute();

    if(($result_usuario) AND ($result_usuario->rowCount() != 0)){
        $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
        //var_dump($row_usuario);
        if(password_verify($dados['senha'], $row_usuario['senha'])){
            $_SESSION['id_admin'] = $row_usuario['id_admin'];
            $_SESSION['nome'] = $row_usuario['nome'];
            header("Location: index.php");
        }else{
            $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
        }
    }else{
        $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Usuário ou senha inválida!</p>";
    }

    
}

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>







?>