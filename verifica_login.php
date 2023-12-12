<?php
// Iniciando a sessão (se ainda não estiver iniciada)
session_start();

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "nexus";

    // Conexão com o banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    // Verifica erros na conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Obtém os dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Proteção contra SQL Injection - Utilize prepared statements
    $query = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conexao->prepare($query);

    if ($stmt) {
        // Vincula os parâmetros e executa a query
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        // Obtém o resultado da consulta
        $result = $stmt->get_result();

        // Verifica se encontrou algum registro
        if ($result->num_rows > 0) {
            // Autenticação bem-sucedida, obtém os detalhes do usuário
            $usuario = $result->fetch_assoc();

            // Define a variável $nome com o nome do usuário
            $nome = $usuario['nome'];

            // Armazena o nome do usuário na sessão
            $_SESSION['nome'] = $nome;

            // Redireciona para a página de sucesso
            header("Location: home.php");
            exit();
        } else {
            // Credenciais inválidas, redireciona para a página de erro
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Erro na query: " . $conexao->error;
    }

    // Fecha a conexão com o banco de dados
    $conexao->close();
}
?>
