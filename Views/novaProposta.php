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
        
        <div class="col-md-12 ">
            <label>Informe o nome do cliente</label>
            <input type="text" name="textoBusca" id="textoBusca" >
        </div>
        <div class="col-md-12 " id="resultado_busca" >

        </div>
        
        <div class="col-md-12 " style="margin-top: 30px;">

            <label for="nome">id</label>
            <input type="text" name="id" id="id" disabled>

            <label for="nome" >Nome</label>
            <input type="text" class="col-md-6 " name="nome" id="nome" disabled>

            <label for="nome">CPF</label>
            <input type="text" name="cpf" id="cpf" disabled>

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

<script>

$(document).ready(function(){

    $('#textoBusca').keyup(function(){
        var textoBusca = $(this).val();

        

        if(textoBusca.length >= 3){

            $.ajax({
                method: 'post', 
                url: "<?php echo BASE_URL;?>Proposta/buscarCliente",
                data: {
                    busca : 'sim',
                    textoBusca: textoBusca
                },
                dataType: 'json',
                success: function(retorno){
                    if(retorno.dados == ''){
                        console.log(retorno)
                        $('#resultado_busca').html('<p>O cliente informado ainda não esta cadastrado!!</p>');
                    }else{
                        $('#resultado_busca').html(retorno.dados);
                    }
                }
            });
        }
    })


    $('body').on("click","#resultado_busca a",function(){
        var dadosCliente = $(this).attr('id');
        var splitDados = dadosCliente.split(':')
        

        $("#id").val(splitDados[0]);
        $("#nome").val(splitDados[1]);
        $("#cpf").val(splitDados[2]);
    })


})
</script>