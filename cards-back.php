<div class="row row-cols-1 row-cols-md-2 g-4">
<?php

    // chamada de conexão
    //include ("conexao.php");    
    
    //consultando banco de dados
    $sql_code = "SELECT * from pacotes";    
    
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

    // Adicionando cada registro ao array $cards 
    while ($row = $sql_query->fetch_assoc()) {
        $cards[] = $row; 
    }

    //abaixo temos um exemplo de como adicionar arrays manualmente//
    //$cardData = array(
            //array('title' => 'Rio de Janeiro', 'dias' => '5 dias', 'preco' => 'R$999,00', 'imageSrc' => 'https://www.viajali.com.br/wp-content/uploads/2018/08/fotos-do-rio-de-janeiro-capa.jpg', 'descricao'=> 'Conheça o Rio de Janeiro e seus belíssimos cartões postais mundialmente conhecidos. O pacote contempla passeios para o cristo redentor...'),
            //array('title' => 'Gramado', 'dias' => '7 dias', 'preco' => 'R$1548,00', 'imageSrc' => 'https://www.abraceomundo.com/wp-content/uploads/2021/08/fotos-de-gramado.jpg', 'descricao'=> 'Conheça Gramado, a queridinha dos brasileiros. Desfrute da gastronomia local...'),
            //array('title' => 'Salvador', 'dias' => '7 dias', 'preco' => 'R$1400,00', 'imageSrc' => 'https://dynamic-media-cdn.tripadvisor.com/media/photo-o/17/43/ac/8f/pelourinho.jpg?w=1200&h=-1&s=1', 'descricao'=> 'Viagem para salvador e tome uma lá...')
            // Adicione mais arrays de dados aqui para mais cards
        //);

    
    //imprimindo arrays
    foreach ($cards as $data) {

    print '
        
        <div class="col-md-4">
            <div class="card">
                <a class="link_cards" href="#">
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
                <button onclick="location.href=\'editar.php?id=' . $data['id'] . '\';" id="botao-open2" class="botao-red-cards-editar">Editar</button>
                <button onclick=\'if(confirm("Tem certeza que deseja excluir?")){location.href="excluir.php?id=' . $data['id'] . '";}else{false;}\'; id="botao-open2" class="botao-red-cards-excluir">Excluir</button>            </div>
                <button onclick="location.href=\'criar-promocao.php?id=' . $data['id'] . '\';" id="botao-open2" class="">Adicionar desconto</button>

        </div>';
    }

    
    //OBS: Colocar tag <a> envolto ao botao para que o click funcione.
    // <a href="?page=editar&id='.$data['id'].'">
    // </a>
    
    //switch ($_REQUEST['page']){
    //    case 'editar':
    //        include ('form-edit-card.php');
    //        break;
    //} //onclick=\"location.href="?page=editar&id='.$data['id'].'";\"
?>  
<script src="modal.js"></script>
</div>
  