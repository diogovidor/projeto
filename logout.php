<?php
// Inicializa  sessão
session_start();


$_SESSION = array();

//Desativa o cookies da sessão
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}


session_destroy();

// Redireciona para a página de home
header("Location: home.php"); 
exit();
?>
