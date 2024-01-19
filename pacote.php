<?php
include('css.php');

$sql_code = "select * from pacotes where id=".$_REQUEST['id'];
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error); 
$row = $sql_query->fetch_assoc();

$cards[] = $row; 

foreach($cards as $data);

if($data['desconto'] > 0) {                                     //nessa estrutura logica estou adicionando a promocao aos pacotes que tem promocao

  $result2 = $_SESSION['preco-com-desconto'];
  $result3 = number_format($data['preco'], 2, ',', '.');
  
}else{  
  $result3 = number_format($data['preco'], 2, ',', '.');
}
?>

<div class="block">
<h1><?php print $data['nome_pacote']; ?></h1>
<h4><?php print $data['data_viagem']; ?></h4>
</div>

<div style="width: 95%; margin:auto">
<div id="carouselExampleCaptions" class="carousel slide" style="max-height: 450px; overflow: hidden;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <?php
  //organizando imagens no array para exibi-las no carrosel
  $imagensarray = explode(',', $data['imagem']);  
  
  foreach($imagensarray as $carrosel){
    print '<div class="carousel-inner">
            <div class="carousel-item active">
              <img src="' . $carrosel . '"
              class="d-block w-100 mx-auto img-fluid" style="height: 400px; object-fit: contain;" alt="...">
              <div class="carousel-caption d-none d-md-block">
              </div>
            </div>
          </div>';
  }
    ?>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>
</div>  

      <div class="descricao-pacote">
        <h6> <?php print $data['descricao'] ?> </h6>
      </div>
      
    <?php  
      if($data['desconto'] > 0) {     
          print 
         '<div class="descricao-pacote">
            <h3>Promoção</h3> </br>
            De:<br>
          <button class="buttom_cards"><del> R$ '.  $result3 .' </del></button></br>
            Por:</br>
          <button class="buttom_cards"><h2> R$ '.  $result2 .' </h2></button>
          </div>';
      }else{
        print '<div class="descricao-pacote">
                <button class="buttom_cards"><h2> R$'.  $result3 .' </h2></button>
              </div>
        ';
      }
    ?>
<div class="descricao-pacote-oferece">
      <div class="title-compra">
        <h4>O que o pacote oferece?</h4>
      </div>

      <ul class="list-unstyled">
        <li>- O pacote oferece <?php print $data['dias'];?> dias de viagem.</li>
        <li>- A viagem ocorrerá entre <?php print $data['data_viagem']; ?>.</li>
        <li>- Pacote reembolsável até 48 horas antes da data. </li>
        <li>- <?php print $data['inclue']?></li>
      </ul>
</div>

<?php 

if (!isset($_SESSION['id'])){

  print "<div class='d-grid gap-2 col-2 mx-auto'>
          <a href='?page=login'><button class='btn btn-danger' type='button'>Comprar</button></a>
          </div>";
}else{
  print "<div class='d-grid gap-2 col-2 mx-auto'>
          <a href='?page=pagamento&id=" . $data['id'] . "'><button class='btn btn-danger' type='button'>Comprar</button></a>
          </div>";
}


?>
<!-- <ul class="list-unstyled">
  <li>O pacote oferece dias de viagem</li>
  <li></li>
  <li>Structurally, it's still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul>-->