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


<div class="row mb-2 cd-flex justify-content-center">
    <div class="container-fluid container p-3" style="background: #ccc; width: 85vw; border-radius: 1%;">
    
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">+ Nova Proposta</a>
            </li>
        </ul>
        
        
        <div class="tab-content">

            <!-- progress bar -->
            <div class="progress mt-3">
                <span class="progress-bar bg-success" role="progressbar" id="progress-bar" style="width: 25%; font-size: 16px " aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">1/4</div>
                </span>  

                <nav class="mt-4">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a style="width: 25%" class="nav-item nav-link active" id="nav-dadosDaOperacao-tab" data-toggle="tab" href="#nav-dadosDaOperacao" role="tab" aria-controls="nav-home" aria-selected="true">1. DADOS DA OPERAÇÃO</a>
                        <a style="width: 25%" class="nav-item nav-link" id="nav-dadosPessoais-tab" data-toggle="tab" href="#nav-dadosPessoais" role="tab" aria-controls="nav-dadosPessoais" aria-selected="false">2. DADOS PESSOAIS</a>
                        <a style="width: 25%" class="nav-item nav-link" id="nav-dadosBancarios-tab" data-toggle="tab" href="#nav-dadosBancarios" role="tab" aria-controls="nav-contact" aria-selected="false">3. DADOS BANCARIOS</a>
                        <a style="width: 25%" class="nav-item nav-link" id="nav-anexos-tab" data-toggle="tab" href="#nav-anexos" role="tab" aria-controls="nav-anexos" aria-selected="false">4. ANEXOS</a>
                    </div>
                </nav>

            <form id="etapa1" name="etapa1" action="<?php BASE_URL;?>Proposta/add_action" method="post" enctype="multipart/form-data">
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-dadosDaOperacao" role="tabpanel" aria-labelledby="nav-dadosDaOperacao-tab">

                <div class="mt-4">
                    <input type="hidden" name="nome_colaborador" value="<?php $viewData['colId']->getName(); ?>">
                    
                    <div >
                        <div class="col-md-4">
                            <select class="form-control mt-2" id="operacao" name="operacao" class="form-control">
                                <option value="" disabled selected>selecione um tipo de operação</option>
                                <option value="Cartão de Credito">Cartão de Credito</option>
                            </select>
                            <span id="operacao" hidden></span>
                        </div>
                        <div class="col-md-4">
                            <select id="tabela" name="tabela" class="form-control" hidden>
                                <option value="0" disabled selected>selecione o tipo de tabela</option>
                                <option id="3.7747" value="A">Tabela A</option>
                                <option id="3.3667" value="B">Tabela B</option>
                                <option id="3.0847" value="C">Tabela C</option>
                                <option id="2.7198" value="D">Tabela D</option>
                                <option id="2.5697" value="E">Tabela E</option>
                                <option id="2.3397" value="F">Tabela F</option>
                                <option id="2.1836" value="G">Tabela G</option>
                                <option id="2.0244" value="H">Tabela H</option>
                                <option id="1.9439" value="I">Tabela I</option>
                                <option id="1.8627" value="J">Tabela J</option>
                                <option id="1.7807" value="K">Tabela K</option>
                                <option id="1.6977" value="L">Tabela L</option>
                                <option id="1.6145" value="M">Tabela M</option>
                            </select>
                            <span id="tabela" hidden></span>
                        </div>

                    </div>
                    <hr style="background: #474747; height: 5px;">
                    <div style="margin: 20px; font-weight: bold;">
                        <span id="content" ></span>
                    </div>
                    <hr>
                    
                    <!--INICIO 1ª ETAPA-->
                    <div id="div-etapa1" hidden>

                            <!--VALOR E PARCELAS-->
                                <div class="">
                                    <div class="input-group col-md-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">R$</span>
                                        </div>
                                        <div >
                                            <input type="text" class="form-control valor" id="valor" name="valor" placeholder="Digite o Valor">
                                        </div>
                                        <span id="valor" hidden></span>
                                    </div>
                                    <div class="input-group col-md-4">
                                        <select id="QtParcelas" name="QtParcelas" class="form-control-sm">
                                            <option value="" disabled selected>Parcelas</option>
                                        </select>
                                        <span id="QtParcelas" hidden></span>
                                        <input type="text" id="valorParcela" name="valorParcela" hidden>
                                    </div> 
                                    <span class="input-group col-md-2" id="total" style="margin-top: 5px; font-weight: bold;  color: red;"></span>
                            
                                    <input style="display: none;" id="valorFinal" type="text" name="valorFinal" readonly>
                                </div>
                            
                            <!--FIM VALOR E PARCELAS-->
                            <!-- VALOR TOTAL -->
                            
                            <hr style="background: #474747; height: 5px;">
                            <!-- BANDEIARA -->
                            <div class="col-md-4 mb-1">
                                <select id="bandeiraBancaria" name="bandeiraBancaria" class="form-control">
                                    <option value="" disabled selected>Bandeira do Cartão</option>
                                    <option value="Elo" >Elo</option>
                                    <option value="Visa" >Visa</option>
                                    <option value="Amex" >Amex</option>
                                    <option value="HiperCard" >HiperCard</option>
                                    <option value="MasterCard" >MasterCard</option>
                                </select>
                                <span id="bandeiraBancaria" hidden></span>
                            </div>
                            <!-- Numero do cartão -->
                            <div class="col-md-4 mb-1">
                                <div >
                                    <input type="text" class="form-control" id="numeroCartao" name="numeroCartao" placeholder="Nº do Cartão">
                                </div>
                                <span id="numeroCartao" hidden></span>
                            </div>
                            <!-- Titular do cartão -->
                            <div class="col-md-4 mb-1">
                                <div >
                                    <input type="text" class="form-control" id="titular" name="titular" placeholder="Nome Impresso no Cartão">
                                </div>
                                <span id="titular" hidden></span>
                            </div>
                            <!-- Mês Vencimento -->
                            <div class="col-md-4 mb-1">
                                <select id="mesVenci" name="mesVenci" class="form-control">
                                    <option value="" disabled selected>Mês Vencimento</option>
                                    <option value="Janeiro">Janeiro</option>
                                    <option value="Fevereiro">Fevereiro</option>
                                    <option value="Março">Março</option>
                                    <option value="Abril">Abril</option>
                                    <option value="Maio">Maio</option>
                                    <option value="Junho">Junho</option>
                                    <option value="Julho">Julho</option>
                                    <option value="Agosto">Agosto</option>
                                    <option value="Setembro">Setembro</option>
                                    <option value="Outubro">Outubro</option>
                                    <option value="Novembro">Novembro</option>
                                    <option value="Dezembro">Dezembro</option>
                                </select>
                                <span id="mesVenci" hidden></span>
                            </div>
                            <!-- Ano vencimento -->
                            <div class="col-md-4 mb-1">
                                <select id="anoVenci" name="anoVenci" class="form-control">
                                    <option value="" disabled selected>Ano Vencimento</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                </select>
                                <span id="anoVenci" hidden></span>
                            </div>
                            <!-- codigo Sg -->
                            <div class="col-md-4">
                                <label for="codigoSeguranca" class="col-sm-6 col-form-label">Codigo de Segurança</label>
                                <div >
                                    <input type="text" class="form-control" id="codigoSeguranca" name="codigoSeguranca" placeholder="">
                                </div>
                                <span id="codigoSeguranca" hidden></span>
                            </div>
                        </div>

                        <button id="dadosP" class="btn btn-info next mt-2" type="button" >Continue</button>  
                        
                    </div>
                    <!--FIM 1ª ETAPA-->

                </div>

            <!--INÍCIO 2ª ETAPA-->
            <div class="tab-pane fade" id="nav-dadosPessoais" role="tabpanel" aria-labelledby="nav-dadosPessoais-tab">
                <div class="row mt-3">
                    
                    <div class="col-md-12 ">
                        <label>Nome do Cliente</label>
                        <input class="form-control-sm" type="text" name="textoBusca" id="textoBusca" >
                        <span id="textoBusca" hidden></span>
                    </div>
                    
                    <span style="color: red;" class="col-md-12 " id="resultado_busca"></span>
                           
                    <div class="col-md-12 " style="margin-top: 30px;">

                        <label for="nome">ID</label>
                        <input type="text" name="idCli" id="id" disabled>

                        <label for="nome" >Nome</label>
                        <input type="text" class="col-md-6 " name="nome" id="nome">

                        <label for="nome">CPF</label>
                        <input type="text" name="cpfCli" id="cpf" >

                        <span id="idCli" hidden></span>
                    </div>

                    <div class="btn-group " role="group" aria-label="">
                        <a href="#step1" id="back-dadosO" class="btn back" type="button" data-toggle="tab" data-step="1"><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                        <button" id="dadosB" class="btn btn-primary next" type="button">Continue</button>       
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
                                    <span id="banco" hidden></span>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="agencia">Agencia</label>
                                    <input id="agencia" type="text" class="form-control" name="agencia">
                                    <span id="agencia" hidden></span>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="conta">Conta</label>
                                    <input id="conta" type="text" class="form-control" name="conta">
                                    <span id="conta" hidden></span>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="digito">Digito</label>
                                    <input id="digito" type="text" class="form-control" name="digito">
                                    <span id="digito" hidden></span>
                                </div>

                                <div class="form-group col-md-2">
                                    <label for="dataDeAbertura">Data de abertura</label>
                                    <input id="dataDeAbertura" type="text" class="form-control" name="dataDeAbertura">
                                    <span id="dataDeAbertura" hidden></span>
                                </div>
                                
                                <div class="form-group col-md-4">
                                    <label>
                                        <input name="group1" type="radio" value="contaCorrente"/>
                                        <span>Conta Corrente</span>
                                    </label>

                                    <label>
                                        <input name="group1" type="radio" value="contaPoupanca"/>
                                        <span>Conta Poupança</span>
                                    </label>
                                    <span id="group1" hidden></span>
                                </div>

                                <div class="form-group col-md-12">
                                    <label >
                                        <input type="checkbox" id="liberacao"/>
                                        <span>Liberação em cota de terceiros</span>
                                    </label> 
                                </div>

                                <div class="form-group col-md-12">
                                    <div id="dados2" class="row">
                                        <div id="open" hidden>
                                            <div class="form-group col-md-4">
                                                <select name="pessoa" id="pessoa" class="form-control">
                                                    <option value="" selected disabled>Selecione o tipo de pessoa</option>
                                                    <option value="Pessoa Fisíca">Pessoa Fisíca</option>
                                                    <option value="Pessoa Juridica" >Pessoa Juridica</option>
                                                </select>
                                                <span id="pessoa" hidden></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <div id="dados3" class="row">
                                        <div class="input-field col s12">
                                            <div class="row">
                                                <div class="pessoaFisica input-field col s6" hidden>
                                                    <input id="nomeTerceiro" name="nomeTerceiro" type="text" class="validate">
                                                    <label for="nomeTerceiro" >Nome do Terceiro</label>
                                                    <span id="nomeTerceiro" hidden></span>
                                                </div>
                                                <div class="pessoaFisica input-field col s6" hidden>
                                                    <input id="cpfTerceiro" type="text" class="validate" name="cpfTerceiro">
                                                    <label for="cpfTerceiro">CPF do Terceiro</label>
                                                    <span id="cpfTerceiro" hidden></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="input-field col s12">
                                            <span class="pessoaFisica input-field col s12" hidden>Parentesco:</span>
                                            <div class=row>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio" value="paiMae" />
                                                        <span>Pai/Mãe</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio" value="avos" />
                                                        <span>Avô/Avó</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio" value="filho" />
                                                        <span>Filho</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio"  value="irmao" />
                                                        <span>Irmãos</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio" value="conjuge" />
                                                        <span>Conjuge</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s3" hidden>
                                                    <label>
                                                        <input name="group3" type="radio"  value="outro" />
                                                        <span>Outros</span>
                                                    </label>
                                                </div>
                                                <div class="pessoaFisica input-field col s4" hidden>
                                                    <input id="outro" type="text" class="validate" name="outro">
                                                    <label for="outro">Outro</label>
                                                </div>
                                                <span id="group3" hidden></span>
                                            </div>
                                        
                                            <div class="input-field col s12">
                                                <div class="pessoaJuridica input-field col s4" hidden>
                                                    <input type="text" class="validate" id="razaoSocial" name="razaoSocial">
                                                    <label for="razaoSocial">Razão Social</label>
                                                    <span id="razaoSocial" hidden></span>
                                                </div>
                                                <div class="pessoaJuridica input-field col s4" hidden>
                                                    <input id="cnpj" type="text" class="validate" name="cnpj">
                                                    <label for="cnpj">CNPJ</label>
                                                    <span id="cnpj" hidden></span>
                                                </div>
                                                <div class="pessoaJuridica input-field col s4" hidden>
                                                    <input id="vinculo" type="text" class="vinculo" name="vinculo">
                                                    <label for="vinculo">Vinculo</label>
                                                    <span id="vinculo" hidden></span>
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
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Obseervação</label>
                                <input type="file" name="arquivo[]" class="form-control-file" id="file1"  accept="application/pdf"> 
                            </div>
                            <div class="file-path-wrapper">
                                <input id="obs1 " name="obss[]" class="file-path validate"  type="text" placeholder="Observação" >
                            </div>
                            <span id="obs1" hidden></span>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Obseervação</label>
                                <input type="file" name="arquivo[]" class="form-control-file" id="file2">
                            </div>
                            <div class="file-path-wrapper">
                                    <input id="obs2" name="obss[]" class="file-path validate" type="text" placeholder="Observação" accept="application/pdf" >
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Obseervação</label>
                                <input type="file" name="arquivo[]" class="form-control-file" id="file3">
                            </div>
                            <div class="file-path-wrapper">
                                <input id="obs3" name="obss[]" class="file-path validate" type="text" placeholder="Observação" accept="application/pdf">  
                            </div>
                        </div> 
                
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Obseervação</label>
                                <input type="file" name="arquivo[]" class="form-control-file" id="file4">
                            </div>
                            <div class="file-path-wrapper">
                                    <input id="obs4" name="obss[]" class="file-path validate" type="text" placeholder="Observação" accept="application/pdf">
                            </div>
                        </div>
                
                        <div class="btn-group" role="group">
                            <a href="#step2" id="back-dadosB" class="btn back" type="button" data-toggle="tab" data-step="3" ><span class="glyphicon glyphicon-chevron-left">&nbsp;Back</span></a>
                            <button id="enviar" class="btn btn-primary next" type="button" >Finalizar Proposta&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
                            <button id="enviarr" class="btn btn-primary next" type="submit" hidden></button>
                        </div>
                </div>
                
                </div>

            </div>
            </div>
        </form>
        </div><!-- /.col -->
    </div><!-- /.row -->
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
                        $('#resultado_busca').html('<p>O cliente informado ainda não esta cadastrado!!</p><br><a href="<?php echo BASE_URL;?>cliente">Cadastrar cliente</a>');
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