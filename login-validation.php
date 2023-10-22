<?php






// ESSE ARQUIVO FOI UMA TENTATIVA DE SOLUÇÃO DE PROBLEMA NO LOGIN //





include('conexao.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

if(isset($_POST['email']) || isset($_POST['senha'])) {
        echo "Preencha seu e-mail e senha ";
} if(strlen($_POST['email'])==0){
        echo "Preencha seu email";
} elseif (strlen($_POST['senha'])==0) {       //(strlen($_POST['senha'])==0)//
        echo "Preencha seu email";

} else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * from clientes WHERE email = '$email' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if(!isset($_SESSION)){
            session_start();    
        }

        $_SESSION['id'] =  $usuario["id"];
        $_SESSION['nome'] =  $usuario["nome"];



        print "<script> location.href='backoffice.php';</script>";


    } else {
        echo "<script> alert('Falha ao realizar login. E-mail ou senha incorretos');</script>";
        echo "<script> location.href='?page=login';</script>";
        }
}
}
?>
