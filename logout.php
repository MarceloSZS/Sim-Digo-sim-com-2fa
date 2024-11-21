<?php
session_start(); // Inicia a sessão

// Verifica e encerra a conexão com o banco de dados se estiver aberta
if (isset($conn) && $conn instanceof mysqli) {
    $conn->close();
}

// Verifica se a sessão do usuário está ativa e a destrói
if (isset($_SESSION['usuario_id'])) {
    session_unset(); // Limpa as variáveis de sessão
    session_destroy(); // Destrói a sessão atual
    header("Location: login.php"); // Redireciona para a página de login
    exit(); // Garante o encerramento do script
} else {
    // Redireciona para o login caso nenhuma sessão esteja ativa
    header("Location: login.php");
    exit();
}
?>
