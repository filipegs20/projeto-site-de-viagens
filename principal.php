<div class="container_page">
<div >
	<h1 class="" style="font-family: HindMBold;" >Viage com a gente <img style="width: 45px; height: 40px;" src="InShot_20240130_11034050122.jpg"></h1>
</div>  
<div class="sub-titulo">
    <p class="letras-sub-titulo">A sua felicidade é a nossa satisfação. Conheça os principais pontos turísticos do Brasil com segurança e conforto.</p>
</div>
<p>&nbsp;</p>
<h6><b>Promoções imperdíveis</h6></p>

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

<?php }     //<a href="#" class="link_cards">
 ?>
</div>
<p>&nbsp;</p>

<div class="row row-cols-1 row-cols-md-4 g-4">
<div class="div-principal-esq-dir">
        <div class="div-principal-esq">
            <span class="letra-div-principal-pacote"><b>Pacotes</b></span>
        </div>
        <div class="div-principal-dir">
            <span class="letra-div-principal-pacote"><b>Dicas</b></span>
        </div>
        <div class="div-principal-dir">
            <span class="letra-div-principal-pacote"><b>Dúvidas</b></span>
        </div>
        <div class="div-principal-dir">
            <span class="letra-div-principal-pacote"><b>Parceiros</b></span>
        </div>
</div>
</div>


<p>&nbsp;</p>
    <div class="div-principal-esq-dir">
        <div class="sub-titulo org-redesocial">
            <p class="letras-sub-titulo">Nos acompanhe nas redes sociais</p> <img src="https://w7.pngwing.com/pngs/953/528/png-transparent-instagram-icon-logo-desktop-computer-icons-instagram-miscellaneous-text-bing.png" style="width:60px; height:40px; margin-right:10px;">
        </div>
    </div>
</body>

    <!-- Tela de carregamento -->
    <div id="tela-de-carregamento">
        <img src="https://i.gifer.com/RK8a.gif">
        <p>Carregando...</p> 
    </div>
    
    <script src="tela-carregamento.js"></script>
</html>

