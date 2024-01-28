<div class="container_page">

<div>
	<h1 class="">Viage com a gente</h1>
</div>

<?php 
$sql_code = "SELECT * from pacotes";    
    
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

//o while abaixo serve para percorrer todas as linhas do BD e imprimi-las logo depois. 
// Adicionando cada registro ao array $cards 
while ($row = $sql_query->fetch_assoc()) {
    $cards[] = $row; 
}
foreach ($cards as $data) {
    
  //gerando explode nos links do campo imagem para poder selecionar a imagem de capa, que sera a primeira imagem (por padrao).
  $imagem_de_capa = explode(',',$data['imagem']); 
  
  //tratando os pacotes com desconto ou nao.
  if($data['desconto'] > 0) {
  
  //$valorDecimalComPonto = str_replace(',', '.', $data['preco']);
  //$preco = (float)$valorDecimalComPonto;    
  $calc = $data['desconto'] * $data['preco'] / 100;
  $result1 = $data['preco'] - $calc; 
  $result2 = number_format($result1, 2, ',', '.');
  $result3 = number_format($data['preco'], 2, ',', '.');

  }
  $imagensarray = explode(',', $data['imagem']);
?>

<!-------------------------------------------- carrosel --------------------------------------------------->
<div style="width: 95%; margin:auto">
    <div id="carouselExampleCaptions" class="carousel slide" style="max-height: 450px; overflow: hidden;">
        <div class="carousel-indicators">
            <?php
            // Contador para atribuir o indice aos botoes
            $i = 0;

            foreach ($imagensarray as $carrosel) {
                // Adiciona a classe "active" apenas ao primeiro botão
                $activeClass = ($i === 0) ? 'active' : '';
                
                // Imprime o botão indicador
                print '<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="' . $i . '" class="' . $activeClass . '" aria-label="Slide ' . ($i + 1) . '"></button>';
                
                $i++;
            }
            ?>
        </div>

        <div class="carousel-inner">
            <?php
            // Reiniciando o contador para atribuir a classe "active" apenas ao primeiro slide
            $i = 0;

            foreach ($imagensarray as $carrosel) {
                // Adiciona a classe "active" apenas ao primeiro slide
                $activeClass = ($i === 0) ? 'active' : '';
                ?>
                <div class="carousel-item <?php print $activeClass; ?>">
                    <img src="<?php print $imagem_de_capa['0']; ?>"
                         class="d-block w-100 mx-auto img-fluid" style="height: 400px; object-fit: contain;" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>

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


<?php }?>

</div>