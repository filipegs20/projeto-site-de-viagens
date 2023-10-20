<div class="row row-cols-1 row-cols-md-2 g-4 ">
<?php
$cardData = array(
            array('title' => 'Rio de Janeiro', 'dias' => '5 dias', 'preco' => 'R$999,00', 'imageSrc' => 'https://www.viajali.com.br/wp-content/uploads/2018/08/fotos-do-rio-de-janeiro-capa.jpg', 'descricao'=> 'Conheça o Rio de Janeiro e seus belíssimos cartões postais mundialmente conhecidos. O pacote contempla passeios para o cristo redentor...'),
            array('title' => 'Gramado', 'dias' => '7 dias', 'preco' => 'R$1548,00', 'imageSrc' => 'https://www.abraceomundo.com/wp-content/uploads/2021/08/fotos-de-gramado.jpg', 'descricao'=> 'Conheça Gramado, a queridinha dos brasileiros. Desfrute da gastronomia local...')
            // Adicione mais arrays de dados aqui para mais cards
        );

foreach ($cardData as $data) {
        

print '

    <div class="col-md-4">
        <div class="card">
            <img src="' . $data['imageSrc'] . '" class="card-img-top tamanho_cards" alt="...">
                <div class="card-body">
                    <h5 class="card-title">' . $data['title'] . '</h5>
                        <div style="justify-content: space-between; display: flex;">
                            <button class="buttom_cards">' . $data['dias'] . '</button>
                            <button class="buttom_cards">' . $data['preco'] . '</button>
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
    </div>


';}?>
</div>
  