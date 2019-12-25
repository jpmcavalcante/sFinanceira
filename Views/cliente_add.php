<?php if (!empty($erros['suc'])): ?>
    <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p><?php echo $erros['suc']; ?></p>
    </div>
<?php elseif (!empty($erros['er'])): ?>
    <div class="alert alert-danger" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <p><?php echo $erros['er']; ?></p>
    </div>
<?php endif; ?>


<form method="post" action="<?php echo BASE_URL;?>Cliente/add_action">


            <h3>2. DADOS PESSOAIS</h3>
            <div class="well">
                <div class="row">

                    <div class="container">
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="cpf">CPF</label>
                                <input type="text" class='"form-control"' id="cpf" name="cpf" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="nome" >Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" class="form-control" >
                            </div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-3">
                                <label for="rg">RG</label>
                                <input id="rg" type="number" name="rg" class="form-control" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="orgaoEmissor">Orgão Emissor</label>
                                <input id="orgaoEmissor" name="orgaoEmissor" type="text" class="form-control" >
                            </div>


                            <div class="form-group col-md-2">
                                <label for="estado">Estado</label>
                                <select id="estadoEmissor" name="estadoEmissor" class="form-control" >
                                    <option value="" disabled selected>UF</option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                    <option value="EX">Estrangeiro</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="dataExpedica">Data expedição do RG</label>
                                <input id="dataExpedicao" name="dataExpedicao" type="text" class="form-control" >
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="dataNascimento">Data de nascimento</label>
                                <input id="dataNascimento" name="dataNascimento" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-2">
                                <label>Estado civil</label>
                                <select id="estadoCivil" name="estadoCivil" class="form-control" >
                                    <option value="" disabled selected>Estado civil</option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viúvo(a)">Viúvo(a)</option>
                                </select>
                            </div>

                            <div class=" form-group col-md-2">
                                <label>Sexo</label>
                                <select id="genero" name="sexo" class="form-control" >
                                    <option value="" disabled selected>Sexo</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone</label>
                                <input id="telefone" name="telefone" type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="celular">Celular</label>
                                <input id="celular" name="celular" type="text" class="form-control">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12" style="margin-top: 30px;">

                        <div class="form-group col-md-3">
                            <label for="cep" >CEP</label>
                            <input type="text"  id="cep" name="cep" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 30px;">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="rua">Endereço</label>
                                <input id="endereco" name="endereco" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-1">
                                <label for="numero">Nº</label>
                                <input id="numero" name="numero" type="number" class="form-control" >
                            </div>

                            <div class="form-group col-md-4">
                                <label for="complemento">Complemento</label>
                                <input id="complemento" name="complemento" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="bairro">Bairro</label>
                                <input id="bairro" name="bairro" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-1">
                                <label for="uf">Estado</label>
                                <input id="estado" name="estado" type="text" maxlength="2" class="form-control" >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="cidade">Cidade</label>
                                <input id="cidade" name="cidade" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="tipoResidencia">Tipo de residencia</label>
                                <input id="tipoResidencia" name="tipoResidencia" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-3">
                                <label for="tempoResidencia">Tempo de Residencia (anos)</label>
                                <input id="tempoResidencia" name="tempoResidencia" type="number" class="form-control" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="naturalidade">Naturalidaade</label>
                                <input id="naturalidade" name="naturalidade" type="text" class="form-control" >
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nomePai">Nome do pai</label>
                                <input id="nomePai" name="nomePai" type="text" class="form-control">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nomeMae">Nome da mãe</label>
                                <input id="nomeMae" name="nomeMae" type="text" class="form-control" >
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>

       <input type="submit" value="salvar">

    </form>



















