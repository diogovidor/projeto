<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Pagamentos.css">
  <script>
    function goToPayment() {
      window.location.href = 'Pagamento.php';
    }
  </script>
  
  <title>Escolha a Forma de Pagamento</title>
</head>
<body>

<div class="payment-container">
  <h2>Escolha a Forma de Pagamento</h2>

  <div class="payment-option" onclick="selectPayment('credito')">Cartão de Crédito</div>
  <div class="payment-option" onclick="selectPayment('debito')">Cartão de Débito</div>
  <div class="payment-option" onclick="selectPayment('boleto')">Boleto Bancário</div>
  <div class="payment-option" onclick="selectPayment('pix')">PIX</div>

  <div id="pixContainer" style="display: none;">
    <img src="img/qrcode.png" alt="QR Code PIX" class="qr-code-image">
  </div>
</div>

<script>
  function selectPayment(paymentMethod) { // Lógica para mostrar ou esconder o PIX

    var pixContainer = document.getElementById('pixContainer');

    if (paymentMethod === 'pix') {
      pixContainer.style.display = 'block';
    } else {
      pixContainer.style.display = 'none';
    }

    
  }
</script>

</body>
</html>