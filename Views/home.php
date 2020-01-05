
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
            <!--INICIO FORMULARIO-->
            <form class="form-inline d-flex" style="margin-top: 2%;">

                <input type="text" name='nome' class="form-control" id="id" placeholder="Nome ou ID de Proposta">
                <p>e/ou</p>
                <input type="text" name='nome' class="form-control" id="id" placeholder="CPF do Cliente">
                <p>e/ou</p>

                <p>e/ou</p>
                <input type="text" name='nome' class="form-control" id="id" placeholder="Inicio">
                <p>e/ou</p>
                <input type="text" name='nome' class="form-control" id="id" placeholder="Fim">

                <button style="margin: 0 .5%;" type="submit" class="btn btn-primary"><i class="fas fa-plus"></i></button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
            </form>
            <!--FIM FORMULARIO-->

            <div role="tabpanel" class="tab-pane active ac" id="Novas">

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

                    <?php foreach ($listarPropostasNova as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['qtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-xs btn-primary">Editar</a>
                                    <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                    <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                    <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                    <button id="<?php echo $item['id'];?>" class="canceladas btn btn-xs btn-danger" target="_blank">Cancelar</button>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>
            </div> <!--Fim div nova-->
            <div role="tabpanel" class="tab-pane ac" id="Analise">
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

                    <?php foreach ($listarPropostasAnalise as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

                            <td>
                                <div class="btn-group">
                                    <a href="" class="btn btn-xs btn-primary">Editar</a>
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

                </table>        
            
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Aprovadas">

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

                    <?php foreach ($listarPropostasAprovadas as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

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

                </table>


            </div><!--Fim div Aprovadas-->
            <div role="tabpanel" class="tab-pane ac" id="Reprovadas">
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

                    <?php foreach ($listarPropostasReprovadas as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

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

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Pendentes">
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

                    <?php foreach ($listarPropostasPendentes as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

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

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Canceladas">
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

                    <?php foreach ($listarPropostasCanceladas as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

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

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Pagas">
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

                    <?php foreach ($listarPropostasPagas as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

                            <td>
                                <div class="btn-group">
                                    <button id="<?php echo $item['id'];?>" class="desativadas btn btn-xs btn-danger">Desativar</button>
                                    <button id="<?php echo $item['id'];?>" class="aprovada btn btn-xs btn-danger" target="_blank">Aprovada</button>
                                    <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                    <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
            <div role="tabpanel" class="tab-pane ac" id="Desativadas">
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

                    <?php foreach ($listarPropostasDesativadas as $item): ?>
                        <tr>
                            <td><?php echo $item['data_proposta'];?></td>
                            <td><?php echo $item['operacao'];?></td>
                            <td><?php echo $item['nome_cli'];?></td>
                            <td><?php echo $item['valor'];?></td>
                            <td><?php echo $item['QtParcelas'];?></td>
                            <td><?php echo $item['nome_colaborador'];?></td>

                            <td>
                                <div class="btn-group">
                                    <button id="<?php echo $item['id'];?>" class="ativas btn btn-xs btn-primary">Ativar</button>
                                    <button id="<?php echo $item['id'];?>" class="analise btn btn-xs btn-danger" target="_blank">Analise</button>
                                    <a href="<?php echo BASE_URL;?>Arquivo/relatorio_action?proposta=<?php echo $item['id']?>" class="btn btn-xs btn-primary" target="_blank">Relatorio</a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script>

$('.analise').click(function(){
    var id =$(this).attr("id");

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
$('.aprovada').click(function(){
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
$('.reprovada').click(function(){
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
$('.pendente').click(function(){
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
$('.pagas').click(function(){
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
$('.canceladas').click(function(){
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
$('.desativadas').click(function(){
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

$('.ativas').click(function(){
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




