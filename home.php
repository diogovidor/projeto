<?php
session_start();

// Verifica se a sessão com o nome do usuário está definida
if (isset($_SESSION['nome'])) {
    $nome = $_SESSION['nome'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">

    
    <title>Tela Home</title>

    <script>
       function showSubmenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu) {
        submenu.style.display = 'block';
    }
}

function hideSubmenu(submenuId) {
    var submenu = document.getElementById(submenuId);
    if (submenu) {
        submenu.style.display = 'none';
    }
}


        function toggleInfo(button) {
            var additionalInfo = button.parentElement.querySelector('.additional-info'); //botão Ver Mais
            if (additionalInfo.style.display === 'none' || additionalInfo.style.display === '') {
                additionalInfo.style.display = 'inline';
                button.textContent = ' Ver Menos';
            } else {
                additionalInfo.style.display = 'none'; 
                button.textContent = ' Ver Mais';
            }
        }

        function goToPayment() {
            
        }

        function search() {           
            var searchTerm = document.querySelector('.search-box').value;
            window.location.href = '/search?q=' + encodeURIComponent(searchTerm);
        }

        
        document.addEventListener("DOMContentLoaded", function() { //carrinho
    var cartButton = document.getElementById("cartButton");
    if (cartButton) {
        cartButton.addEventListener("click", function() {
            window.location.href = "Carrinho.php";
        });
    }
});

function toggleInfo(button) {
    var additionalInfo = button.parentElement.querySelector('.additional-info');
    var productBox = button.closest('.product-box');

    if (additionalInfo.style.display === 'none' || additionalInfo.style.display === '') {
        additionalInfo.style.display = 'inline';
        button.textContent = ' Ver Menos';
        productBox.style.height = '440px'; // Defina o tamanho desejado aqui, por exemplo, 300px
    } else {
        additionalInfo.style.display = 'none'; 
        button.textContent = ' Ver Mais';
        productBox.style.height = '280px';
    }
}

function goToProductPage(productPage) {
    window.location.href = productPage;
}

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
   
</head>
<body>
   
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
    
    <img src="img/imagem.png" alt="Descrição da imagem" class="imagem-full-width">
    <nav class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Departamentos</a>
                <ul class="submenu">
                    <li><a href="kit-upgrade.php">Kit Upgrade</a></li>
                    <li><a href="pc-gamer.php">PC Gamer</a></li>
                    <li class="dropdown-sub" onmouseenter="showSubmenu('submenu-diversos-1')" onmouseleave="hideSubmenu('submenu-diversos-1')">
                        <a href="#">Hardware</a>
                        <ul class="submenu-sub" id="submenu-diversos">
                        <li><a href="placa-video.php">Placa de Vídeo</a></li>
                            <li><a href="#">Processadores</a></li>
                            <li><a href="#">Placa Mãe</a></li>
                            <li><a href="#">Memórias</a></li>
                            <li><a href="#">Hard Disk (HD)/SSD</a></li>
                            <li><a href="#">Fontes</a></li>
                            <li><a href="#">Placa de Som</a></li>
                            <!-- Adicione mais subcategorias aqui -->
                        </ul>
                    </li>
                    <li class="dropdown-sub" onmouseenter="showSubmenu('submenu-diversos-2')" onmouseleave="hideSubmenu('submenu-diversos-2')">
                        <a href="#">Periféricos</a>
                        <ul class="submenu-sub" id="submenu-diversos">
                            <li><a href="#">Mouse</a></li>
                            <li><a href="#">Teclado</a></li>
                            <li><a href="#">Componentes Teclado</a></li>
                            <li><a href="#">Microfone</a></li>
                            <li><a href="#">Caixa de Som</a></li>
                            <li><a href="#">WebCam</a></li>
                            <li><a href="#">MousePad</a></li>
                            <li><a href="#">Fone de Ouvido</a></li>
                            <li><a href="#">Joystick e Controle</a></li>
                            <!-- Adicione mais subcategorias aqui -->
                        </ul>
                    </li>
                    <li><a href="#">Gabinetes</a></li>
                    <li><a href="#">Refrigeração</a></li>
                    <li><a href="#">Monitores</a></li>
                    <li><a href="#">Cadeiras</a></li>
                    <li><a href="#">Notebooks</a></li>
                    <li><a href="#">Rede e Internet</a></li>
                </ul>
            </li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
    <h1><strong>Mais vendidos</strong></h1>
    
    <div class="products">
        <div class="product">
            <div class="product-box">
                <img src="img/kit_upgrade.jpg"  alt="Produto 1">
                <p class="product-description">Kit Upgrade Ryzen 5 5500 + Placa Mãe B450</p>
                <p class="product-price">R$ 999,00 </p>
                <button class="other-button comprar-btn" onclick="goToProductPage('Produto2.php')">Comprar</button>
                
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/PC_Gamer.jpg" alt="Produto 2">
                <p class="product-description">Pc Gamer T-GAMER Vector AMD 
                    <span class="additional-info" id="card-1" style="display: none;">Ryzen 5 4600G / 16GB (2x8GB) DDR4 / SSD 240GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 1.889,00</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('produto3.php')">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/placa-de-video.webp" alt="Produto 3">
                <p class="product-description">Placa de Vídeo INNO3D
                    <span class="additional-info" id="card-1" style="display: none;"> GeForce RTX 3060 TWIN X2, 12GB, GDDR6, DLSS, Ray Tracing, N30602-12D6-119032AH</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 1.759,00</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('produto4.php')">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/Gabinete.jpg" alt="Produto 6">
                <p class="product-description">Gabinete Gamer Ninja Perseus, Mid 
                    <span class="additional-info" style="display: none;"> Tower, RGB, ATX, White, Sem Fonte, Com 3 Fans</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 179.99</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
            </div>
        </div> 
        <div class="product">
            <div class="product-box">
                <img src="img/Mouse.webp" alt="Produto 5">
                <p class="product-description">Mouse Gamer Redragon
                    <span class="additional-info" style="display: none;"> Cobra M711W RGB, 10000 DPI, 7 Botões Programáveis, White</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 89,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>                            
        
        <div class="product">
            <div class="product-box">
                <img src="img/cooler.jpg" alt="Produto 2">
                <p class="product-description">Cooler Para Processador   
                    <span class="additional-info" id="card-1" style="display: none;">Redragon Tyr, 120mm, LED Red, Intel-AMD, CC-9104R</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 389,00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>                              
        <div class="product">
            <div class="product-box">
                <img src="img/Monitor.jpg"  alt="Produto 7">
                <p class="product-description">Monitor Gamer Ninja, 21.5 Pol, 
                    <span class="additional-info" style="display: none;"> 75Hz, Full HD, LED, HDMI / VGA, MGN-002-21S</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 399.99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
                           
        <div class="product">
            <div class="product-box">
                <img src="img/Wather_Cooler.webp"  alt="Produto 8">
                <p class="product-description">Water Cooler SuperFrame  
                    <span class="additional-info" style="display: none;"> ISENGARD, ARGB, 360mm, Intel-AMD, Controladora, Black, SF-W360</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 339.99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
    </div>
<!-------------------------------------------------------------------------------------------------------------------------------------------------->
    <div class="products">
        <div class="product">
            <div class="product-box">
                <img src="img/teclado-mecanico.jpg"  alt="Produto 8">
                <p class="product-description">Teclado Mecânico Gamer
                    <span class="additional-info" style="display: none;">TGT Sherman Compacto, Rainbow, ABNT2, Switch Azul, Preto, TGT-SHTKL-RBW01</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 119,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/gabinete2.jpg" alt="Produto 2">
                <p class="product-description">Gabinete Gamer Pichau HX550M
                    <span class="additional-info" id="card-1" style="display: none;"> Mid-Tower, Lateral de Vidro, com 3 Fans, PG-HX550M-BK01</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 199,99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/SSD.jpg" alt="Produto 3">
                <p class="product-description">SSD Lexar NS100 512GB 2.5" 
                    <span class="additional-info" id="card-1" style="display: none;">SATA III 6Gb/s, LNS100-512RB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 189,99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/cadeira.jpg" alt="Produto 4">
                <p class="product-description">Cadeira Gamer DT3 Sports 
                    <span class="additional-info" id="card-1" style="display: none;"> Nero V2, Preto, 13747-2</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 1.249,99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/SSD2.jpg" alt="Produto 5">
                <p class="product-description">SSD Adata SU630, 240GB,
                    <span class="additional-info" style="display: none;"> Sata III, Leitura 520MBs E Gravação 450MBs, ASU630SS-240GQ-R</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 109,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>                            
        <div class="product">
            <div class="product-box">
                <img src="img/processador.jpg" alt="Produto 6">
                <p class="product-description">Processador AMD Ryzen 5 
                    <span class="additional-info" style="display: none;"> 4500 3.6GHz (4.1GHz Turbo), 6-Cores 12-Threads, Cooler Wraith Stealth, AM4,</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$  428,99</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
            </div>
        </div>                                
        <div class="product">
            <div class="product-box">
                <img src="img/m2.jpg"  alt="Produto 7">
                <p class="product-description">SSD Kingston Fury Renegade,
                    <span class="additional-info" style="display: none;">  1TB, M.2 NVMe, 2280, Leitura 7300MBs E Gravação 6000MBs, SFYRS/1000G </span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 439,99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
                           
        <div class="product">
            <div class="product-box">
                <img src="img/4060.webp"  alt="Produto 8">
                <p class="product-description">Placa de Vídeo Gigabyte NVIDIA
                    <span class="additional-info" style="display: none;"> GeForce RTX 4060 WINDFORCE OC, 8GB, GDDR6, DLSS, Ray Tracing, GV-N4060WF2OC-8GD </span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 339.99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
    </div>

    <div class="products">
        <div class="product">
            <div class="product-box">
                <img src="img/pastaTermica.webp" alt="Produto 2">
                <p class="product-description">Pasta Térmica PCYES Nitrogen Basic,
                    <span class="additional-info" id="card-1" style="display: none;"> 1,5G, 5,5W/MK, PCYNB1555</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 14,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        
        <div class="product">
            <div class="product-box">
                <img src="img/headset.jpg" alt="Produto 4">
                <p class="product-description">Headset Gamer Fifine H6, 7.1 
                    <span class="additional-info" id="card-1" style="display: none;"> Surround, Drivers de 50mm, RGB, USB, Black</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 229,00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/r7.jpg" alt="Produto 3">
                <p class="product-description">Processador AMD Ryzen 7
                    <span class="additional-info" id="card-1" style="display: none;">  5700G 3.8GHz (4.6GHz Turbo), 8-Cores 16-Threads, Cooler Wraith Stealth, AM4,</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 1.128,99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/1050.webp" alt="Produto 4">
                <p class="product-description">Placa De Vídeo Gigabyte 
                    <span class="additional-info" id="card-1" style="display: none;">GeForce GTX 1050 Ti, 4GB, GDDR5, 128bit, GV-N105TD5-4GD/Rev 1.1</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 999,00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/kit-intel.jpg" alt="Produto 5">
                <p class="product-description">Kit Upgrade Intel Core I5 12400F
                    <span class="additional-info" style="display: none;"> + Placa Mãe H610</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 89,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>                            
        <div class="product">
            <div class="product-box">
                <img src="img/1650.jpg" alt="Produto 6">
                <p class="product-description">Placa de Vídeo Inno3D NVIDIA 
                    <span class="additional-info" style="display: none;">GeForce GTX 1650 Twin X2 OC V2, 4GB, GDDR6, 128Bit, N16502-04D6X-1720VA30 </span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 809.99</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
            </div>
        </div>                                
        <div class="product">
            <div class="product-box">
                <img src="img/monitor2.webp"  alt="Produto 7">
                <p class="product-description">Monitor Dr. Office, 23.8 Pol, 
                    <span class="additional-info" style="display: none;"> Full HD, 75Hz, HDMI/VGA, MDR-0508-23</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 509.99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
                           
        <div class="product">
            <div class="product-box">
                <img src="img/mouse2.jpg"  alt="Produto 8">
                <p class="product-description">Mouse Gamer Redragon   
                    <span class="additional-info" style="display: none;">Centrophorus 2, 7200DPI, 6 Botões, RGB, Black, M601-RGB V2</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 89,90</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
    </div>

    
    
    <script src="scripts.js"></script>

                
            </body>
    </html>