
<section>
    <h1>Colaborador</h1>
</section>


<section class="content-fluid">
    <div class="box">

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



        <div class="box-header">
            <h3 class="info-box-text">Cadastrar Colaboradores</h3>
            <div class="box-tools">
                <a href="<?php echo BASE_URL.'colaborador/add' ;?>" class="btn btn-success">Adicionar</a>
            </div>
        </div>
</div>

<table class="table">
    <tr>
        <th>Nome do colaborador</th>
        <th>Email</th>
        <th>Atendente</th>
        <th>Unidade</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($list as $item): ?>
        <tr>
            <td><?php echo $item['nome'];?></td>
            <td><?php echo $item['email'];?></td>
            <td><?php echo $item['atendente'];?></td>
            <td><?php echo $item['unidade'];?></td>
            <td>
                <a href="<?php echo BASE_URL.'colaborador/edit/'.$item['id'];?>" class="btn btn-xs btn-primary">Editar</a>
                <a href="<?php echo BASE_URL.'colaborador/del/'.$item['id'];?>" class="btn btn-xs btn-primary">Deletar</a>
            </td>


        </tr>
    <?php endforeach;?>
</table>
</section>