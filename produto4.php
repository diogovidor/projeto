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
  <title>Carrossel com Miniaturas</title>
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
          <img src="img/placa-de-video.webp" alt="Primeiro Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="0">
          <img src="img/placa.jpg" alt="Segundo Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="1">
          <img src="img/placa2.jpg" alt="Terceiro Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="2">
          
        </div>
      </div>
      
      <div class="col-9">
        <!-- Carrossel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/placa-de-video.webp" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/placa.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/placa2.jpg" alt="Terceiro Slide">
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
    <h1>Placa de Vídeo INNO3D GeForce RTX 3060 TWIN X2, 12GB, GDDR6, DLSS, Ray Tracing, N30602-12D6-119032AH <br><br>

     
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
        <div id="de" class="jss447">de <s>R$&nbsp; 3.999,00</s> por:</div>
        <span id="vista" class="jss437 jss463">à vista</span>
        <div id="desconto" class="jss438">R$&nbsp;1.759,00</div>
        <span id="pix" class="jss439 jss463">no PIX com 15% desconto</span>
      </div>
      
    </div>
    <div class="cartao">
      <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z" fill="red"></path>
      </svg>
    </div>
    <div class="jss4550"> 
      <div class="jss450">   
        <div id="de" class="jss447">R$ 2.069,41 por:</div>
        <span class="jss271 jss272">em até 12x de<span class="jss273"> R$&nbsp;172,45</span></span>
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
    
  <div class="1x">1x de R$2.069,41 (sem juros)</div>
  <div class="2x">2x de R$1.034,71 (sem juros)</div>
  <div class="3x">3x de R$ 689,80 (sem juros)</div>
  <div class="4x">4x de R$517,35 (sem juros)</div>
  <div class="5x">5x de R$413,88 (sem juros)</div>
  <div class="6x">6x de R$344,90 (sem juros)</div>
  <div class="7x">7x de R$295,63 (sem juros)</div>
  <div class="8x">8x de R$258,68 (sem juros)</div>
  <div class="9x">9x de R$229,93 (sem juros)</div>
  <div class="10x">10x de R$206,94 (sem juros)</div>
  <div class="11x">11x de R$188,13 (sem juros)</div>
  <div class="12x">12x de R$172,45 (sem juros)</div>
</div>
</div>

</div>


<button class="accordion"><strong>Características gerais</strong></button>
<div class="panel">
<h4>
  <span style="font-size: 26px;">PLACA DE VÍDEO INNO3D GEFORCE RTX 3060 TWIN X2, 12GB, GDDR6, DLSS, RAY TRACING</span>
</h4>
<p3>A poderosa placa GeForce RTX 3060TWIN X2 acelera seu trabalho com incríveis <br> melhorias no desempenho. Esteja você fazendo edição de vídeo, animação 3D, <br> fotografia, design gráfico, visualização arquitetônica ou  transmissão, você pode <br>economizar muito tempo.</p3>
<div>
  <img alt="Gabinete Gamer Ninja Perseus" class="Perseus" src="img/placa3.jpg">
</div>
</div>

<button class="accordion"><strong>Especificações técnicas</strong></button>
<div class="panel">
  <div><strong>Marca:</strong> <br>INNO3D</div>
  <div><strong>Modelo:</strong> <br>GEFORCE RTX 3060 TWIN X2 N30602-12D6-119032AH</div>
  <div><strong>Core Clock:</strong> <br>Clock boost - 1777 MHz <br>
    Clock base - 1320 MHz</div>
  <div><strong>CUDA Cores:</strong> <br>3582</div>
  <div><strong>Memory Clock:</strong> <br>15Gbps</div>
  <div><strong>Tamanho da memória:</strong> <br>12GB</div>
  <div><strong>Tipo de Memória:</strong> <br>GDDR6</div>
  <div><strong>Barramento de Memória:</strong> <br>192 bit</div>
  <div><strong>Largura de banda da memória:</strong> <br> 360GB/s </div>
  <div><strong>Resolução máxima digital:</strong> <br>7680x4320</div>
  <div><strong>Suporte para multivisualização:</strong> <br>4</div>
    <div><strong>Dimensões:</strong> <br>Comprimento - 240mm <br>
Altura - 120mm <br>
Largura - 2 slot</div>
<div><strong>Formulário PCB:</strong> <br>ATX</div>
<div><strong>DirectX:</strong> <br>12 Ultimate</div>
<div><strong>OpenGL:</strong> <br>4,6</div>
<div><strong>PSU recomendado:</strong> <br>550W</div>
<div><strong>Conectores de energia:</strong> <br>1x 8 pinos</div>
<div><strong>Saídas:</strong> <br>3x DisplayPort 1.4a <br>
1x HDMI 2.1</div>
<div><strong>LED logo:</strong> Não possui<br></div>
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
