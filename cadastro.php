<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: painel.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Sistema PHP</title>
    <link rel="stylesheet" href="./CSS Global/style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="logo">
                👤
            </div>
            <h1>Cadastro</h1>
            <p class="subtitulo">Preencha os campos abaixo para criar sua conta</p>
            <form action="cadastrar.php" method="POST">
                <div class="campo">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome"
                    placeholder="Digite seu nome completo" required>
                </div>
                <div class="campo">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="campo">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="btn-login">Cadastrar</button>
            </form>
            <p class="cadastro-link">
                Já tem uma conta? <a href="index.php">Faça login aqui</a>
            </p>
        </div>
    </div>
</body>
</html>
