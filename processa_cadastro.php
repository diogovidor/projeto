<?php
include 'conexao.php'; // Arquivo com a conexão ao banco


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário e faz a validação 
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cidade = $_POST['cidade'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $rua = $_POST['rua'];
    $estado = $_POST['estado'];
    $numero_casa = $_POST['numero_casa']; 
    $telefone = $_POST['telefone'];
    $bairro = $_POST['bairro'];

   
    $query = "INSERT INTO usuarios (nome, email, cpf, telefone, cidade, estado, numero_casa, rua, bairro, senha) VALUES ('$nome', '$email', '$cpf', '$telefone', '$cidade', '$estado', '$numero_casa', '$bairro', '$rua', '$senha')";

    
    if ($conexao->query($query) === TRUE) {
        echo "Cadastro realizado com sucesso!";
        header("Location: home.php");
        exit(); 
    } else {
        echo "Erro ao cadastrar: " . $conexao->error;
    }
}


$conexao->close();
?>
