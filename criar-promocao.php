<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>body{background-color: rgb(169,169,169)}</style>

<?php

    session_start(); 
    include('protect.php');
    include('css.php');    
    include ("conexao.php");    
    
    //consultando banco de dados
    $sql_code = "SELECT * from pacotes where id=".$_REQUEST['id']."";    
    
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);


    $row = $sql_query->fetch_assoc();


?>

<div class="container_page_complet">

<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                    <div id="registro">
                            <div class="container">
                                <div id="login-row" class="row justify-content-center align-items-center">
                                    <div id="login-column" class="col-md-12">
                                        <div id="login-box" class="col-md-12">

                                            <form id="login-form" class="form" action="" method="post">

                                                <h3 class="text-center format-login-registro">Adicionar desconto</h3>

                                                <div class="form-group">
                                                    <label for="nome" class="format-login-registro">Nome do pacote:</label><br>
                                                    <input type="text" name="nome" id="nome" value="<?php print $row->nome_pacote;?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dias" class="format-login-registro">Dias de viagem:</label><br>
                                                    <input type="text" name="dias" id="dias" value="<?php print $row->dias;?>" class="form-control" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="preco" class="format-login-registro">Preço:</label><br>           
                                                    <input type="text" name="preco" id="preco" class="form-control" value="<?php print $row->preco;?>" oninput="formatarValor(this)" >
                                                </div>
                                                    <div class="form-group">
                                                    <label for="descricao" class="format-login-registro">Descrição:</label><br>       
                                                    <input type="text" name="descricao" id="descricao" class="form-control" value="<?php print $row->descricao;?>" onkeyup="formatPhoneNumber(this)" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="imagem" class="format-login-registro">Imagem:</label><br>
                                                    <input type="text" name="imagem" id="imagem" class="form-control" value="<?php print $row->imagem;?>" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="dataviagem" class="format-login-registro">Data da viagem:</label><br>       
                                                    <input type="text" name="dataviagem" id="dataviagem" class="form-control" value="<?php print $row->data_viagem;?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="oferece" class="format-login-registro">O que o pacote oferece?</label><br>      
                                                    <input type="text" name="oferece" id="oferece" class="form-control" value="<?php print $row->inclue;?>">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

    // Adicionando cada registro ao array $cards 
    while ($row = $sql_query->fetch_assoc()) {
        $cards[] = $row; 
    }
    
    //imprimindo arrays
    foreach ($cards as $data) {

        $nome = $data["nome_pacote"];
        $dias = $data["preco"];
        $preco = $data["dias"];
        $descricao = $data["descricao"];
        $imagem = $data["imagem"];
        $data_viagem = $data["data_viagem"];
        $oferece = $data["inclue"];
        
        $sql = "INSERT INTO pacotes (nome_pacote, preco, dias, descricao, imagem, data_viagem, inclue) VALUES ('{$nome}','{$preco}','{$dias}','{$descricao}','{$imagem}','{$data_viagem}','{$oferece}')";
    
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
    











?>