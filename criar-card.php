<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="?page=salvar" method="post">

                            <input type="hidden" name="acao" value="cadastrar">

                            <h3 class="text-center format-login-registro">Pacote</h3>
                            <div class="form-group">
                                <label for="nome" class="format-login-registro">Digite o nome do pacote:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sobrenome" class="format-login-registro">Qtd dias de viagem:</label><br>
                                <input type="text" name="sobrenome" id="sobrenome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tel_fixo" class="format-login-registro">Preço:</label><br>               <!-- pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" -->
                                <input type="tel" name="tel_fixo" id="tel_fixo" class="form-control" placeholder="(XX) XXXXX-XXXX" onkeyup="formatPhoneNumber(this)" maxlength="15" required>
                            </div>
                                <div class="form-group">
                                <label for="tel_celular" class="format-login-registro">Descrição:</label><br>       <!--  pattern="[0-9]{2} [0-9]{5}-[0-9]{4}"-->
                                <input type="tel" name="tel_celular" id="tel_celular" class="form-control" placeholder="(XX) XXXXX-XXXX" onkeyup="formatPhoneNumber(this)" maxlength="15" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="format-login-registro">Imagem:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="ex: seumail@gmail.com" required>
                            </div>


                            
                            <div class="div-buttom-registro-login">
                            <button type="submit" class="btn btn-outline-success buttom_registro_login">Registrar</button>
                            </div>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>