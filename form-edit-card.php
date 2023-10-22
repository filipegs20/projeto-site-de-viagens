<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">

                        <form id="login-form" class="form" action="packages.php" method="post">

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
                                <input type="text" name="preco" id="preco" class="form-control" oninput="formatarValor(this)" >
                            </div>
                                <div class="form-group">
                                <label for="descricao" class="format-login-registro">Descrição:</label><br>       
                                <input type="text" name="descricao" id="descricao" class="form-control" onkeyup="formatPhoneNumber(this)" >
                            </div>
                            <div class="form-group">
                                <label for="imagem" class="format-login-registro">Imagem:</label><br>
                                <input type="text" name="imagem" id="imagem" class="form-control"  >
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
