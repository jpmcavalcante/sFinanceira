<!-- progress bar -->
<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" id="progress-bar" style="width: 25%; font-size: 16px " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1/4</div>
</div>  

<nav style="margin-top: 20px">
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-dadosDaOperacao-tab" data-toggle="tab" href="#nav-dadosDaOperacao" role="tab" aria-controls="nav-home" aria-selected="true">1. DADOS DA OPERAÇÃO</a>
    <a class="nav-item nav-link" id="nav-dadosPessoais-tab" data-toggle="tab" href="#nav-dadosPessoais" role="tab" aria-controls="nav-dadosPessoais" aria-selected="false">2. DADOS PESSOAIS</a>
    <a class="nav-item nav-link" id="nav-dadosBancarios-tab" data-toggle="tab" href="#nav-dadosBancarios" role="tab" aria-controls="nav-contact" aria-selected="false">3. DADOS BANCARIOS</a>
    <a class="nav-item nav-link" id="nav-anexos-tab" data-toggle="tab" href="#nav-anexos" role="tab" aria-controls="nav-anexos" aria-selected="false">4. ANEXOS</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-dadosDaOperacao" role="tabpanel" aria-labelledby="nav-dadosDaOperacao-tab">
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
            <a href="" id="dadosP" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="step2">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
    </div>

  </div>
  <div class="tab-pane fade" id="nav-dadosPessoais" role="tabpanel" aria-labelledby="nav-dadosPessoais-tab">
    <div class="row">
            
        <div class="container">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class='form-control' id="cpf" name=cpf>
                </div>

                <div class="form-group col-md-4">
                    <label for="nome" >Nome</label>
                    <input type="text" class=form-control id="nome" name=nome>
                </div>

                <div class="form-group col-md-4">
                    <label for="email">Email</label>
                    <input id="email" type="email" class=form-control maxlength="40" name=email>
                </div>

            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="rg">RG</label>
                    <input id="rg" type="text" class=form-control name=rg>
                </div>

                <div class="form-group col-md-2">
                    <label for="orgaoEmissor">Orgão Emissor</label>
                    <input id="orgaoEmissor" type="text" class=form-control name=orgaoEmissor>
                </div>

                
                <div class=" form-group col-md-2">
                    <label for="estado">Estado</label>
                    <select id="estado" class="form-control" name=estado>
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
                    <input id="dataExpedicao" type="text" class="form-control" name="rg">
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="dataNascimento">Data de nascimento</label>
                    <input id="dataNascimento" type="text" class="form-control" name="dataNascimento">
                </div>

                <div class=" form-group col-md-2">
                    <label>Estado civil</label>
                    <select id="estadoCivil" class="form-control" name="estadoCivil">
                        <option value="" disabled selected>Estado civil</option>
                        <option value="1">Solteiro(a)</option>
                        <option value="1">Casado(a)</option>
                        <option value="1">Divorciado(a)</option>
                        <option value="1">Viúvo(a)</option>
                    </select>
                </div>

                <div class=" form-group col-md-2">
                    <label>Sexo</label>
                    <select id="genero" class="form-control" name="sexo">
                        <option value="" disabled selected>Sexo</option>
                        <option value="1">Msculino</option>
                        <option value="1">feminino</option>
                    </select>
                </div>

                <div class="form-group col-md-3">
                    <label for="telefone">Telefone</label>
                    <input id="telefone" type="text" class="form-control" name="telefone">
                </div>

                <div class="form-group col-md-3">
                    <label for="celular">Celular</label>
                    <input id="celular" type="text" class="form-control" name="celular">
                </div>  
            </div>
            
        </div>
        
        <div class="col-md-12" style="margin-top: 30px;">

            <div class="form-group col-md-3">
                <label for="cep" >CEP</label>
                <input type="text"  id="cep" class="form-control">
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 30px;">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="rua">Endereço</label>
                    <input id="rua" type="text" class=form-control maxlength="50" name=rua>
                </div>

                <div class="form-group col-md-1">
                    <label for="numero">Nº</label>
                    <input id="numero" type="text" class=form-control name=numero>
                </div>

                <div class="form-group col-md-4">
                    <label for="complemento">Complemento</label>
                    <input id="complemento" type="text" class=form-control name=complemento>
                </div>

                <div class="form-group col-md-3">
                    <label for="bairro">Bairro</label>
                    <input id="bairro" type="text" class=form-control name=bairro>
                </div>

                <div class="form-group col-md-1">
                    <label for="uf">Estado</label>
                    <input id="uf" type="text" class=form-control name=uf>
                </div>

                <div class="form-group col-md-3">
                    <label for="cidade">Cidade</label>
                    <input id="cidade" type="text" class=form-control name=cidade>
                </div>

                <div class="form-group col-md-3">
                    <label for="tipoResidencia">Tipo de residencia</label>
                    <input id="tipoResidencia" type="text" class=form-control name=tipoResidencia>
                </div>

                <div class="form-group col-md-3">
                    <label for="tempoResidencia">Tempo de Residencia (anos)</label>
                    <input id="tempoResidencia" type="text" class=form-control name=tempoResidencia>
                </div>

                <div class="form-group col-md-2">
                    <label for="naturalidade">Naturalidaade</label>
                    <input id="naturalidade" type="text" class=form-control name=naturalidade>
                </div>

                <div class="form-group col-md-6">
                    <label for="nomePai">Nome do pai</label>
                    <input id="nomePai" type="text" class=form-control name=pai>
                </div>

                <div class="form-group col-md-6">
                    <label for="nomeMae">Nome da mãe</label>
                    <input id="nomeMae" type="text" class=form-control name=mae>
                </div>

            </div>
        </div>

        <div class="btn-group " role="group" aria-label="">
            <a href="#step1" id="back-dadosO" class="btn back" type="button" data-toggle="tab" data-step="1"><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
            <a href="#step3" id="dadosB" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="3">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>       
        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-dadosBancarios" role="tabpanel" aria-labelledby="nav-dadosBancarios-tab">
    <div class="col s12">
        <div class="row">
            <div class="col-md-12">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="banco">Banco</label>
                        <input id="banco" type="text" class="form-control" name="banco">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="agencia">Agencia</label>
                        <input id="agencia" type="text" class="form-control" name="agencia">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="conta">Conta</label>
                        <input id="conta" type="text" class="form-control" name="conta">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="digito">Digito</label>
                        <input id="digito" type="text" class="form-control" name="digito">
                    </div>

                    <div class="form-group col-md-2">
                        <label for="dataDeAbertura">Data de abertura</label>
                        <input id="dataDeAbertura" type="text" class="form-control" name="dataDeAbertura">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label>
                            <input name="group1" type="radio" id="contaCorrente"/>
                            <span>Conta Corrente</span>
                        </label>

                        <label>
                            <input name="group1" type="radio" id="contaPoupanca"/>
                            <span>Conta Poupança</span>
                        </label>
                    </div>

                    <div class="form-group col-md-12">
                        <label >
                            <input type="checkbox" id="liberacao"/>
                            <span>Liberação em cota de terceiros</span>
                        </label> 
                    </div>

                    <div class="form-group col-md-12">
                        <div id="dados2" class="row">

                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div id="dados3" class="row">
                            <div class="input-field col s12">
                                <div class="row">
                                    <div class="pessoaFisica input-field col s6" hidden>
                                        <input id="nomeTerceiro" name="nomeTerceiro" type="text" class="validate">
                                        <label for="nomeTerceiro" >Nome do Terceiro</label>
                                    </div>
                                    <div class="pessoaFisica input-field col s6" hidden>
                                        <input id="cpfTerceiro" type="text" class="validate" name="cpfTerceiro">
                                        <label for="cpfTerceiro">CPF do Terceiro</label>
                                    </div>
                                </div>
                            </div>
                            <div class="input-field col s12">
                                <span class="pessoaFisica input-field col s12" hidden>Parentesco:</span>
                                <div class=row>
                                    <div class="pessoaFisica input-field col s3" hidden>
                                        <label>
                                            <input name="group3" type="radio" id="paiMae" />
                                            <span>Pai/Mãe</span>
                                        </label>
                                    </div>
                                    <div class="pessoaFisica input-field col s3" hidden>
                                        <label>
                                            <input name="group3" type="radio" id="avos" />
                                            <span>Avô/Avó</span>
                                        </label>
                                    </div>
                                    <div class="pessoaFisica input-field col s3" hidden>
                                        <label>
                                            <input name=group3 type=radio id=filho />
                                            <span>Filho</span>
                                        </label>
                                    </div>
                                    <div class='pessoaFisica input-field col s3' hidden>
                                        <label>
                                            <input name=group3 type=radio  id=irmao />
                                            <span>Irmãos</span>
                                        </label>
                                    </div>
                                    <div class='pessoaFisica input-field col s3' hidden>
                                        <label>
                                            <input name=group3 type=radio id=conjuge />
                                            <span>Conjuge</span>
                                        </label>
                                    </div>
                                    <div class='pessoaFisica input-field col s3' hidden> 
                                        <label>
                                            <input name=group3 type=radio  id=outro />
                                            <span>Outros</span>
                                        </label>
                                    </div>
                                    <div class="pessoaFisica input-field col s4" hidden>
                                        <input id="outro" type="text" class="validate" name="outro">
                                        <label for="outro">Outro</label>
                                    </div>
                                </div>
                            
                                <div class=' input-field col s12'>
                                    <div class='pessoaJuridica input-field col s4' hidden>
                                        <input type='text' class='validate' id='razaoSocial' name='razaoSocial'>
                                        <label for=razaoSocial>Razão Social</label>
                                    </div>
                                    <div class="pessoaJuridica input-field col s4" hidden>
                                        <input id="cnpj" type="text" class="validate" name="cnpj">
                                        <label for="cnpj">CNPJ</label>
                                    </div>
                                    <div class="pessoaJuridica input-field col s4" hidden>
                                        <input id="vinculo" type="text" class="vinculo" name="vinculo">
                                        <label for="vinculo">Vinculo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-group" role="group" >
                <a href="#step2" id="back-dadosP" class="btn back" type="button" data-toggle="tab" data-step="2"><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                <a href="#step4" id="anexos" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="4">Continue&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>    

        </div>
    </div>
  </div>
  <div class="tab-pane fade" id="nav-anexos" role="tabpanel" aria-labelledby="nav-anexos-tab">
    <div class="row">
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

        <div class="btn-group" role="group">
            <a href="#step2" id="back-dadosB" class="btn back" type="button" data-toggle="tab" data-step="3" ><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
            <a href="#step4" class="btn btn-primary next" type="submit" data-toggle="tab" data-step="4">Finalizar Proposta&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></a>   
        </div>  
    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Jquery for Nova Proposta -->
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/novaProposta/etapaS.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/novaProposta/ProgressClick.js"></script>
