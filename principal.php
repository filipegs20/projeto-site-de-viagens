<div class="container_page">
<div >
	<h1 class="">Viage com a gente</h1>
</div>

<p style="font-size: 20px;">A sua felicidade é a nossa satisfação. Conheça os principais pontos turísticos do Brasil com segurança e conforto.</p>
<p>&nbsp;</p>
<p><b>Promoções imperdíveis</b></p>

<div class="row row-cols-1 row-cols-md-4 g-4">

<?php 
$sql_code = "SELECT * from pacotes";    
    
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

//o while abaixo serve para percorrer todas as linhas do BD e imprimi-las logo depois. 
// Adicionando cada registro ao array $cards 
while ($row = $sql_query->fetch_assoc()) {
    $cards[] = $row; 
}

$indices_desejados = [1, 3, 5];

foreach ($indices_desejados as $indice) {
    $data = $cards[$indice];
    
    //gerando explode nos links do campo imagem para poder selecionar a imagem de capa, que sera a primeira imagem (por padrao).
    $imagensarray = explode(',', $data['imagem']);

 ?>
    

      <a class="link_cards" href="?page=pacote&id="<?php print $data['id']; ?>>
        <div class="col">
          <div class="card h-100">
            <img src="<?php print $imagensarray['0'];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php print $data['nome_pacote']; ?></h5>
              <p class="card-text"><?php print $data['descricao']; ?></p>
            </div>
          </div>
        </div>
      </a>

<?php } ?>
</div>
<p>&nbsp;</p>
<div>olá mundo</div>



</body>
</html>