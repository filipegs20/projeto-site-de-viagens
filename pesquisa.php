<div class="row row-cols-1 row-cols-md-2 g-4 ">
<?php

//include('conexao.php');

$nome = $_POST['pesquisa'];


$sql = "Select * from pacotes where nome_pacote like '%$nome%'";

$sql_query = $mysqli->query($sql) or die("falha na execução do código sql: ".$mysql->error);

    while ($row = $sql_query->fetch_assoc()) {
        $cards[] = $row; 
    }

    if($row < 0){
        print "<h5>Não há resultados para essa pesquisa</h5>";
    }elseif(['desconto'] > 0){

    foreach ($cards as $data) {
        
        $calc = $data['desconto'] * $data['preco'] / 100;
        $result1 = $data['preco'] - $calc; 
        $result2 = number_format($result1, 2, ',', '.');
        $result3 = number_format($data['preco'], 2, ',', '.');

            print '
            
            <div class="col-md-4">
                <div class="card">
                    <a class="link_cards" href="?page=pacote&id=' . $data['id'] . '">
                    <img src="' . $data['imagem'] . '" class="card-img-top tamanho_cards" alt="...">
                    </a>
                        <div class="card-body">
                            <h5 class="card-title">' . $data['nome_pacote'] . '</h5>
                                <div style="justify-content: space-between; display: flex;">
                                    <button class="buttom_cards">' . $data['dias'] . ' dias </button>
                                    <button class="buttom_cards"> R$ <del>' . $result3 . '</del> </br> R$ ' . $result2 .'</button>
                                </div>
                                    <p class="card-text">' . $data['descricao'] . '</p>
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
            
            </div>'; 
            }}else{ 
            
            foreach ($cards as $data) {

                $calc = $data['desconto'] * $data['preco'] / 100;
                $result1 = $data['preco'] - $calc; 
                $result2 = number_format($result1, 2, ',', '.');
                $result3 = number_format($data['preco'], 2, ',', '.');
                print '
                    
                    <div class="col-md-4">
                        <div class="card">
                            <a class="link_cards" href="?page=pacote&id=' . $data['id'] . '">
                            <img src="' . $data['imagem'] . '" class="card-img-top tamanho_cards" alt="...">
                            </a>
                                <div class="card-body">
                                    <h5 class="card-title">' . $data['nome_pacote'] . '</h5>
                                        <div style="justify-content: space-between; display: flex;">
                                            <button class="buttom_cards">' . $data['dias'] . ' dias </button>
                                            <button class="buttom_cards"> R$ ' . $data['preco'] . '</button>
                                        </div>
                                            <p class="card-text">' . $data['descricao'] . '</p>
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
                    
                    </div>';}}
?>
</div>