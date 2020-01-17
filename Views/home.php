
<div class="row mb-2 mr-0 d-flex justify-content-center container-fluid">
    <div class="container">

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="#">Novas Propostas</a>
            </li>
        </ul>

        <!--INICIO SEGUNDO MENU-->
        <ul class="nav nav-tabs" style="margin-top: 2%; color: black;">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL;?>proposta" >+ Nova Proposta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" role="tab" data-toggle="tab"  href="#Novas">Novas</a>
            </li>
            <li class="nav-item">
            <a class="nav-link " role="tab" data-toggle="tab" href="#Analise">Em Analise</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Aprovadas">Aprovadas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Reprovadas">Reprovadas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Pendentes">Pendentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Pagas">Pagas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Canceladas">Canceladas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " role="tab" data-toggle="tab" href="#Desativadas">Desativadas</a>
            </li>
        </ul>
        <!--FIM SEGUNDO MENU-->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active ac" id="Novas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" id="cpf" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini" placeholder="Inicio">

                    <input id="status" type="text" value="1"  hidden>

                    <button style="margin: 0 .5%;" type="button" class="voltar btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="novas btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>


                    <tbody id="novas" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllNew">
                        <?php foreach ($listarPropostasNova as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <!-- <a href="" class="btn btn-xs btn-primary">Editar</a> -->
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                        <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div> <!--Fim div nova-->
            <div role="tabpanel" class="tab-pane ac" id="Analise">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" class="form-control" id="nomeid1" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" class="form-control" data-mask="999.999.999-99" id="cpf1" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" class="form-control" id="ini1" placeholder="Inicio">

                    <input id="status1" type="text" value="2"  hidden>

                    <button style="margin: 0 .5%;" type="button" class="voltar1 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="analise1 busca btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="analise" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllAna">
                        <?php foreach ($listarPropostasAnalise as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <!-- <a href="" class="btn btn-xs btn-primary">Editar</a> -->
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <button id="<?php echo $item['id'];?>" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button>
                                        <button id="<?php echo $item['id'];?>" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button>
                                        <button id="<?php echo $item['id'];?>" class="pendente btn-xs btn-danger" target="_blank">Pendente</button>
                                        <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>        
            
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Aprovadas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid2" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf2" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini2" placeholder="Inicio">

                    <input id="status2" type="text" value="3"  hidden>

                    <button style="margin: 0 .5%;" type="button" class="voltar2 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="aprovados2 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="aprovados" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllApro">
                        <?php foreach ($listarPropostasAprovadas as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <button id="<?php echo $item['id'];?>" class="reprovada btn-xs btn-danger" target="_blank">Reprovada</button>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                        <button id="<?php echo $item['id'];?>" class="pagas btn-xs btn-danger" target="_blank">Paga</button>
                                        <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>


            </div><!--Fim div Aprovadas-->
            <div role="tabpanel" class="tab-pane ac" id="Reprovadas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid3" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf3" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini3" placeholder="Inicio">

                    <input id="status3" type="text" value="4"  hidden>

                    <button style="margin: 0 .5%;" type="submit" class="voltar3 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="reprovados3 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="reprovados" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllRepro">
                        <?php foreach ($listarPropostasReprovadas as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" >Analise</button>
                                        <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" >Cancelar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Pendentes">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid4" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf4" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini4" placeholder="Inicio">

                    <input id="status4" type="text" value="5"  hidden>

                    <button style="margin: 0 .5%;" type="submit" class="voltar4 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="pendentes4 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="pendentes" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllPend">
                        <?php foreach ($listarPropostasPendentes as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                        <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Canceladas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid5" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf5" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini5" placeholder="Inicio">

                    <input id="status5" type="text" value="6"  hidden>

                    <button style="margin: 0 .5%;" type="submit" class="voltar5 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="canceladas5 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>

                        
                    </tr>

                    <tbody id="canceladas" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllCance">
                        <?php foreach ($listarPropostasCanceladas as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <button id="<?php echo $item['id'];?>" class="ativas btn btn-xs btn-primary">Ativar</button>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Pagas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid6" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf6" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini6" placeholder="Inicio">

                    <input id="status6" type="text" value="7"  hidden>

                    <button style="margin: 0 .5%;" type="submit" class="voltar6 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="pagas6 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="pagas" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllPagas">
                        <?php foreach ($listarPropostasPagas as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Desativadas">
                <!--INICIO FORMULARIO-->
                <div class="form-inline d-flex" style="margin-top: 2%;">

                    <input type="text" name='nome/id' class="form-control" id="nomeid7" placeholder="Nome ou ID de Proposta">
                    <p>e/ou</p>
                    <input type="text" name='cpf' class="form-control" data-mask="999.999.999-99" id="cpf7" placeholder="CPF do Cliente">
                    <p>e/ou</p>

                    <p>e/ou</p>
                    <input type="date" name='ini' class="form-control" id="ini7" placeholder="Inicio">

                    <input id="status7" type="text" value="8"  hidden>

                    <button style="margin: 0 .5%;" type="submit" class="voltar7 btn btn-primary"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="desativadas7 btn btn-primary"><i class="fas fa-search"></i></button>
                </div>
                <!--FIM FORMULARIO-->
                <!--INICIO TABELA-->
                <table class="table table-bordered table-light mt-2">
                    <tr class="bg-info text-center">
                        <th>Data</th>
                        <th>Tipo</th>
                        <th>Nome</th>
                        <th>Valor Financiado</th>
                        <th>Franqueado</th>
                        <th>Última Atualização</th>
                        <th>Funções</th>
                    </tr>

                    <tbody id="desativadas" hidden>
                    
                               
                    </tbody>

                    <tbody id="listAllDesa">
                        <?php foreach ($listarPropostasDesativadas as $item): ?>
                            <tr>
                                <td><?php echo $item['data_proposta'];?></td>
                                <td><?php echo $item['operacao'];?></td>
                                <td><?php echo $item['nome_cli'];?></td>
                                <td><?php echo $item['valor'];?></td>
                                <td><?php echo $item['nome_colaborador'];?></td>
                                <td><?php echo $item['data_atualizacao'];?></td>
                                

                                <td>
                                    <div class="btn-group">
                                        <button id="<?php echo $item['id'];?>" class="ativas btn btn-xs btn-primary">Ativar</button>
                                        <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                        <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script>
$("body").on('click','.relatorio', function(){
    var valor = $(".relatorio").attr("id");
    window.open("<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta="+valor);
})

$('.novas').click(function(){
    var valor=$('#nomeid').val();
    var nome , id;
    var cpf =$('#cpf').val();
    var ini =$('#ini').val();
    var status =$('#status').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#novas').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#novas').html(retorno.dados);
                    $("#listAllNew").attr("hidden" , true);
                    $("#novas").attr("hidden" , false);
                }
            } 
        });

})
$('.analise1').click(function(){
    var valor=$('#nomeid1').val();
    var nome , id;
    var cpf =$('#cpf1').val();
    var ini =$('#ini1').val();
    var status =$('#status1').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#analise').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#analise').html(retorno.dados);
                    $("#listAllAna").attr("hidden" , true);
                    $("#analise").attr("hidden" , false);
                }
            } 
        });

})
$('.aprovados2').click(function(){
    var valor=$('#nomeid2').val();
    var nome , id;
    var cpf =$('#cpf2').val();
    var ini =$('#ini2').val();
    var status =$('#status2').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#aprovados').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#aprovados').html(retorno.dados);
                    $("#listAllApro").attr("hidden" , true);
                    $("#aprovados").attr("hidden" , false);
                }
            } 
        });

})
$('.reprovados3').click(function(){
    var valor=$('#nomeid3').val();
    var nome , id;
    var cpf =$('#cpf3').val();
    var ini =$('#ini3').val();
    var status =$('#status3').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#reprovados').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#reprovados').html(retorno.dados);
                    $("#listAllRepro").attr("hidden" , true);
                    $("#reprovados").attr("hidden" , false);
                }
            } 
        });

})
$('.pendentes4').click(function(){
    var valor=$('#nomeid4').val();
    var nome , id;
    var cpf =$('#cpf4').val();
    var ini =$('#ini4').val();
    var status =$('#status4').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#pendentes').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#pendentes').html(retorno.dados);
                    $("#listAllPend").attr("hidden" , true);
                    $("#pendentes").attr("hidden" , false);
                }
            } 
        });

})
$('.canceladas5').click(function(){
    var valor=$('#nomeid5').val();
    var nome , id;
    var cpf =$('#cpf5').val();
    var ini =$('#ini5').val();
    var status =$('#status5').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#canceladas').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#canceladas').html(retorno.dados);
                    $("#listAllCance").attr("hidden" , true);
                    $("#canceladas").attr("hidden" , false);
                }
            } 
        });

})

$('.pagas6').click(function(){
    var valor=$('#nomeid6').val();
    var nome , id;
    var cpf =$('#cpf6').val();
    var ini =$('#ini6').val();
    var status =$('#status6').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#pagas').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#pagas').html(retorno.dados);
                    $("#listAllPagas").attr("hidden" , true);
                    $("#pagas").attr("hidden" , false);
                }
            } 
        });

})
$('.desativadas7').click(function(){
    var valor=$('#nomeid7').val();
    var nome , id;
    var cpf =$('#cpf7').val();
    var ini =$('#ini7').val();
    var status =$('#status7').val();

    if(isNumber(valor) == true){
        id = valor;
        nome = "";
    }
    if(isNumber(valor) == false){
        id = "";
        nome = valor;
    }
    if(ini != ""){
        ini = ini.split('-');
        ini = ini[2] +"/"+ ini[1] +"/"+ ini[0];

        nome = "";
        id = "";
        cpf = "";
        ini = ini;
    }
    $.ajax({
            method: 'post', 
            url: "<?php echo BASE_URL;?>Proposta/bucarProposta",
            data: {
                status: status,
                nome : nome,
                id : id,
                cpf : cpf,
                mesInicio : ini,
            },
            dataType: 'json',
            success: function(retorno){
                if(retorno.dados == ''){
                    $('#desativadas').html('<p>Nunhum resultado encontrado!</p>');
                }else{
                    $('#desativadas').html(retorno.dados);
                    $("#listAllDesa").attr("hidden" , true);
                    $("#desativadas").attr("hidden" , false);
                }
            } 
        });

})
$(".voltar").click(function(){
    $("#listAllNew").attr("hidden" , false);
    $("#novas").attr("hidden" , true);
})
$(".voltar1").click(function(){
    $("#listAllAna").attr("hidden" , false);
    $("#analise").attr("hidden" , true);
})
$(".voltar2").click(function(){
    $("#listAllApro").attr("hidden" , false);
    $("#aprovados").attr("hidden" , true);
})
$(".voltar3").click(function(){
    $("#listAllRepro").attr("hidden" , false);
    $("#reprovados").attr("hidden" , true);
})
$(".voltar4").click(function(){
    $("#listAllPend").attr("hidden" , false);
    $("#pendentes").attr("hidden" , true);
})
$(".voltar5").click(function(){
    $("#listAllCance").attr("hidden" , false);
    $("#canceladas").attr("hidden" , true);
})
$(".voltar6").click(function(){
    $("#listAllPagas").attr("hidden" , false);
    $("#pagas").attr("hidden" , true);
})
$(".voltar7").click(function(){
    $("#listAllDesa").attr("hidden" , false);
    $("#desativadas").attr("hidden" , true);
})
function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

//ACTION OF BUTONS  
$('body').on('click','.analise',function(){
    var id = $('.analise').attr("id");
    console.log(id)
    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/analise_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.aprovada',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/aprovada_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.reprovada',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/reprovada_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.pendente',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/pendente_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.pagas',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/pagas_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.canceladas',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/canceladas_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})
$('body').on('click','.desativadas',function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/desativadas_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})

$('body').on('click','.ativas', function(){
    var id =$(this).attr("id");

    $.ajax({
        method: 'post', 
        url: "<?php echo BASE_URL;?>Proposta/ativas_action",
        data: {
            idProposta: id
        },
        dataType: 'json'
    }).done(function() {
        location.reload();
    });;

})

</script>




