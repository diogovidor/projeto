<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupera os dados do formulário
    $nome = $_POST['id'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $rua = $_POST['rua'];
    $ncasa = $_POST['ncasa'];
    $bairro = $_POST['cor'];
    $senha = $_POST['senha'];
    $confirmasenha = $_POST['confirmasenha'];

    // Valida se as senhas coincidem
    if ($senha === $confirmasenha) {
        // Conexão com o banco de dados
        $conexao = new mysqli("localhost", "root", "", "nexus");

        // Verifica se houve erro na conexão
        if ($conexao->connect_error) {
            die("Erro na conexão: " . $conexao->connect_error);
        }

        // Prepara a query para inserção de dados
        $query = "INSERT INTO tabela_usuarios (nome, email, cpf, telefone, cidade, estado, rua, numero_casa, bairro, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conexao->prepare($query);

        // Bind dos parâmetros e execução da query
        $stmt->bind_param("ssissssiss", $nome, $email, $cpf, $telefone, $cidade, $estado, $rua, $ncasa, $bairro, $senha);
        $stmt->execute();

        // Verifica se a inserção foi bem-sucedida
        if ($stmt->affected_rows > 0) {
            echo "Cadastro realizado com sucesso!";
        } else {
            echo "Erro ao cadastrar. Tente novamente.";
        }

        // Fecha a conexão e o statement
        $stmt->close();
        $conexao->close();
    } else {
        echo "As senhas não coincidem.";
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/Cadastro.css"/>
    
</head>
<body>
    <div class="box">
        <center><div>
            <h1 id="titulo">Cadastro
            </h1>
            <p id="subtitulo">Complete com suas informações!</p>
            <br>
        </div></center>
        <form action="processa_cadastro.php" method="post">
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="id"><strong>Nome</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="campo">
                    <label for="email"><strong>Email</strong></label>
                    <input type="email" name="email" id="email" required>
                </div>
            </fieldset> 
            <fieldset class="grupo">
            <div class="campo campo2">
                <label for="cpf"><strong>CPF / CNPJ</strong></label>
                <input type="number" name="cpf" id="cpf" required>
            </div>
            
            <div class="campo">
                <label for="telefone"><strong>Telefone</strong></label>
                <input type="number" name="telefone" id="telefone" required>
            </div>
            </fieldset>
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="cidade"><strong>Cidade</strong></label>
                    <input type="text" name="cidade" id="cidade" required>
                </div>
                <div class="campo">
                    <label for="estado"><strong>Estado</strong></label>
                        <select id="estado" name="estado">
                            <option selected disabled value="">Selecione</option>
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                </div>    
                </fieldset>
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="rua" ><strong>Rua</strong></label>
                    <input type="text" name="rua" id="rua" required>
                </div>
            </fieldset>  
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="ncasa"><strong>N° casa</strong></label>
                    <input type="number" name="numero_casa" id="numero_casa" required>
                </div>
                <div class="campo campo2">
                    <label for="cor"><strong>Bairro</strong></label>
                    <input type="text" name="bairro" id="bairro" required>
                </div>
                
            </fieldset>
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="senha" ><strong>Senha</strong></label>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <div class="campo">
                    <label for="confirmasenha" ><strong>Confirme sua senha</strong></label>
                    <input type="password" name="confirmasenha" id="confirmasenha" required>
                </div>
            </fieldset>  
            <button class="botao" type="submit" onsubmit="">Cadastrar</button>
        </form>
    </div>
</body>
</html>