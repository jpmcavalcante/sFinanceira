<div class="row mb-2 cd-flex justify-content-center">
    <div class="container-fluid">
    
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" href="#">Novas Propostas</a>
        </li>
    </ul>

    <!--INICIO SEGUNDO MENU-->
    <ul class="nav nav-tabs" style="margin-top: 2%;">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo BASE_URL;?>proposta">+ Nova Proposta</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Novas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Em Análise</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Aprovadas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Reprovadas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Pendentes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Pagas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="#">Canceladas</a>
        </li>
    </ul>
    <!--FIM SEGUNDO MENU-->

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

    <!--INICIO TABELA-->
    <table class="table table-bordered table-light">
            <tr">
                <th>Data</th>
                <th>Tipo</th>
                <th>Nome</th>
                <th>Valor Financiado</th>
                <th>Franqueado</th>
                <th>Última Atualização</th>
                <th>Funções</th>
            </tr>

    </table>
    <!--INICIO TABELA-->
        
    </div><!-- /.col -->
</div><!-- /.row -->


