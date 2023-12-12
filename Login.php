<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css"/>
</head>
<body>
    <div class="box">
        <br><br>
        <center><h1 id="titulo">Login</h1></center>
        <form action="verifica_login.php" method="POST">
            <fieldset class="grupo">
                <div class="campo campo2">
                    <label for="email" id="email"><strong>Email</strong></label>
                    <input type="text" name="email" id="email" required>
                </div>

            </fieldset> 
            <fieldset class="grupo">
                <div class="campo">
                    <label for="senha" id="senha"><strong>Senha</strong></label>
                    <input type="password" name="senha" id="senha" required>
                </div>
            </fieldset> 
            <button class="botao" type="submit" onsubmit="">Logar</button>
        </form>
    </div>
</body>
</html>