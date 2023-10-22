<script src="script.js" defer></script>
<div id="registro">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="?page=salvar" method="post">

                            <input type="hidden" name="acao" value="cadastrar">

                            <h3 class="text-center format-login-registro">Registre-se</h3>
                            <div class="form-group">
                                <label for="nome" class="format-login-registro">Digite seu nome:</label><br>
                                <input type="text" name="nome" id="nome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="sobrenome" class="format-login-registro">Sobrenome:</label><br>
                                <input type="text" name="sobrenome" id="sobrenome" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tel_fixo" class="format-login-registro">Telefone Fixo:</label><br>               <!-- pattern="[0-9]{2} [0-9]{5}-[0-9]{4}" -->
                                <input type="tel" name="tel_fixo" id="tel_fixo" class="form-control" placeholder="(XX) XXXXX-XXXX" onkeyup="formatPhoneNumber(this)" maxlength="15" required>
                            </div>
                                <div class="form-group">
                                <label for="tel_celular" class="format-login-registro">Telefone Celular:</label><br>       <!--  pattern="[0-9]{2} [0-9]{5}-[0-9]{4}"-->
                                <input type="tel" name="tel_celular" id="tel_celular" class="form-control" placeholder="(XX) XXXXX-XXXX" onkeyup="formatPhoneNumber(this)" maxlength="15" required>
                            </div>
                            <div class="form-group">
                                <label for="email" class="format-login-registro">E-mail:</label><br>
                                <input type="email" name="email" id="email" class="form-control" placeholder="ex: seumail@gmail.com" required>
                            </div>
                            <div class="form-group">
                                <label for="cep" class="format-login-registro">CEP:</label><br> 
                                <input type="text" name="cep" id="cep" class="form-control" placeholder="Digite o CEP" maxlength="8" required>
                            </div>
                            <div class="form-group">
                                <label for="endereco" class="format-login-registro">Endereço:</label><br>
                                <input type="text" name="endereco" id="logradouro" class="form-control" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label for="cidade" class="format-login-registro">Cidade:</label><br>
                                <input type="text" name="cidade" id="localidade" class="form-control" >
                            </div>

                                <label for="uf" class="format-login-registro">UF:</label><br>
                                    <select name="uf" id="uf" disabled>
                                        <option value="AC">AC</option>
                                        <option value="AL">AL</option>
                                        <option value="AL">AL</option>
                                        <option value="AM">AM</option>
                                        <option value="BA">BA</option>
                                        <option value="CE">CE</option>
                                        <option value="DF">DF</option>
                                        <option value="ES">ES</option>
                                        <option value="GO">GO</option>
                                        <option value="MA">MA</option>
                                        <option value="MT">MT</option>
                                        <option value="MS">MS</option>
                                        <option value="MG">MG</option>
                                        <option value="PA">PA</option>
                                        <option value="PB">PB</option>
                                        <option value="PR">PR</option>
                                        <option value="PE">PE</option>
                                        <option value="PI">PI</option>
                                        <option value="RJ">RJ</option>
                                        <option value="RN">RN</option>
                                        <option value="RS">RS</option>
                                        <option value="RO">RO</option>
                                        <option value="RR">RR</option>
                                        <option value="RS">RS</option>
                                        <option value="SP">SP</option>
                                        <option value="SE">SE</option>
                                        <option value="TO">TO</option>

                                    </select>
                            <div class="form-group">
                                <label for="pais" class="format-login-registro">País:</label><br>
                                <input type="text" name="pais" id="pais" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="complemento" class="format-login-registro">Complemento (Opcional):</label><br>
                                <input type="text" name="complemento" id="complemento" class="form-control paginacao_complemento">
                            </div>

                            <div class="form-group">
                                <label for="senha" class="format-login-registro">Digite sua senha:</label><br>
                                <input type="password" name="senha" id="senha" class="form-control border_senhas">
                            </div>
                            <div class="form-group">
                                <label for="confirmarSenha" class="format-login-registro">Confirme sua senha:</label><br>
                                <input type="password" name="senha" id="confirmarSenha" class="form-control border_senhas">
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