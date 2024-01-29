<div class="container_page">
<div >
	<h1 class="">Viage com a gente</h1>
</div>
<p>&nbsp;</p>

<div class="row row-cols-1 row-cols-md-4 g-4">
<?php 
$sql_code = "SELECT * from pacotes";    
    
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

//o while abaixo serve para percorrer todas as linhas do BD e imprimi-las logo depois. 
// Adicionando cada registro ao array $cards 
while ($row = $sql_query->fetch_assoc()) {
    $cards[] = $row; 
}

foreach (array_slice($cards, 0, 3) as $data) {
    
    //gerando explode nos links do campo imagem para poder selecionar a imagem de capa, que sera a primeira imagem (por padrao).
    $imagensarray = explode(',', $data['imagem']);

 ?>
    

      <a href="?page=pacote&id="<?php print $data['id']; ?>>
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
<!-- <div class="card" style="width: 18rem; ">
    <img src="https://media.istockphoto.com/id/1166728645/pt/foto/suspension-bridge-cable-stayed-bridge-in-the-world.jpg?s=612x612&w=0&k=20&c=_2bO5TdCKNzrSHgaofCvqpQRiwRtNtFOLdeI8WpsMBc=" class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div> -->

</body>
</html>