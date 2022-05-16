<?php  
$usuario = $_POST['txtUsuario'];
$senha = $_POST['txtSenha'];


if(($usuario == "adm") && ($senha == "123")){

    session_start();
    $_SESSION['login-session'] = $usuario;
    $_SESSION['senha-session'] = $senha;
    header("Location: ./area-restrita/index-area-restrita.php");
}else{
    header("Location: ./index.php");
}
?>