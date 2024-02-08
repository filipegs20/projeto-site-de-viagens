<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {    //if(isset($_POST['email']) || isset($_POST['senha'])) {
                                                //      echo "Preencha seu e-mail e senha ";
if(strlen($_POST['email'])==0){
        echo "Preencha seu email";
} elseif (strlen($_POST['senha'])==0) {       //(strlen($_POST['senha'])==0)//
        echo "Preencha sua senha";

} else {

    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * from clientes WHERE email = '$email'";
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

            

            print "    <div id='tela-de-carregamento'>
                            <div class='spinner'></div>
                                <p>Acessando...</p> 
                        </div>
            
                        <script> location.href='?page=principal';</script>";

             

        
        }else{
            echo "<script> alert('Falha ao realizar login. E-mail ou senha incorretos.');</script>";
            echo "<script> location.href='?page=login';</script>";
            }
    }
}
}
?>


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
                            <div id="register-link" class="text-right">
                                <a href="?page=registro" class="format-login-registro">Registre-se</a>
                            </div>
                            <div class="div-buttom-registro-login">
                            <button type="submit" class="btn btn-outline-success buttom_registro_login">Entrar</button>
                            <a href="?page=login-back" class="format-login-registro register_login">Sou colaborador</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>