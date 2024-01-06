
<?php 

$sql_code = "select * from pacotes where id=".$_REQUEST['id'];
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error); 
$row = $sql_query->fetch_assoc();

$cards[] = $row; 

foreach($cards as $data);

$result2 = $_SESSION['preco-com-desconto'];

?>


<div class="container mt-5">
  <h2>Como você quer pagar?</h2>
  
  <!-- Opções de pagamento -->
  <div class="form-check">
    <input class="form-check-input" type="radio" name="formaPagamento" id="cartaoCredito" checked>
    <label class="form-check-label" for="cartaoCredito">
      Cartão de Crédito
    </label>
  </div>
  
  <div class="form-check">
    <input class="form-check-input" type="radio" name="formaPagamento" id="boleto">
    <label class="form-check-label" for="boleto">
      Boleto
    </label>
  </div>
  
  <div class="form-check">
    <input class="form-check-input" type="radio" name="formaPagamento" id="pix">
    <label class="form-check-label" for="pix">
      Pix
    </label>
  </div>
  
  <!-- Campos de cartão de crédito -->
  <div id="cartaoCreditoFields" class="mt-3">
    <label for="numeroCartao">Número do Cartão:</label>
    <input type="text" class="form-control" id="numeroCartao" placeholder="1234 5678 9012 3456">
    
    <label for="nomeTitular">Nome do Titular:</label>
    <input type="text" class="form-control" id="nomeTitular" placeholder="Nome Completo">
    
    <label for="codigoSeguranca">Código de Segurança:</label>
    <input type="text" class="form-control" id="codigoSeguranca" placeholder="123">
    
    <label for="vencimento">Data de Vencimento:</label>
    <input type="text" class="form-control" id="vencimento" placeholder="MM/AA">
    
    <label for="cpf">CPF do Titular:</label>
    <input type="text" class="form-control" id="cpf" placeholder="123.456.789-00">
    
    <label for="precoProduto">Preço do Pacote:</label>
    <input type="text" class="form-control" id="precoProduto" placeholder="<?php print $result2;?>" disabled>
    
    <label for="parcelas">Parcelas:</label>
    <select class="form-control" id="parcelas">
      <!-- Adicione as opções de parcelamento -->
    </select>
  </div>
  
  <!-- Botão de gerar boleto -->
  <button id="gerarBoleto" class="btn btn-primary mt-3" style="display: none;">Gerar Boleto</button>
  
  <!-- QrCode para Pix -->
  <div id="qrcode" class="mt-3" style="display: none;">
    <!-- Aqui você pode adicionar a lógica para gerar o QrCode -->
    <!-- Exemplo: <img src="seu_script_gerar_qrcode.php" alt="QrCode Pix"> -->
  </div>
  
  <!-- Botão de confirmar pagamento -->
  <button id="confirmarPagamento" class="btn btn-success mt-3">Confirmar Pagamento</button>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>

<script>
  $(document).ready(function () {
    // Mostrar/ocultar campos conforme a opção de pagamento selecionada
    $('input[type="radio"]').change(function () {
      if (this.id === 'cartaoCredito') {
        $('#cartaoCreditoFields').show();
        $('#gerarBoleto').hide();
        $('#qrcode').hide();
      } else if (this.id === 'boleto') {
        $('#cartaoCreditoFields').hide();
        $('#gerarBoleto').show();
        $('#qrcode').hide();
      } else if (this.id === 'pix') {
        $('#cartaoCreditoFields').hide();
        $('#gerarBoleto').hide();
        $('#qrcode').show();
      }
    });

    // Adicione sua lógica para gerar o QrCode aqui
    // Exemplo usando a biblioteca 'qrcodejs': https://davidshimjs.github.io/qrcodejs/
    // var qrcode = new QRCode(document.getElementById("qrcode"), "sua_informacao_pix");

    // Adicione sua lógica de confirmação de pagamento aqui
    $('#confirmarPagamento').click(function () {
      alert('Pagamento confirmado!');
      // Adicione a lógica de confirmação do pagamento aqui
    });

    // Atualiza o valor total com base no número de parcelas
    $('#parcelas').change(function () {
      calcularTotal();
    });

    // Inicializa as opções de parcelamento
    for (let i = 1; i <= 12; i++) {
      $('#parcelas').append(`<option value="${i}">${i}x</option>`);
    }

    // Função para calcular o valor total com base no número de parcelas
    function calcularTotal() {
      const precoProduto = parseFloat($('#precoProduto').val());
      const parcelas = parseInt($('#parcelas').val());

      if (!isNaN(precoProduto) && !isNaN(parcelas)) {
        const valorTotal = precoProduto * (1 + (0.05 * parcelas)); // Adicione sua lógica de juros aqui se necessário
        alert(`Valor Total: R$ ${valorTotal.toFixed(2)}`);
      }
    }
  });
</script>

</body>
</html>


</body>
</html>


