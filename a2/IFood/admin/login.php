<?php
session_start();
// Verificação se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar se os campos foram preenchidos (is set?)
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        
        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        // Verificar se o usuário e a senha correspondem (não tenho banco de dados, vou usar essas strings aí.)
        if ($username === 'usuario' && $password === 'senha') {
            //echo "<h1 style= 'color:green; text-align:center; margin-top:200px;'> Login bem sucedido, bem vindo à sua conta. </h1> <br>";
            //direcionar para tela de login
            $_SESSION['usuario'] = $username;
            //header("location: principal.php");
           
            echo "<script> location = 'principal.php'; </script>";
    
        } else {
            // Login inválido - exibir uma mensagem de erro e redirecionar para a tela de login
            //echo "<script> alert('Usuário ou senha incorretos'); </script>";
            //echo "<script> location = '../index.php?secao=ademiro'; </script>";
            header("location: ../index.php?secao=ademiro&erro=1");
           
        }
    } else {
        // Campos de usuário ou senha não estão definidos(nunca chega aqui porque botei um required no hmtl)
        echo "Por favor, insira um usuário e senha.";
    }
}
?>
