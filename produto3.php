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
          <img src="img/Pc_Gamer.jpg" alt="Primeiro Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="0">
          <img src="img/.Pc_Gamer2.jpg" alt="Segundo Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="1">
          <img src="img/2Pc_Gamer.jpg" alt="Terceiro Slide" class="thumbnail" data-target="#carouselExampleControls" data-slide-to="2">
          
        </div>
      </div>
      
      <div class="col-9">
        <!-- Carrossel -->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/Pc_Gamer.jpg" alt="Primeiro Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/.Pc_Gamer2.jpg" alt="Segundo Slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/2Pc_Gamer.jpg" alt="Terceiro Slide">
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
    <h1>Gabinete Gamer Ninja Perseus, Mid Tower, RGB, ATX, White, Sem Fonte, Com 3 Fans <br><br>
      
     
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
        <div id="de" class="jss447">de <s>R$&nbsp;3.267,64</s> por:</div>
        <span id="vista" class="jss437 jss463">à vista</span>
        <div id="desconto" class="jss438">R$&nbsp;1.889,00</div>
        <span id="pix" class="jss439 jss463">no PIX com 15% desconto</span>
      </div>
      
    </div>
    <div class="cartao">
      <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z" fill="red"></path>
      </svg>
    </div>
    <div class="jss4550"> 
      <div class="jss450">   
        <div id="de" class="jss447">de R$ 2.103,73 por:</div>
        <span class="jss271 jss272">em até 12x de<span class="jss273"> R$&nbsp;175,31</span></span>
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
    
        <div class="1x">1x de R$2.103,73 (sem juros)</div>
        <div class="2x">2x de R$1.051,87 (sem juros)</div>
        <div class="3x">3x de R$701,24 (sem juros)</div>
        <div class="4x">4x de R$ 525,93 (sem juros)</div>
        <div class="5x">5x de R$420,75 (sem juros)</div>
        <div class="6x">6x de R$350,62 (sem juros)</div>
        <div class="7x">7x de R$300,53  (sem juros)</div>
        <div class="8x">8x de R$262,97 (sem juros)</div>
        <div class="9x">9x de R$233,75 (sem juros)</div>
        <div class="10x">10x de R$210,37 (sem juros)</div>
        <div class="11x">11x de R$191,25 (sem juros)</div>
        <div class="12x">12x de R$175,31 (sem juros)</div>-
        </div>
    </div>
</div>




<button class="accordion"><strong>Especificações técnicas</strong></button>
<div class="panel">
  <div><strong>Processador:</strong> <br>AMD Ryzen 5 4600G 3.7GHz (4.2GHz Turbo), 6-Cores 12-Threads, Cooler Wraith Stealth, AM4</div>
  <div><strong>Placa Mãe :</strong> <br>Mãe Biostar A320MH 2.0, Chipset A320, AMD AM4, mATX, DDR4</div>
  <div><strong>Memória:</strong> <br> DDR4 Geil Orion, 8GB, 3200MHz, Gray, GAOG48GB3200C22SC</div>
  <div><strong>Material:</strong> <br>Aço/Plastico</div>
  <div><strong>SSD:</strong> <br>SanDisk Plus, 240GB, Sata III, Leitura 530MBs e Gravação 440MBs</div>
  <div><strong>Fonte:</strong> <br> Duex 500FSE++, 500W, 80 Plus Bronze, PFC Ativo, Full Modular</div>
  <div><strong>Gabinete:</strong> <br>Gabinete Gamer Ninja Eraser, RGB, Mid Tower, Vidro Temperado, ATX, Sem Fonte, Com 1 Fan<br></div>
  
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
