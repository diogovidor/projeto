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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/kit-upgrade.css">

    
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
        productBox.style.height = '440px'; 
    } else {
        additionalInfo.style.display = 'none'; 
        button.textContent = ' Ver Mais';
        productBox.style.height = '280px';//tamanho padrão
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
    
    <img src="img/banner-pc.jpg" alt="Descrição da imagem" class="imagem-full-width">
    <nav class="menu">
        <ul>
            <li><a href="home.php">Home</a></li>
            <li class="dropdown">
                <a href="#">Departamentos</a>
                <ul class="submenu">
                    <li><a href="kit-upgrade.php">Kit Upgrade</a></li>
                    <li><a href="#">PC Gamer</a></li>
                    <li class="dropdown-sub" onmouseenter="showSubmenu('submenu-diversos-1')" onmouseleave="hideSubmenu('submenu-diversos-1')">
                        <a href="#">Hardware</a>
                        <ul class="submenu-sub" id="submenu-diversos">
                            <li><a href="produto4.php">Placa de Vídeo</a></li>
                            <li><a href="#">Processadores</a></li>
                            <li><a href="#">Placa Mãe</a></li>
                            <li><a href="#">Memórias</a></li>
                            <li><a href="#">Hard Disk (HD)/SSD</a></li>
                            <li><a href="#">Fontes</a></li>
                            <li><a href="#">Placa de Som</a></li>
                            
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
    <div class="collection-paginate-pagination d-flex">
        <div class="paginate">
    <div class="paginate__item paginate__item--select">
        <span class="text2">Página:</span>
        <div class="form-group form-group--select">
            <div class="select">
                <select class="change-page" name="page">
                                        <option value="/kit-upgrade?page=1" selected="">
                        1
                    </option>
                                    </select>
            </div>
        </div>
        <span class="text3">de 6</span>
    </div>
    <div class="paginate__item paginate__item--prev is-disabled">
        <a href="/kit-upgrade?page=1" class="link">
            <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 84" class="svgo"><path d="M52.462 71.05l-24-24c-2.7-2.8-2.7-7.3 0-10l24-24c1.1-1.2 3-1.2 4.2 0 1.2 1.1 1.2 3 0 4.2l-24 24c-.4.4-.4 1.1 0 1.5l24 24c1.2 1.1 1.2 3 0 4.2-.6.6-1.3.9-2.1.9s-1.6-.2-2.1-.8z"></path></svg></i>
            
        </a>
    </div>
    <div class="paginate__item paginate__item--next is-disabled">
        <a href="/kit-upgrade?page=1" class="link">
            <i class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 84 84" class="svgo"><path d="M29.438 71.85c-.8 0-1.5-.3-2.1-.9-1.2-1.2-1.2-3.1 0-4.2l24-24c.4-.4.4-1.1 0-1.5l-24-24c-1.2-1.2-1.2-3.1 0-4.2 1.2-1.2 3.1-1.2 4.2 0l24 24c2.7 2.7 2.7 7.2 0 10l-24 24c-.5.6-1.3.8-2.1.8z"></path></svg></i>
            
        </a>
    </div>
</div>
    </div>
    <h1><strong>PC Gamer</strong></h1>
    <div class="products">
    <div class="product">
            <div class="product-box">
                <img src="img/PC_Gamer.jpg" alt="Produto 2">
                <p class="product-description">Pc Gamer T-GAMER Vector AMD 
                    <span class="additional-info" id="card-1" style="display: none;">Ryzen 5 4600G / 16GB (2x8GB) DDR4 / SSD 240GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 1.889,00 </p>
                <button class="other-button comprar-btn" onclick="goToProductPage('produto3.php')">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer2.jpg" alt="Produto 2">
                <p class="product-description">Computador Pichau Gamer Zagan 
                    <span class="additional-info" id="card-1" style="display: none;"> Intel i5-10400F, GeForce RTX 4060 8GB, 16GB DDR4, SSD M.2 480GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 4.089,00 </p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer3.jpg" alt="Produto 3">
                <p class="product-description">Computador T-HOME Hawk Intel i5
                    <span class="additional-info" id="card-1" style="display: none;"> 10400 / 8GB DDR4 / SSD 240GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 2.109,00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer4.jpg" alt="Produto 4">
                <p class="product-description">PC GAMER T-GAMER   
                    <span class="additional-info" id="card-1" style="display: none;">Thunder Intel Core i3 13100F / AMD Radeon RX 6600 / 16GB (2x8GB) DDR4 / SSD NVMe 480GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
                <p class="product-price">R$ 4.429,00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer5.jpg" alt="Produto 5">
                <p class="product-description">PC Gamer T-GAMER ASUS  
                    <span class="additional-info" style="display: none;">AMD Ryzen 5 5600X / NVIDIA GeForce RTX 4060 Ti / 16GB (2x8GB) DDR4 / SSD NVMe 2TB</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 6.000.00</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>                            
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer6.jpg" alt="Produto 6">
                <p class="product-description">PC GAMER T-GAMER Hator
                    <span class="additional-info" style="display: none;"> Intel Core i7 13700 / NVIDIA GeForce RTX 4060 Ti / 64GB (2X32GB) DDR4 / SSD NVMe 480GB</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 10.709.99</p>
                <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
            </div>
        </div>                                
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer7.jpg"  alt="Produto 7">
                <p class="product-description">PC Gamer Black Friday AMD
                    <span class="additional-info" style="display: none;"> Ryzen 5 5600X / NVIDIA GeForce RTX 3060 / 16GB (2x8GB) DDR4 / SSD</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 4.569,86</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
                           
        <div class="product">
            <div class="product-box">
                <img src="img/pc_gamer8.jpg"  alt="Produto 8">
                <p class="product-description">Computador Mancer Gamer Xatria
                    <span class="additional-info" style="display: none;"> VI, AMD Ryzen 5 7600, Radeon RX 7800 XT 16GB, 32GB DDR5, SSD 2x M.2 1TB</span>
                    <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
                </p>
                <p class="product-price">R$ 10.639.99</p>
                <button class="other-button" onclick="goToPayment()">Comprar</button>
            </div>
        </div>
    </div>

   <div class="products">
    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer9.jpg" alt="Produto 6">
            <p class="product-description">Computador T-Home Viper 
                <span class="additional-info" style="display: none;">AMD Ryzen 3 PRO 4350G / NVIDIA GeForce GT 730 / 8GB DDR4 / SSD 120GB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.900</p>
            <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer10.jpg" alt="Produto 8">
            <p class="product-description">Computador T-Home Office Pro
                <span class="additional-info" style="display: none;"> Ryzen 5 PRO 4650GE / 8GB DDR4 / SSD 240GB </span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.539.99</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer11.jpg" alt="Produto 2">
            <p class="product-description">Computador T-Home Eagle  
                <span class="additional-info" id="card-1" style="display: none;"> Intel i3 10100F / NVIDIA GeForce GT 710 / 8GB DDR4 / SSD 120GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.309,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer12.jpg" alt="Produto 2">
            <p class="product-description">Computador T-Home Starter 
                <span class="additional-info" id="card-1" style="display: none;"> Intel Core i5 4590 / 8GB DDR3 / HD 1TB </span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.309,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer3.jpg" alt="Produto 3">
            <p class="product-description">Computador T-HOME Hawk Intel i5
                <span class="additional-info" id="card-1" style="display: none;"> 10400 / 8GB DDR4 / SSD 240GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span></p>
            <p class="product-price">R$ 2.109,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>
    
    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer6.jpg" alt="Produto 6">
            <p class="product-description">PC GAMER T-GAMER Hator
                <span class="additional-info" style="display: none;"> Intel Core i7 13700 / NVIDIA GeForce RTX 4060 Ti / 64GB (2X32GB) DDR4 / SSD NVMe 480GB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 10.709.99</p>
            <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer9.jpg" alt="Produto 6">
            <p class="product-description">Computador T-Home Viper 
                <span class="additional-info" style="display: none;">AMD Ryzen 3 PRO 4350G / NVIDIA GeForce GT 730 / 8GB DDR4 / SSD 120GB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.900</p>
            <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer11.jpg" alt="Produto 2">
            <p class="product-description">Computador T-Home Eagle  
                <span class="additional-info" id="card-1" style="display: none;"> Intel i3 10100F / NVIDIA GeForce GT 710 / 8GB DDR4 / SSD 120GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.309,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>
</div>

<div class="products">
    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer8.jpg" alt="Produto 8">
            <p class="product-description">Computador Mancer Gamer Xatria
                <span class="additional-info" style="display: none;"> VI, AMD Ryzen 5 7600, Radeon RX 7800 XT 16GB, 32GB DDR5, SSD 2x M.2 1TB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 10.639.99</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer5.jpg" alt="Produto 5">
            <p class="product-description">PC Gamer T-GAMER ASUS
                <span class="additional-info" style="display: none;">AMD Ryzen 5 5600X / NVIDIA GeForce RTX 4060 Ti / 16GB (2x8GB) DDR4 / SSD NVMe 2TB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 6.000.00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer10.jpg" alt="Produto 8">
            <p class="product-description">Computador T-Home Office Pro
                <span class="additional-info" style="display: none;"> Ryzen 5 PRO 4650GE / 8GB DDR4 / SSD 240GB </span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.539.99</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer9.jpg" alt="Produto 6">
            <p class="product-description">Computador T-Home Viper
                <span class="additional-info" style="display: none;">AMD Ryzen 3 PRO 4350G / NVIDIA GeForce GT 730 / 8GB DDR4 / SSD 120GB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.900</p>
            <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer12.jpg" alt="Produto 2">
            <p class="product-description">Computador T-Home Starter
                <span class="additional-info" id="card-1" style="display: none;"> Intel Core i5 4590 / 8GB DDR3 / HD 1TB </span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.309,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer3.jpg" alt="Produto 3">
            <p class="product-description">Computador T-HOME Hawk Intel i5
                <span class="additional-info" id="card-1" style="display: none;"> 10400 / 8GB DDR4 / SSD 240GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.109,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer6.jpg" alt="Produto 6">
            <p class="product-description">PC GAMER T-GAMER Hator
                <span class="additional-info" style="display: none;"> Intel Core i7 13700 / NVIDIA GeForce RTX 4060 Ti / 64GB (2X32GB) DDR4 / SSD NVMe 480GB</span>
                <span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 10.709.99</p>
            <button class="other-button comprar-btn" onclick="goToProductPage('Produto.php')">Comprar</button>
        </div>
    </div>

    <div class="product">
        <div class="product-box">
            <img src="img/pc_gamer11.jpg" alt="Produto 2">
            <p class="product-description">Computador T-Home Eagle
                <span class="additional-info" id="card-1" style="display: none;"> Intel i3 10100F / NVIDIA GeForce GT 710 / 8GB DDR4 / SSD 120GB</span><span class="read-more" onclick="toggleInfo(this)"> Ver Mais</span>
            </p>
            <p class="product-price">R$ 2.309,00</p>
            <button class="other-button" onclick="goToPayment()">Comprar</button>
        </div>
    </div>
</div>


    

</body>
</html>