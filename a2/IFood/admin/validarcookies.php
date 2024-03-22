<?php
//ao utilizar cookies, o usuário não pode fazer logout e depois conseguir acessar a página de adm sem logar de novo. 
    include_once("../dao/manipuladados.php");
    $manipula = new manipuladados();

    // verifica se a variável foi iniciada
    if (IsSet($_COOKIE["nome_usuario"]))
    $nome_usuario = $_COOKIE["nome_usuario"]; 

    if (IsSet($_COOKIE["senha_usuario"]))
    $senha_usuario = $_COOKIE["senha_usuario"];

    if (!(empty($nome_usuario) or empty($senha_usuario)))
    {
        $linhas = $manipula->validarLogin($nome_usuario,$senha_usuario);

        if($linhas == 0)
        {
            //setcookie("",$nome_usuario,$senha_usuario);
            setcookie("nome_usuario");
            setcookie("senha_usuario");
            header("location: ../index.php?secao=ademiro");
            exit;
        }

    }
    else{
        header("location: index.php");
    }