<?php
// Dados para conexão com o banco 
$servername = "localhost"; // Host do banco 
$username = "root"; // usuário do banco de dados
$password = ""; // Senha do banco
$dbname = "nexus"; // Nome do banco 


$conexao = new mysqli($servername, $username, $password, $dbname);


if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>
