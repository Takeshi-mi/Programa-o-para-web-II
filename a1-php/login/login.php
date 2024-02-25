<?php
// Verificação se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar se os campos foram preenchidos (is set?)
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        
        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        // Verificar se o usuário e a senha correspondem (não tenho banco de dados, vou usar essas strings aí.)
        if ($username === 'usuario' && $password === 'senha') {
            echo "<h1 style= 'color:green; text-align:center; margin-top:200px;'> Login bem sucedido, bem vindo à sua conta. </h1> <br>";
    
        } else {
            // Login inválido - exibir uma mensagem de erro
            echo "<h1 style= 'color:red; text-align:center; margin-top:200px;'>Credenciais inválidas. Tente novamente.</h1>";
        }
    } else {
        // Campos de usuário ou senha não estão definidos(nunca chega aqui porque botei um required no hmtl)
        echo "Por favor, insira um usuário e senha.";
    }
}
?>
