<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

if(strlen($_POST['email'])==0){
        echo "Preencha seu email";
} elseif (strlen($_POST['senha'])==0) {       //(strlen($_POST['senha'])==0)//
        echo "Preencha seu email";

} else {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    
    //$sql_code = "SELECT * from clientes WHERE email = '$email'";
    //$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);
    //$resgate = $sql_query->fetch_assoc();
    //if (password_verify($senha, $resgate['senha'])){

    $sql_code = "SELECT * from sistema WHERE email = '$email'";
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);
        
    if ($sql_query->num_rows == 0) {
        print "<script> alert('Falha ao realizar login. E-mail ou senha incorretos');</script>";
    }else{
            
        $usuario = $sql_query->fetch_assoc();
        $senhaBD = $usuario['senha'];
        
        if (password_verify($senha, $senhaBD)) {
    
            if(!isset($_SESSION)){
                session_start();    
            }
    
            $_SESSION['id'] =  $usuario["id"];
            $_SESSION['nome'] =  $usuario["nome"];
    

        print "<script> location.href='backoffice.php';</script>";

    
    } else {
        echo "<script> alert('Falha ao realizar login. E-mail ou senha incorretos');</script>";
        echo "<script> location.href='?page=login-back';</script>";
        }
}
}
}
?>

<style>body{background-color: rgb(169,169,169)}</style>
<div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center format-login-registro">Login</h3>
                            <div class="form-group">
                                <label for="email" class="format-login-registro">Digite seu E-mail:</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="format-login-registro">Senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="format-login-registro"><span>Relembre</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                            </div>
                            <div class="div-buttom-registro-login">
                            <button type="submit" class="btn btn-outline-success buttom_registro_login">Entrar</button>
                            <a href="?page=login" class="format-login-registro register_login">Sou cliente</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>