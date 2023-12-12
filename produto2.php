<?php
session_start();

if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kit Upgrade</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
  <link rel="stylesheet" href="css/Produto.css">
 
  
</head>
<body>
<script>
  function goToPayment() {
    
    window.location.href = "pagamento.php";
}
document.addEventListener("DOMContentLoaded", function() { //carrinho
    var cartButton = document.getElementById("cartButton");
    if (cartButton) {
        cartButton.addEventListener("click", function() {
            window.location.href = "Carrinho.php";
        });
    }
});

function goToProductPage(productPage) { //Logout
    window.location.href = productPage;
}

document.addEventListener('DOMContentLoaded', function() {
    var botaoLogout = document.getElementById('barras');
    
    
    botaoLogout.addEventListener('click', function() {
        
        
        
        window.location.href = 'logout.php';
    });
});

</script>


    <div class="top-bar">
        <button class="bars" id="barras">
            <i class="fas fa-bars"></i>
        </button>
        <button class="logo-button" onclick="window.location.href='home.php'">
          <img src="img/nexusLogo.png"  class="Logo">
        </button>
        <div class="search-bar">
            <i class="fas fa-search search-icon" onclick="search()"></i> 
            <input type="text" placeholder="Pesquisar" class="search-box">
        </div>
        <div class="navigation-buttons">
        <nav class="menuLogin">
    <ul>
        <li class="dropdown">
            <?php if(isset($nome)) { ?>
                <a href="#" id="boasVindas">Bem-vindo, <?php echo $nome; ?>!</a>
            <?php } else { ?>
                <a href="#">Login/Cadastro</a>
                <ul class="submenu">
                    <li><a href="Login.php">Login</a></li>
                    <li><a href="Cadastro.php">Cadastro</a></li>
                </ul>
            <?php } ?>
        </li>
    </ul>
</nav>
            <button class="cart-button" id="cartButton">
                <i class="fas fa-shopping-cart"></i>
            </button>
            
        </div>
    </div>
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="stacked-images">
          <img src="img/kit_upgrade.jpg" alt="Primeiro Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="0">
        
        </div>
      </div>
      
      <div class="col-9">
        <!-- Carrossel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/kit_upgrade.jpg" alt="Primeiro Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="container2">
    <h1>Kit Upgrade Ryzen 5 5500 + Placa Mãe B450 <br><br>
      <p>Marca: AMD/Biostar</p>
     
    </h1>
    <div class="p2">
      <span class="produto-disponivel"> Produto Disponível</span>
      <span><strong>SKU:</strong>VG24VQ1B</span>
    </div>
    
    <button id="botaoCompra" class="Comprar" onclick="goToPayment()">Comprar Agora <i class="fas fa-cart-arrow-down"></i></button>
   
    <div class="a-vista">
      <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
        <path d="M11 17h2v-1h1c.55 0 1-.45 1-1v-3c0-.55-.45-1-1-1h-3v-1h4V8h-2V7h-2v1h-1c-.55 0-1 .45-1 1v3c0 .55.45 1 1 1h3v1H9v2h2v1zm9-13H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4V6h16v12z" fill="green"></path>
      </svg> 
    </div>
    <div class="jss455"> 
      <div class="jss450">   
        <div id="de" class="jss447">de <s>R$&nbsp;1.738,90</s> por:</div>
        <span id="vista" class="jss437 jss463">à vista</span>
        <div id="desconto" class="jss438">R$&nbsp;999,00</div>
        <span id="pix" class="jss439 jss463">no PIX com 15% desconto</span>
      </div>
      
    </div>
    <div class="cartao">
      <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z" fill="red"></path>
      </svg>
    </div>
    <div class="jss4550"> 
      <div class="jss450">   
        <div id="de" class="jss447">R$ 1.125,87 por:</div>
        <span class="jss271 jss272">em até 12x de<span class="jss273"> R$&nbsp;93,82</span></span>
        <span id="semjuros" class="jss439 jss463">sem juros no cartão</span>
      </div>
    </div>
    <div class="borda">   
  </div>
  <div class="cartaoicon">
    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z" fill="red"></path>
    </svg>
  </div>
  <div class="parcelamentotitulo">
  <h2>Parcelamento</h2>
  </div>
  
<div class="parcelamento">
  <div class="parcelas">
    
  <div class="1x">1x de R$1.125,87 (sem juros)</div>
  <div class="2x">2x de R$562,94 (sem juros)</div>
  <div class="3x">3x de R$375,29  (sem juros)</div>
  <div class="4x">4x de R$281,47 (sem juros)</div>
  <div class="5x">5x de R$225,17 (sem juros)</div>
  <div class="6x">6x de R$187,65 (sem juros)</div>
  <div class="7x">7x de R$160,84 (sem juros)</div>
  <div class="8x">8x de R$140,73 (sem juros)</div>
  <div class="9x">9x de R$125,10 (sem juros)</div>
  <div class="10x">10x de R$112,59 (sem juros)</div>
  <div class="11x">11x de R$102,35 (sem juros)</div>
  <div class="12x">12x de R$93,82 (sem juros)</div>
</div>
</div>

</div>


<button class="accordion"><strong>Características gerais</strong></button>
<div class="panel">
<h4>
  <span style="font-size: 26px;">Kit Upgrade com Placa-Mãe B450 e Processador AMD Ryzen 5 5500</span>
</h4>
<p3>Maximize o desempenho do seu sistema com o Kit Upgrade que inclui uma placa-mãe B450 projetada para a plataforma AMD AM4, oferecendo suporte ideal para a potência do processador. A placa-mãe DDR4 proporciona a base ideal para um desempenho estável e eficiente.

O processador AMD Ryzen 5 5500 é a peça central deste kit, trazendo um impressionante desempenho com seus 6 núcleos e 12 threads, atingindo até 4.2GHz em modo turbo. Desenvolvido para jogadores que buscam excelência, este processador da série Ryzen 5000 oferece não apenas poder para jogos, mas também se destaca em tarefas multithread como renderização de vídeo, modelagem 3D e compilação de software. Prepare-se para experiências imersivas e para superar desafios com facilidade.

Este kit de upgrade é a escolha ideal para aqueles que desejam elevar seu sistema a novos patamares de desempenho e eficiência, proporcionando uma experiência de uso fluida e sem limitações.</p3>
<div>
  <img alt="Gabinete Gamer Ninja Perseus" class="Perseus" src="img/kit_upgrade.jpg">
</div>
</div>



<button class="accordion"><strong>Avaliações dos clientes</strong></button>
<div class="panel">
  <h3>Nenhuma avaliação disponível</h3>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

 
</body>
</html>
