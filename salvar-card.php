

<?php 
include('conexao.php');

switch ($_REQUEST["acao"]) {

case 'criar':
    
    $nome = $_POST["nome"];
    $dias = $_POST["dias"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $imagem = $_POST["imagem"];
    $data_cadastro = date('Y-m-d');
    
    $sql = "INSERT INTO pacotes (nome, preco, dias, descricao, data_criacao) VALUES ('{$nome}','{$dias}','{$preco}','{$descricao}','{$imagem}'
    ,'{$data_cadastro}')";

    $res = $mysqli -> query($sql);

    if($res==true){
        print "<script> alert('Cadastrado com sucesso!');</script>";
        print "<script> location.href='?page=login';</script>";
    }
    else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=registro';</script>";

    }

    break;

case 'editar':
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);
    $data_nasc = $_POST["data_nasc"];

    $sql = "UPDATE usuários SET
              nome = '{$nome}',
              email = '{$email}',
              senha ='{$senha}',
              data_nasc ='{$data_nasc}'
              
            WHERE 
                id=".$_REQUEST["id"];

    $res = $conn->query($sql);

    if($res==true){
        print "<script> alert('Alterado com sucesso!');</script>";
        print "<script> location.href='?page=listar';</script>";
    }
    else{
        print "<script> alert('Não foi possível alterar');</script>";
        print "<script> location.href='?page=listar';</script>";

    }

    break;

case 'excluir':
    $sql = "DELETE FROM usuários WHERE id=".$_REQUEST["id"];

    $res = $conn -> query($sql);
    if($res==true){
        print "<script> alert('Excluído com sucesso!');</script>";
        print "<script> location.href='?page=listar';</script>";
    }
    else{
        print "<script> alert('Não foi possível excluir');</script>";
        print "<script> location.href='?page=listar';</script>";

    }

    break;
}

?>