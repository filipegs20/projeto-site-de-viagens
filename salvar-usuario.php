

<?php 
//include('conexao.php');

switch ($_REQUEST["acao"]) {

case 'cadastrar':
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $tel_fixo = $_POST["tel_fixo"];
    $tel_celular = $_POST["tel_celular"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $endereco = $_POST["endereco"];
    $estado = $_POST["uf"];
    $cidade = $_POST["cidade"];
    $pais = $_POST["pais"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);  
    $complemento = $_POST["complemento"];
    $data_cadastro = date('Y-m-d');
    
    $sql_verifica_email = "SELECT * FROM clientes WHERE email = '{$email}'";
    $res_verifica_email = $mysqli->query($sql_verifica_email);

    if ($res_verifica_email->num_rows > 0) {
    // validacao de email
    print "<script> alert('E-mail já cadastrado. Por favor, escolha outro e-mail.');</script>";
    print "<script> location.href='?page=registro';</script>";
    }else{

    $sql = "INSERT INTO clientes (nome, sobrenome, telefone_fixo, telefone_celular, email, cep, endereco, cidade, estado, 
    pais, complemento, data_cadastro, senha) VALUES ('{$nome}','{$sobrenome}','{$tel_fixo}','{$tel_celular}','{$email}'
    ,'{$cep}','{$endereco}','{$cidade}','{$estado}','{$pais}','{$complemento}','{$data_cadastro}','{$senha}')";

    $res = $mysqli -> query($sql);

    if($res==true){
        print "<script> alert('Cadastrado com sucesso!');</script>";
        print "<script> location.href='?page=login';</script>";
    }
    else{
        print "<script> alert('Não foi possível cadastrar');</script>";
        print "<script> location.href='?page=registro';</script>";

    }}

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