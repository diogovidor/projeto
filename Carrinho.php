<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Carrinho.css">
    <title>Carrinho de Compras</title>
   
</head>
<body>

    <header>
        <h1>Carrinho de Compras</h1>
    </header>

    <div class="container">
        <div id="produtos">
            <h2>Produtos</h2>
            <ul>
                <li id="produto1">Item 1 - R$ 10.00 <button onclick="adicionarAoCarrinho('Item 1', 10.00)">Adicionar ao Carrinho</button></li>
                <li id="produto2">Item 2 - R$ 20.00 <button onclick="adicionarAoCarrinho('Item 2', 20.00)">Adicionar ao Carrinho</button></li>
                
            </ul>
        </div>

        <div id="carrinho">
            <h2>Carrinho</h2>
            <ul id="carrinho-lista"></ul>
            <p>Total: R$ <span id="total">0.00</span></p>
            <div class="botoes">
                <button onclick="limparCarrinho()">Limpar Carrinho</button>
                <button onclick="aplicarDesconto()">Aplicar Cupom</button>
                <button onclick="comprar()">Comprar</button>
            </div>
            <div class="cupom-container">
                <label for="cupom">Cupom:</label>
                <input type="text" id="cupom" placeholder="Insira seu cupom">
            </div>
        </div>
    </div>

    <footer>
        &copy; 2023 NEXUS
    </footer>

    <script>
        var carrinho = [];
        var total = 0;

        function adicionarAoCarrinho(nome, preco) {
            carrinho.push({ nome: nome, preco: preco });
            total += preco;
            atualizarCarrinho();
        }

        function atualizarCarrinho() {
            var carrinhoLista = document.getElementById("carrinho-lista");
            var totalElement = document.getElementById("total");

            carrinhoLista.innerHTML = "";
            totalElement.textContent = total.toFixed(2);

            carrinho.forEach(function (item) {
                var li = document.createElement("li");
                li.textContent = item.nome + " - R$ " + item.preco.toFixed(2);
                carrinhoLista.appendChild(li);
            });
        }

        function limparCarrinho() {
            carrinho = [];
            total = 0;
            atualizarCarrinho();
        }

        function aplicarDesconto() {
            var cupomInput = document.getElementById("cupom");
            var cupom = cupomInput.value;

            if (cupom === "V1N1") {
                
                total *= 0.9;
                atualizarCarrinho();
                alert("Desconto aplicado com sucesso!");
            }else if(cupom === "ERICKFR4UD3") {
                
                total *= 10;
                atualizarCarrinho();
                alert("Desconto aplicado com sucesso!");
            } else {
                alert("Cupom inválido.");
            }

            
            cupomInput.value = "";
        }

        function comprar() {
            
            alert("Compra realizada com sucesso!");
            limparCarrinho();
        }
    </script>

</body>
</html>