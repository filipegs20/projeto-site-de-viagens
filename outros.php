<script src="modal.js" defer></script>

<h2>Usuários de sistema</h2>
<?php

$sql_code = "SELECT * from sistema";
$sql_query = $mysqli->query($sql_code) or die("falha na execução do código sql: ".$mysql->error);

$qtd = $sql_query->num_rows; 

if ($qtd > 0 ){

    print "<table class='table table-hover table-bordered'>";

        print "<tr>";   
        print "<th>id</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Ações</th>";
        print "</tr>";

    while ($row = $sql_query -> fetch_object()){
        print "<tr>";   
        print "<td>".$row -> id."</td>";
        print "<td>".$row -> nome."</td>";
        print "<td>".$row -> email."</td>";
        print "<td>
        <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>

        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='salvar-editar-excluir-outros.php?acao=excluir&id=".$row->id."';}else{false;}\"; class='btn btn-danger'>Excluir</button></td>";
        print "</tr>";
    } 
}

else{
    print "<p class='alert alert-danger'> Não encontrou resultados! </p>";

}
?>

<div class="div-sup-backoffice espaco-no-bottom">
    <button class="btn btn-outline-success buttom_registro_login" id="botao-open" onclick="openModal()"><b>Criar novo usuário</b></button>
</div>

<dialog id="popup-cards">

<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <div class="d-flex justify-content-end">
                           
                           <button class="btn-close ms-auto" aria-label="Close" id="close" onclick="openModal()"></button>
                            
                        </div>

                        <form id="login-form" class="form" action="salvar-editar-excluir-outros.php" method="post">

                            <input type="hidden" name="acao" value="cadastrar">

                            <h3 class="text-center format-login-registro">Novo Usuário</h3>
                            
                            <div class="form-group">
                                <label for="nome" class="format-login-registro">Nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="format-login-registro">Email</label><br>
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="senha" class="format-login-registro">Senha</label><br>       
                                <input type="password" name="senha" id="senha" class="form-control" required>
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

