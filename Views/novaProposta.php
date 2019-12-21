
<!-- INICIO DAS ABAS DO MENU -->
<div class="container" id="myWizard">
        <hr>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 25%;">
                Step 1 of 4
            </div>
        </div>
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav nav-pills nav-wizard">
                    <li class="active">
                        <a class="hidden-xs" href="#step1" data-toggle="tab" data-step="1">1. Details</a>
                        <a class="visible-xs" href="#step1" data-toggle="tab" data-step="1">1.</a>
                        <div class="nav-arrow"></div>
                    </li>
                    <li class="disabled">
                        <div class="nav-wedge"></div>
                        <a class="hidden-xs" href="#step2" data-toggle="tab" data-step="2">2. Shipping</a>
                        <a class="visible-xs" href="#step2" data-toggle="tab" data-step="2">2.</a>
                        <div class="nav-arrow"></div>
                    </li>
                    <li class="disabled">
                        <div class="nav-wedge"></div>
                        <a class="hidden-xs" href="#step3" data-toggle="tab" data-step="3">3. Payment</a>
                        <a class="visible-xs" href="#step3" data-toggle="tab" data-step="3">3.</a>
                        <div class="nav-arrow"></div>
                    </li>
                    <li class="disabled">
                        <div class="nav-wedge"></div>
                        <a class="hidden-xs" href="#step4" data-toggle="tab" data-step="4">4. Review</a>
                        <a class="visible-xs" href="#step4" data-toggle="tab" data-step="4">4.</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="step1">
                <h3>1. DADOS DA OPERAÇÃO</h3>
                <div class="well">
                    <div class="row">

                        <div class=" fxd  col-md-12">
                            <div class=" form-group col-md-4"> 
                                <select id="operacao" class="form-control">
                                    <option value="" disabled selected>selecione um tipo de operação</option>
                                    <option value="1">Cartão de Credito</option>
                                </select>
                            </div>
                        </div>

                        <div class="content col-md-12" style="margin: 20px; font-weight: bold;">
                            <span id="content" ></span>
                        </div>

                        <div class="col-md-12">
                            <div id="dados1" class="row">
                            
                            </div>
                        </div>

                        <div class="col-md-12">
                            <a href="#step2" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="step2">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="step2">
                <h3>2. DADOS PESSOAIS</h3>
                <div class="well">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="cpf" class='col-sm-2 col-form-label'>CPF</label>
                                    <div class='col-sm-9'>
                                        <input type="text" class=form-control id="cpf">
                                    </div>
                                </div>

                                <div class="form-group col-md-8">
                                    <label for="nome" class='col-sm-2 col-form-label'>Nome</label>
                                    <div class='col-sm-9'>
                                        <input type="text" class=form-control id="nome">
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email" class='col-sm-2 col-form-label'>Email</label>
                                    <div class='col-sm-9'>
                                        <input id="email" type="email" class=form-control>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class='col-sm-2 col-form-label' for="rg">RG</label>
                                    <div class='col-sm-7'>
                                        <input id="rg" type="text" class=form-control>
                                    </div>
                                </div>

                                <div class="form-group col-md-4">
                                    <label class='col-sm-5 col-form-label' for="rg">Orgão Emissor</label>
                                    <div class='col-sm-3'>
                                        <input id="orgaoEmissor" type="text" class=form-control>
                                    </div>
                                </div>

                                <div class=" fxd  col-md-3">
                                    <div class=" form-group col-md-6">
                                        <select id="estado" class="form-control">
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
                                </div>

                                <div class="form-group col-md-4">
                                    <label class='col-sm-5 col-form-label' for="dataExpedica">Data expedição do RG</label>
                                    <div class='col-sm-3'>
                                        <input id="dataExpedicao" type="text" class=form-control>
                                    </div>

                                </div>

                                <div class="input-field col s4">
                                    <input id="dataNascimento" type="text" class="validate">
                                    <label for="dataNascimento">Data de nascimento</label>
                                </div>

                                <div class=" fxd  col-md-12">
                                    <div class=" form-group col-md-2">
                                        <select id="estadoCivil" class="form-control">
                                            <option value="" disabled selected>Estado civil</option>
                                            <option value="1">Solteiro(a)</option>
                                            <option value="1">Casado(a)</option>
                                            <option value="1">Divorciado(a)</option>
                                            <option value="1">Viúvo(a)</option>
                                        </select>
                                    </div>
                                </div>

                                <div class=" fxd  col-md-12">
                                    <div class=" form-group col-md-2">
                                        <select id="genero" class="form-control">
                                            <option value="" disabled selected>Sexo</option>
                                            <option value="1">Msculino</option>
                                            <option value="1">feminino</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="input-field col s4">
                                    <input  type="text" class="validate" id="telefone">
                                    <label for="telefone">Telefone</label>
                                </div>

                                <div class="input-field col s4">
                                    <input  type="text" class="validate" id="celular">
                                    <label for="celular">Celular</label>
                                </div>  
                            </div>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="cep">
                            <label for="cep">CEP</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="rua">
                            <label for="rua">Endereço</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="numero">
                            <label for="numero">numero</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="complemento">
                            <label for="complemento">Complemento</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="bairro">
                            <label for="bairro">Bairro</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text"  id="uf">
                            <label for="uf">Estado</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="cidade">
                            <label for="cidade">Cidade</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="tipoResidencia">
                            <label for="tipoResidencia">Tipo de residencia</label>
                        </div>

                        <div class="input-field col s3">
                            <input  type="text" id="tempoResidencia">
                            <label for="tempoResidencia">Tempo de Residencia (anos)</label>
                        </div>

                        <div class="input-field col s4">
                            <input type="text" id="naturalidade">
                            <label for="naturalidade">Naturalidaade</label>
                        </div>

                        <div class="input-field col s12">
                            <input  type="text" id="nomePai">
                            <label for="nomePai">Nome do pai</label>
                        </div>

                        <div class="input-field col s12">
                            <input  type="text" id="nomeMae">
                            <label for="nomeMae">Nome da mãe</label>
                        </div>
                    
                        <div class="btn-group " role="group" aria-label="">
                            <a href="#step1" class="btn btn-default back" type="button" data-toggle="tab" data-step="1"><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                            <a href="#step3" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="3">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>       
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="step3">
                <h3>3. DADOS BANCARIOS</h3>
                <div class="well">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s4">
                                <input type="text" class="validate" id="banco">
                                <label for="banco">Banco</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="Agencia" type="text" class="validate">
                                <label for="Agencia">Agencia</label>
                            </div>
                            <div class="input-field col s4">
                                <input id="conta" type="email" class="validate">
                                <label for="conta">Conta</label>
                            </div>

                            <div class="input-field col s2">
                                <input id="digito" type="text" class="validate">
                                <label for="digito">Digito</label>
                            </div>

                            <div class="input-field col s3">
                                <input id="dataDeAbertura" type="text" class="validate">
                                <label for="dataDeAbertura">Data de abertura</label>
                            </div>

                            <div class="input-field col s4">
                                <label>
                                    <input name="group1" type="radio" checked />
                                    <span>Conta Corrente</span>
                                </label>
                            </div>

                            <div class="input-field col s4">
                                <label>
                                    <input name="group1" type="radio" />
                                    <span>Conta Poupança</span>
                                </label>
                            </div>

                            <div class="input-field col s12">
                                <label>
                                    <input type="checkbox" id="liberacao"/>
                                    <span>Liberação em cota de terceiros</span>
                                </label> 
                            </div>

                            <div class="input-field col s12">
                                <div id="dados2" class="row">

                                </div>
                            </div>
                            <div class="input-field col s12">
                                <div id="dados3" class="row">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btn-group" role="group" aria-label="">
                        <a href="#step2" class="btn btn-default back" type="button" data-toggle="tab" data-step="2"><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                        <a href="#step4" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="4">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
                    </div>  
                </div>
            </div>
            <div class="tab-pane fade" id="step4">
                <h3>4. ANEXOS</h3>
                <div class="well">
                    <div class="input-field col s12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Obseervação</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Obseervação</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Obseervação</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                        </div>
                    </div>

                    <div class="input-field col s12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Obseervação</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" placeholder="Upload one or more files">
                        </div>
                    </div>  

                    <div class="btn-group" role="group" aria-label="">
                        <a href="#step2" class="btn btn-default back" type="button" data-toggle="tab" data-step="3" ><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                        <a href="#step4" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="4">Finalizar Proposta&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>   
                    </div>  
                </div>
            </div>
        </div></div>


    <div id="push"></div>

</div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<!-- FIM DAS ABAS -->






