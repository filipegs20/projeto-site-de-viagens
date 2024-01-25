<script src="script.js"></script>
<script src="script.js" defer></script>
<?php

    $sql_code = "select * from sistema where id=". $_REQUEST['id']."";    
    
    $sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);
    $row = $sql_query->fetch_object();
    //oninput="formatarValor(this)" -> do input preco
?>

<div class="container_page_complet">

<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <div class="d-flex justify-content-end">
                           
                        <a href="http://localhost/projeto-site-de-viagens/backoffice.php?page=usuarios" class="btn-close ms-auto" aria-label="Close" id="close"></a>

                            
                        </div>

                        <form id="login-form" class="form" action="salvar-editar-excluir-outros.php" method="post" onsubmit="return validatePassword()">

                            <input type="hidden" name="acao" value="editar">
                            <input type="hidden" name="id" value="<?php print $row->id; ?>">

                            <h3 class="text-center format-login-registro">Editar usuário de sistema</h3>
                            
                            <div class="form-group">
                                <label for="nome" class="format-login-registro">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" value="<?php print $row->nome;?>"required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="format-login-registro">Email</label><br>
                                <input type="email" name="email" id="email" class="form-control" value="<?php print $row->email;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="format-login-registro">Senha</label><br>       
                                <input type="password" name="senha" id="senha" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="confirmarSenha" class="format-login-registro">Confirme a senha:</label><br>
                                <input type="password" name="senha" id="confirmarSenha" class="form-control border_senhas">
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

