<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Configurações do banco
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "nexus";

    // Conexão com o banco
    $conexao = new mysqli($host, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    //dados do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
    $stmt = $conexao->prepare($query);

    if ($stmt) {
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $usuario = $result->fetch_assoc();

            //nome do usuário
            $nome = $usuario['nome'];

            // Armazena o nome do usuário na sessão
            $_SESSION['nome'] = $nome;

            // Redireciona para home
            header("Location: home.php");
            exit();
        } else {
            header("Location: login.php");
            exit();
        }
    } else {
        echo "Erro na query: " . $conexao->error;
    }

    $conexao->close();
}
?>
