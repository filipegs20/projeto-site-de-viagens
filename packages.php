<script src="modal.js" defer></script>
<script src="script-form-cards.js"></script>

<div class="div-sup-backoffice espaco-no-bottom">
    <button class="btn btn-outline-success buttom_registro_login" id="botao-open" onclick="openModal()"><b>Criar</b></button>
</div>

<?php

include('cards-back.php');
//oninput="formatarValor(this)" -> do input preco
?>

<dialog id="popup-cards">

<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <div class="d-flex justify-content-end">
                           
                           <button class="btn-close ms-auto" aria-label="Close" id="close" onclick="openModal()"></button>
                            
                        </div>

                        <form id="login-form" class="form" action="" method="post">

                            <h3 class="text-center format-login-registro">Pacote</h3>
                            
                            <div class="form-group">
                                <label for="nome" class="format-login-registro">Nome do pacote:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="dias" class="format-login-registro">Dias de viagem:</label><br>
                                <input type="text" name="dias" id="dias" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="preco" class="format-login-registro">Preço:</label><br>           
                                <input type="number" name="preco" id="preco" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label for="descricao" class="format-login-registro">Descrição:</label><br>       
                                <input type="text" name="descricao" id="descricao" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label for="imagem" class="format-login-registro">Imagem: (adicione a URL da imagem)</label><br>
                                <input type="text" name="imagem" id="imagem" class="form-control"  >
                            </div>
                            <div class="form-group">
                                <label for="dataviagem" class="format-login-registro">Data da viagem:</label><br>       
                                <input type="text" name="dataviagem" id="dataviagem" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="oferece" class="format-login-registro">O que o pacote oferece?</label><br>      
                                <input type="text" name="oferece" id="oferece" class="form-control"  >
                            </div>
                            
                            <div class="div-buttom-registro-login">
                            <button type="submit" class="btn btn-outline-success buttom_registro_login">Salvar</button>
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

</dialog>


<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(!isset($_POST['nome'])) {
        print "<script> alert('Preencha o nome do pacote!');</script>";
        die;
    } if(!isset($_POST['dias'])){
        print "<script> alert('Preencha a quantidade de dias!');</script>";
        die;
    } elseif (!isset($_POST['preco'])) {       //(strlen($_POST['senha'])==0)//
        print "<script> alert('Preencha o preço!');</script>";
        die;
    } elseif (!isset($_POST['descricao'])){
        print "<script> alert('Preencha o campo descrição!');</script>";
        die;
    } elseif (!isset($_POST['dataviagem'])){
        print "<script> alert('Preencha a data da viagem!');</script>";
        die;
    } elseif (!isset($_POST['oferece'])){
        print "<script> alert('Preencha o que o pacote oferece!');</script>";
        die;

    } else {
    

    $nome = $_POST["nome"];
    $dias = $_POST["dias"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $imagem = $_POST["imagem"];
    $data_cadastro = date('Y-m-d');
    $data_viagem = $_POST["dataviagem"];
    $oferece = $_POST["oferece"];
    
    $sql = "INSERT INTO pacotes (nome_pacote, preco, dias, descricao, imagem, data_criacao, data_viagem, inclue) VALUES ('{$nome}','{$preco}','{$dias}','{$descricao}','{$imagem}','{$data_cadastro}','{$data_viagem}','{$oferece}')";

    $res = $mysqli -> query($sql);

    if($res==true){
        print "<script> alert('Card criado com sucesso!');</script>";
        print "<script> location.href='?page=packages';</script>";
    }
    else{
        print "<script> alert('Não foi possível criar o card');</script>";
        print "<script> location.href='?page=packages';</script>";

    }

    }
}
?>

<script> 
function openModalEdit() {

const button = document.querySelector("#botao-open2")
const modal = document.querySelector("#popup-cards2")
const buttonClose = document.querySelector("#close2")

button.addEventListener("click", function () {
    modal.showModal();
})

buttonClose.addEventListener("click", function () {
    modal.close();
})
}
</script>
</div>

