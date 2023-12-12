<?php
// Inicializa a sessão
session_start();

// Destroi todas as variáveis de sessão
$_SESSION = array();

// Se necessário, desativa o cookie de sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Destroi a sessão
session_destroy();

// Redireciona para a página de login ou outra página desejada após o logout
header("Location: home.php"); // Altere 'login.php' para a página de login do seu sistema
exit();
?>
