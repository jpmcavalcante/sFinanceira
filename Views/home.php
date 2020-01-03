
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
                <a href=""></a>
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

                                    <a href="" class="btn btn-xs btn-danger">Excluir</a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>
            </div> <!--Fim div nova-->

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
                                    <a href="" class="btn btn-xs btn-primary">Editar</a>

                                    <a href="" class="btn btn-xs btn-danger">Excluir</a>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; ?>

                </table>


            </div><!--Fim div Aprovadas-->
            <div role="tabpanel" class="tab-pane ac" id="Reprovadas">Reprovadas</div>
            <div role="tabpanel" class="tab-pane ac" id="Pendentes">Pendentes</div>
            <div role="tabpanel" class="tab-pane ac" id="Canceladas">Canceladas</div>
            <div role="tabpanel" class="tab-pane ac" id="Pagas">Pagas</div>

        </div><!-- /.col -->
    </div><!-- /.row -->
</div>



