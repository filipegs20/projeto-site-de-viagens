<div class="row row-cols-1 row-cols-md-2 g-4 ">

<?php
//include('conexao.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$nome = trim($_POST['pesquisa']);
?>

<div class="pesquisa">
<h5>Resultado para: "<?php print $nome ?>"</h5><br/>
</div>
<?php

$sql = "Select * from pacotes where nome_pacote like '%$nome%'";

$sql_query = $mysqli->query($sql) or die("falha na execução do código sql: ".$mysql->error);

// a logica de exibicao dos cards na aba pacotes foi estruturado de uma forma mais rudimentar como forma de aprendizado.
if ($sql_query->num_rows <= 0) {
    echo "<p>Não há resultados para esta pesquisa.</p>";
} else {
    while ($row = $sql_query->fetch_assoc()) {
        $imagem_de_capa = explode(',',$row['imagem']); 

        $calc = $row['desconto'] * $row['preco'] / 100;
        $result1 = $row['preco'] - $calc;
        $result2 = number_format($result1, 2, ',', '.');
        $result3 = number_format($row['preco'], 2, ',', '.');

        ?>
        <div class="col-md-4">
            <div class="card">
                <a class="link_cards" href="?page=pacote&id=<?php print $row['id']; ?>">
                    <img src="<?php print $imagem_de_capa[0]; ?>" class="card-img-top tamanho_cards" alt="...">
                </a>
                <div class="card-body">
                    <h5 class="card-title"><?php print $row['nome_pacote']; ?></h5>
                    <div style="justify-content: space-between; display: flex;">
                        <button class="buttom_cards"><?php print $row['dias']; ?> dias</button>
                        <?php if ($row['desconto'] > 0) { ?>
                            <button class="buttom_cards"> R$ <del><?php print $result3; ?></del> <br> R$ <?php print $result2; ?></button>
                        <?php }else{ ?>
                            <button class="buttom_cards"> R$ <?php print $row['preco']; ?></button>
                        <?php } ?>
                    </div>
                    <p class="card-text"><?php print $row['descricao']; ?></p>
                </div>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5">
                    <label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4">
                    <label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3">
                    <label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2">
                    <label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1">
                    <label for="star1"></label>
                </div>
            </div>
        </div>
        <?php
    }
}}
?>
           
</div>